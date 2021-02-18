<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Gedcoms Controller
 *
 * @property \App\Model\Table\GedcomsTable $Gedcoms
 * @method \App\Model\Entity\Gedcom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GedcomsController extends AppController
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
        $gedcoms = $this->paginate($this->Gedcoms);

        $this->set(compact('gedcoms'));
    }

    /**
     * View method
     *
     * @param string|null $id Gedcom id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gedcom = $this->Gedcoms->get($id, [
            'contain' => ['Pomparans', 'PomparansOld', 'Tmp2pomparans', 'Tmppomparans'],
        ]);

        $this->set(compact('gedcom'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gedcom = $this->Gedcoms->newEmptyEntity();
        if ($this->request->is('post')) {
            $gedcom = $this->Gedcoms->patchEntity($gedcom, $this->request->getData());
            if ($this->Gedcoms->save($gedcom)) {
                $this->Flash->success(__('The gedcom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gedcom could not be saved. Please, try again.'));
        }
        $is = $this->Gedcoms->Is->find('list', ['limit' => 200]);
        $this->set(compact('gedcom'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gedcom id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gedcom = $this->Gedcoms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gedcom = $this->Gedcoms->patchEntity($gedcom, $this->request->getData());
            if ($this->Gedcoms->save($gedcom)) {
                $this->Flash->success(__('The gedcom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gedcom could not be saved. Please, try again.'));
        }
       
        $this->set(compact('gedcom'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gedcom id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gedcom = $this->Gedcoms->get($id);
        if ($this->Gedcoms->delete($gedcom)) {
            $this->Flash->success(__('The gedcom has been deleted.'));
        } else {
            $this->Flash->error(__('The gedcom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
