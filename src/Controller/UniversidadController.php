<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Universidad Controller
 *
 * @property \App\Model\Table\UniversidadTable $Universidad
 */
class UniversidadController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $universidad = $this->paginate($this->Universidad);

        $this->set(compact('universidad'));
        $this->set('_serialize', ['universidad']);
    }

    /**
     * View method
     *
     * @param string|null $id Universidad id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $universidad = $this->Universidad->get($id, [
            'contain' => ['Facultad']
        ]);

        $this->set('universidad', $universidad);
        $this->set('_serialize', ['universidad']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $universidad = $this->Universidad->newEntity();
        if ($this->request->is('post')) {
            $universidad = $this->Universidad->patchEntity($universidad, $this->request->data);
            if ($this->Universidad->save($universidad)) {
                $this->Flash->success(__('The universidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The universidad could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('universidad'));
        $this->set('_serialize', ['universidad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Universidad id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $universidad = $this->Universidad->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $universidad = $this->Universidad->patchEntity($universidad, $this->request->data);
            if ($this->Universidad->save($universidad)) {
                $this->Flash->success(__('The universidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The universidad could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('universidad'));
        $this->set('_serialize', ['universidad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Universidad id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $universidad = $this->Universidad->get($id);
        if ($this->Universidad->delete($universidad)) {
            $this->Flash->success(__('The universidad has been deleted.'));
        } else {
            $this->Flash->error(__('The universidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
