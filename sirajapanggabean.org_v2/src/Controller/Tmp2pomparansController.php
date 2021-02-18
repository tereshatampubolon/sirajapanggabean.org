<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tmp2pomparans Controller
 *
 * @property \App\Model\Table\Tmp2pomparansTable $Tmp2pomparans
 * @method \App\Model\Entity\Tmp2pomparan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Tmp2pomparansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentTmp2pomparans'],
        ];
        $tmp2pomparans = $this->paginate($this->Tmp2pomparans);

        $this->set(compact('tmp2pomparans'));
    }

    /**
     * View method
     *
     * @param string|null $id Tmp2pomparan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tmp2pomparan = $this->Tmp2pomparans->get($id, [
            'contain' => ['ParentTmp2pomparans', 'ChildTmp2pomparans'],
        ]);

        $this->set(compact('tmp2pomparan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tmp2pomparan = $this->Tmp2pomparans->newEmptyEntity();
        if ($this->request->is('post')) {
            $tmp2pomparan = $this->Tmp2pomparans->patchEntity($tmp2pomparan, $this->request->getData());
            if ($this->Tmp2pomparans->save($tmp2pomparan)) {
                $this->Flash->success(__('The tmp2pomparan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp2pomparan could not be saved. Please, try again.'));
        }
        $parentTmp2pomparans = $this->Tmp2pomparans->ParentTmp2pomparans->find('list', ['limit' => 200]);
        $gedcoms = $this->Tmp2pomparans->Gedcoms->find('list', ['limit' => 200]);
        $this->set(compact('tmp2pomparan', 'parentTmp2pomparans'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tmp2pomparan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tmp2pomparan = $this->Tmp2pomparans->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tmp2pomparan = $this->Tmp2pomparans->patchEntity($tmp2pomparan, $this->request->getData());
            if ($this->Tmp2pomparans->save($tmp2pomparan)) {
                $this->Flash->success(__('The tmp2pomparan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp2pomparan could not be saved. Please, try again.'));
        }
        $parentTmp2pomparans = $this->Tmp2pomparans->ParentTmp2pomparans->find('list', ['limit' => 200]);
        $gedcoms = $this->Tmp2pomparans->Gedcoms->find('list', ['limit' => 200]);
        $this->set(compact('tmp2pomparan', 'parentTmp2pomparans', 'gedcoms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tmp2pomparan id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tmp2pomparan = $this->Tmp2pomparans->get($id);
        if ($this->Tmp2pomparans->delete($tmp2pomparan)) {
            $this->Flash->success(__('The tmp2pomparan has been deleted.'));
        } else {
            $this->Flash->error(__('The tmp2pomparan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
