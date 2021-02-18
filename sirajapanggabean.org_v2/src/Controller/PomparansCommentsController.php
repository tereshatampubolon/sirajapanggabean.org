<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PomparansComments Controller
 *
 * @property \App\Model\Table\PomparansCommentsTable $PomparansComments
 * @method \App\Model\Entity\PomparansComment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PomparansCommentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => [],
        ];
        $pomparansComments = $this->paginate($this->PomparansComments);

        $this->set(compact('pomparansComments'));
    }

    /**
     * View method
     *
     * @param string|null $id Pomparans Comment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pomparansComment = $this->PomparansComments->get($id, [
            'contain' => ['Pomparans'],
        ]);

        $this->set(compact('pomparansComment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pomparansComment = $this->PomparansComments->newEmptyEntity();
        if ($this->request->is('post')) {
            $pomparansComment = $this->PomparansComments->patchEntity($pomparansComment, $this->request->getData());
            if ($this->PomparansComments->save($pomparansComment)) {
                $this->Flash->success(__('The pomparans comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pomparans comment could not be saved. Please, try again.'));
        }
        $pomparans = $this->PomparansComments->Pomparans->find('list', ['limit' => 200]);
        $this->set(compact('pomparansComment', 'pomparans'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pomparans Comment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pomparansComment = $this->PomparansComments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pomparansComment = $this->PomparansComments->patchEntity($pomparansComment, $this->request->getData());
            if ($this->PomparansComments->save($pomparansComment)) {
                $this->Flash->success(__('The pomparans comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pomparans comment could not be saved. Please, try again.'));
        }
        $pomparans = $this->PomparansComments->Pomparans->find('list', ['limit' => 200]);
        $this->set(compact('pomparansComment', 'pomparans'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pomparans Comment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pomparansComment = $this->PomparansComments->get($id);
        if ($this->PomparansComments->delete($pomparansComment)) {
            $this->Flash->success(__('The pomparans comment has been deleted.'));
        } else {
            $this->Flash->error(__('The pomparans comment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
