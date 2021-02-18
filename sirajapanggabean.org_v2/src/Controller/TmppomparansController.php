<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tmppomparans Controller
 *
 * @property \App\Model\Table\TmppomparansTable $Tmppomparans
 * @method \App\Model\Entity\Tmppomparan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TmppomparansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentTmppomparans'],
        ];
        $tmppomparans = $this->paginate($this->Tmppomparans);

        $this->set(compact('tmppomparans'));
    }

    /**
     * View method
     *
     * @param string|null $id Tmppomparan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tmppomparan = $this->Tmppomparans->get($id, [
            'contain' => ['ParentTmppomparans', 'Gedcoms', 'GedcomParents', 'GedcomSpouses', 'ChildTmppomparans'],
        ]);

        $this->set(compact('tmppomparan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tmppomparan = $this->Tmppomparans->newEmptyEntity();
        if ($this->request->is('post')) {
            $tmppomparan = $this->Tmppomparans->patchEntity($tmppomparan, $this->request->getData());
            if ($this->Tmppomparans->save($tmppomparan)) {
                $this->Flash->success(__('The tmppomparan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmppomparan could not be saved. Please, try again.'));
        }
        $parentTmppomparans = $this->Tmppomparans->ParentTmppomparans->find('list', ['limit' => 200]);
        $gedcoms = $this->Tmppomparans->Gedcoms->find('list', ['limit' => 200]);
        $gedcomParents = $this->Tmppomparans->GedcomParents->find('list', ['limit' => 200]);
        $gedcomSpouses = $this->Tmppomparans->GedcomSpouses->find('list', ['limit' => 200]);
        $this->set(compact('tmppomparan', 'parentTmppomparans', 'gedcoms', 'gedcomParents', 'gedcomSpouses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tmppomparan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tmppomparan = $this->Tmppomparans->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tmppomparan = $this->Tmppomparans->patchEntity($tmppomparan, $this->request->getData());
            if ($this->Tmppomparans->save($tmppomparan)) {
                $this->Flash->success(__('The tmppomparan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmppomparan could not be saved. Please, try again.'));
        }
        $parentTmppomparans = $this->Tmppomparans->ParentTmppomparans->find('list', ['limit' => 200]);
        $gedcoms = $this->Tmppomparans->Gedcoms->find('list', ['limit' => 200]);
        $gedcomParents = $this->Tmppomparans->GedcomParents->find('list', ['limit' => 200]);
        $gedcomSpouses = $this->Tmppomparans->GedcomSpouses->find('list', ['limit' => 200]);
        $this->set(compact('tmppomparan', 'parentTmppomparans', 'gedcoms', 'gedcomParents', 'gedcomSpouses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tmppomparan id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tmppomparan = $this->Tmppomparans->get($id);
        if ($this->Tmppomparans->delete($tmppomparan)) {
            $this->Flash->success(__('The tmppomparan has been deleted.'));
        } else {
            $this->Flash->error(__('The tmppomparan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
