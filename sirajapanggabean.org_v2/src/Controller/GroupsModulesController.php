<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GroupsModules Controller
 *
 * @property \App\Model\Table\GroupsModulesTable $GroupsModules
 * @method \App\Model\Entity\GroupsModule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupsModulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups', 'Modules'],
        ];
        $groupsModules = $this->paginate($this->GroupsModules);

        $this->set(compact('groupsModules'));
    }

    /**
     * View method
     *
     * @param string|null $id Groups Module id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupsModule = $this->GroupsModules->get($id, [
            'contain' => ['Groups', 'Modules'],
        ]);

        $this->set(compact('groupsModule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupsModule = $this->GroupsModules->newEmptyEntity();
        if ($this->request->is('post')) {
            $groupsModule = $this->GroupsModules->patchEntity($groupsModule, $this->request->getData());
            if ($this->GroupsModules->save($groupsModule)) {
                $this->Flash->success(__('The groups module has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The groups module could not be saved. Please, try again.'));
        }
        $groups = $this->GroupsModules->Groups->find('list', ['limit' => 200]);
        $modules = $this->GroupsModules->Modules->find('list', ['limit' => 200]);
        $this->set(compact('groupsModule', 'groups', 'modules'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Groups Module id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupsModule = $this->GroupsModules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupsModule = $this->GroupsModules->patchEntity($groupsModule, $this->request->getData());
            if ($this->GroupsModules->save($groupsModule)) {
                $this->Flash->success(__('The groups module has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The groups module could not be saved. Please, try again.'));
        }
        $groups = $this->GroupsModules->Groups->find('list', ['limit' => 200]);
        $modules = $this->GroupsModules->Modules->find('list', ['limit' => 200]);
        $this->set(compact('groupsModule', 'groups', 'modules'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Groups Module id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupsModule = $this->GroupsModules->get($id);
        if ($this->GroupsModules->delete($groupsModule)) {
            $this->Flash->success(__('The groups module has been deleted.'));
        } else {
            $this->Flash->error(__('The groups module could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
