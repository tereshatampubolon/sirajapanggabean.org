<?php
declare(strict_types=1);

namespace App\Controller;
use \SplFileObject;
use Cake\Datasource\ConnectionManager;

/**
 * Pomparans Controller
 *
 * @property \App\Model\Table\PomparansTable $Pomparans
 * @method \App\Model\Entity\Pomparan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PomparansController extends AppController
{

    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $connection = ConnectionManager::get('default');
     
        $statement = $connection->execute('SELECT count(*) as count from pomparans');
     
        $pomparansCount = $statement->fetch('assoc');
     
        $this->paginate = [
            'contain' => ['ParentPomparans', 'Users'],
        ];

        $key = $this->request->getQuery('key');
        if($key){
            $query1 = $this->Pomparans->findByName($key,$key);
        }else{
            $query1 = $this->Pomparans;
        }

        $pomparans = $this->paginate($query1,[$this->Pomparans]);

        $this->set(compact('pomparans'/*,'pomparansCount'*/));
    }

    /**
     * View method
     *
     * @param string|null $id Pomparan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pomparan = $this->Pomparans->get($id, [
            'contain' => ['ParentPomparans', 'Users', 'Pages', 'ChildPomparans', 'PomparansComments'],
        ]);

        $this->set(compact('pomparan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pomparan = $this->Pomparans->newEmptyEntity();
        if ($this->request->is('post')) {
            $pomparan = $this->Pomparans->patchEntity($pomparan, $this->request->getData());
            if ($this->Pomparans->save($pomparan)) {
                $this->Flash->success(__('The pomparan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pomparan could not be saved. Please, try again.'));
        }
        $parentPomparans = $this->Pomparans->ParentPomparans->find('list', ['limit' => 200]);
        $users = $this->Pomparans->Users->find('list', ['limit' => 200]);
        $gedcoms = $this->Pomparans->Gedcoms->find('list', ['limit' => 200]);
        $this->set(compact('pomparan', 'parentPomparans', 'users', 'gedcoms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pomparan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pomparan = $this->Pomparans->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pomparan = $this->Pomparans->patchEntity($pomparan, $this->request->getData());
            if ($this->Pomparans->save($pomparan)) {
                $this->Flash->success(__('The pomparan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pomparan could not be saved. Please, try again.'));
        }
        $parentPomparans = $this->Pomparans->ParentPomparans->find('list', ['limit' => 200]);
        $users = $this->Pomparans->Users->find('list', ['limit' => 200]);
        $gedcoms = $this->Pomparans->Gedcoms->find('list', ['limit' => 200]);
        $this->set(compact('pomparan', 'parentPomparans', 'users', 'gedcoms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pomparan id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pomparan = $this->Pomparans->get($id);
        if ($this->Pomparans->delete($pomparan)) {
            $this->Flash->success(__('The pomparan has been deleted.'));
        } else {
            $this->Flash->error(__('The pomparan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function pomparanStatus($id=null,$approved)
    {
         
        $this->request->allowMethod(['post']);
        $pomparan = $this->Pomparans->get($id);
        
        if($approved)
            $pomparan['approved'] = 0;
        
        
        if($this->Pomparans->save($pomparan))
        {
            $this->Flash->success(__('The Pomparans status has changed.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     public function pomparanAktif($id=null)
    {
         
         $this->request->allowMethod(['post']);
        $pomparan = $this->Pomparans->get($id);
            $pomparan['approved'] = 1;
        
        
        if($this->Pomparans->save($pomparan))
        { 
            $this->Flash->success(__('The Pomparans status has changed.'));
             return $this->redirect(['action' => 'index']);
           
        }
       
    }




}
