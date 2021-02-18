<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PomparansOld Controller
 *
 * @property \App\Model\Table\PomparansOldTable $PomparansOld
 * @method \App\Model\Entity\PomparansOld[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PomparansOldController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentPomparansOld', 'Users'],
        ];
        $pomparansOld = $this->paginate($this->PomparansOld);

        $this->set(compact('pomparansOld'));
    }

    /**
     * View method
     *
     * @param string|null $id Pomparans Old id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pomparansOld = $this->PomparansOld->get($id, [
            'contain' => ['ParentPomparansOld', 'Users', 'ChildPomparansOld'],
        ]);

        $this->set(compact('pomparansOld'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pomparansOld = $this->PomparansOld->newEmptyEntity();
        if ($this->request->is('post')) {
            $pomparansOld = $this->PomparansOld->patchEntity($pomparansOld, $this->request->getData());
            if ($this->PomparansOld->save($pomparansOld)) {
                $this->Flash->success(__('The pomparans old has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pomparans old could not be saved. Please, try again.'));
        }
        $parentPomparansOld = $this->PomparansOld->ParentPomparansOld->find('list', ['limit' => 200]);
        $users = $this->PomparansOld->Users->find('list', ['limit' => 200]);
        $gedcoms = $this->PomparansOld->Gedcoms->find('list', ['limit' => 200]);
        $this->set(compact('pomparansOld', 'parentPomparansOld', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pomparans Old id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pomparansOld = $this->PomparansOld->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pomparansOld = $this->PomparansOld->patchEntity($pomparansOld, $this->request->getData());
            if ($this->PomparansOld->save($pomparansOld)) {
                $this->Flash->success(__('The pomparans old has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pomparans old could not be saved. Please, try again.'));
        }
        $parentPomparansOld = $this->PomparansOld->ParentPomparansOld->find('list', ['limit' => 200]);
        $users = $this->PomparansOld->Users->find('list', ['limit' => 200]);
        $gedcoms = $this->PomparansOld->Gedcoms->find('list', ['limit' => 200]);
        $this->set(compact('pomparansOld', 'parentPomparansOld', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pomparans Old id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pomparansOld = $this->PomparansOld->get($id);
        if ($this->PomparansOld->delete($pomparansOld)) {
            $this->Flash->success(__('The pomparans old has been deleted.'));
        } else {
            $this->Flash->error(__('The pomparans old could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
