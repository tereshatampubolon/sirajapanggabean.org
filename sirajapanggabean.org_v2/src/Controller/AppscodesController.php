<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Appscodes Controller
 *
 * @property \App\Model\Table\AppscodesTable $Appscodes
 * @method \App\Model\Entity\Appscode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppscodesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $appscodes = $this->paginate($this->Appscodes);

        $this->set(compact('appscodes'));
    }

    /**
     * View method
     *
     * @param string|null $id Appscode id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appscode = $this->Appscodes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('appscode'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appscode = $this->Appscodes->newEmptyEntity();
        if ($this->request->is('post')) {
            $appscode = $this->Appscodes->patchEntity($appscode, $this->request->getData());
            if ($this->Appscodes->save($appscode)) {
                $this->Flash->success(__('The appscode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appscode could not be saved. Please, try again.'));
        }
        $this->set(compact('appscode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appscode id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appscode = $this->Appscodes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appscode = $this->Appscodes->patchEntity($appscode, $this->request->getData());
            if ($this->Appscodes->save($appscode)) {
                $this->Flash->success(__('The appscode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appscode could not be saved. Please, try again.'));
        }
        $this->set(compact('appscode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appscode id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appscode = $this->Appscodes->get($id);
        if ($this->Appscodes->delete($appscode)) {
            $this->Flash->success(__('The appscode has been deleted.'));
        } else {
            $this->Flash->error(__('The appscode could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
