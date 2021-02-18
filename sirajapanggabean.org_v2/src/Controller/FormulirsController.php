<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Formulirs Controller
 *
 * @property \App\Model\Table\FormulirsTable $Formulirs
 * @method \App\Model\Entity\Formulir[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormulirsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $formulirs = $this->paginate($this->Formulirs);

        $this->set(compact('formulirs'));
    }

    /**
     * View method
     *
     * @param string|null $id Formulir id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formulir = $this->Formulirs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('formulir'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formulir = $this->Formulirs->newEmptyEntity();
        if ($this->request->is('post')) {
            $formulir = $this->Formulirs->patchEntity($formulir, $this->request->getData());
            if ($this->Formulirs->save($formulir)) {
                $this->Flash->success(__('The formulir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formulir could not be saved. Please, try again.'));
        }
        $this->set(compact('formulir'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Formulir id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formulir = $this->Formulirs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formulir = $this->Formulirs->patchEntity($formulir, $this->request->getData());
            if ($this->Formulirs->save($formulir)) {
                $this->Flash->success(__('The formulir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formulir could not be saved. Please, try again.'));
        }
        $this->set(compact('formulir'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Formulir id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formulir = $this->Formulirs->get($id);
        if ($this->Formulirs->delete($formulir)) {
            $this->Flash->success(__('The formulir has been deleted.'));
        } else {
            $this->Flash->error(__('The formulir could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
