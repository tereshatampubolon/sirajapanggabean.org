<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{


     
    



     public function detail($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set(compact('post'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $post = $this->Posts->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set(compact('post'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $post = $this->Posts->newEmptyEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $categories = $this->Posts->Categories->find('list', ['limit' => 200]);
        $this->set(compact('post', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $post = $this->Posts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $categories = $this->Posts->Categories->find('list', ['limit' => 200]);
        $this->set(compact('post', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}