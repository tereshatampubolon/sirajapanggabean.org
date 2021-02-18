<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Fungsis Controller
 *
 * @property \App\Model\Table\FungsisTable $Fungsis
 * @method \App\Model\Entity\Fungsi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FungsisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups'],
        ];
        $fungsis = $this->paginate($this->Fungsis);

        $this->set(compact('fungsis'));
    }

    /**
     * View method
     *
     * @param string|null $id Fungsi id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fungsi = $this->Fungsis->get($id, [
            'contain' => ['Groups', 'Modules'],
        ]);

        $this->set(compact('fungsi'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fungsi = $this->Fungsis->newEmptyEntity();
        if ($this->request->is('post')) {
            $fungsi = $this->Fungsis->patchEntity($fungsi, $this->request->getData());
            if ($this->Fungsis->save($fungsi)) {
                $this->Flash->success(__('The fungsi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fungsi could not be saved. Please, try again.'));
        }
        $groups = $this->Fungsis->Groups->find('list', ['limit' => 200]);
        $modules = $this->Fungsis->Modules->find('list', ['limit' => 200]);
        $this->set(compact('fungsi', 'groups', 'modules'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fungsi id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fungsi = $this->Fungsis->get($id, [
            'contain' => ['Modules'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fungsi = $this->Fungsis->patchEntity($fungsi, $this->request->getData());
            if ($this->Fungsis->save($fungsi)) {
                $this->Flash->success(__('The fungsi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fungsi could not be saved. Please, try again.'));
        }
        $groups = $this->Fungsis->Groups->find('list', ['limit' => 200]);
        $modules = $this->Fungsis->Modules->find('list', ['limit' => 200]);
        $this->set(compact('fungsi', 'groups', 'modules'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fungsi id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fungsi = $this->Fungsis->get($id);
        if ($this->Fungsis->delete($fungsi)) {
            $this->Flash->success(__('The fungsi has been deleted.'));
        } else {
            $this->Flash->error(__('The fungsi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
