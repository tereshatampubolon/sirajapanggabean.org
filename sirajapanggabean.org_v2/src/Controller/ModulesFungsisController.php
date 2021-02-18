<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ModulesFungsis Controller
 *
 * @property \App\Model\Table\ModulesFungsisTable $ModulesFungsis
 * @method \App\Model\Entity\ModulesFungsi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModulesFungsisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Modules'],
        ];
        $modulesFungsis = $this->paginate($this->ModulesFungsis);

        $this->set(compact('modulesFungsis'));
    }

    /**
     * View method
     *
     * @param string|null $id Modules Fungsi id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modulesFungsi = $this->ModulesFungsis->get($id, [
            'contain' => ['Modules'],
        ]);

        $this->set(compact('modulesFungsi'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modulesFungsi = $this->ModulesFungsis->newEmptyEntity();
        if ($this->request->is('post')) {
            $modulesFungsi = $this->ModulesFungsis->patchEntity($modulesFungsi, $this->request->getData());
            if ($this->ModulesFungsis->save($modulesFungsi)) {
                $this->Flash->success(__('The modules fungsi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modules fungsi could not be saved. Please, try again.'));
        }
        $modules = $this->ModulesFungsis->Modules->find('list', ['limit' => 200]);
        $this->set(compact('modulesFungsi', 'modules'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Modules Fungsi id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modulesFungsi = $this->ModulesFungsis->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modulesFungsi = $this->ModulesFungsis->patchEntity($modulesFungsi, $this->request->getData());
            if ($this->ModulesFungsis->save($modulesFungsi)) {
                $this->Flash->success(__('The modules fungsi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modules fungsi could not be saved. Please, try again.'));
        }
        $modules = $this->ModulesFungsis->Modules->find('list', ['limit' => 200]);
        $this->set(compact('modulesFungsi', 'modules'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Modules Fungsi id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modulesFungsi = $this->ModulesFungsis->get($id);
        if ($this->ModulesFungsis->delete($modulesFungsi)) {
            $this->Flash->success(__('The modules fungsi has been deleted.'));
        } else {
            $this->Flash->error(__('The modules fungsi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
