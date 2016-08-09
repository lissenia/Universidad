<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Facultad Controller
 *
 * @property \App\Model\Table\FacultadTable $Facultad
 */
class FacultadController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Universidad']
        ];
        $facultad = $this->paginate($this->Facultad);

        $this->set(compact('facultad'));
        $this->set('_serialize', ['facultad']);
    }

    /**
     * View method
     *
     * @param string|null $id Facultad id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $facultad = $this->Facultad->get($id, [
            'contain' => ['Universidad']
        ]);

        $this->set('facultad', $facultad);
        $this->set('_serialize', ['facultad']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $facultad = $this->Facultad->newEntity();
        if ($this->request->is('post')) {
            $facultad = $this->Facultad->patchEntity($facultad, $this->request->data);
            if ($this->Facultad->save($facultad)) {
                $this->Flash->success(__('The facultad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The facultad could not be saved. Please, try again.'));
            }
        }
        $universidad = $this->Facultad->Universidad->find('list', ['limit' => 200]);
        $this->set(compact('facultad', 'universidad'));
        $this->set('_serialize', ['facultad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Facultad id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $facultad = $this->Facultad->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $facultad = $this->Facultad->patchEntity($facultad, $this->request->data);
            if ($this->Facultad->save($facultad)) {
                $this->Flash->success(__('The facultad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The facultad could not be saved. Please, try again.'));
            }
        }
        $universidad = $this->Facultad->Universidad->find('list', ['limit' => 200]);
        $this->set(compact('facultad', 'universidad'));
        $this->set('_serialize', ['facultad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Facultad id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $facultad = $this->Facultad->get($id);
        if ($this->Facultad->delete($facultad)) {
            $this->Flash->success(__('The facultad has been deleted.'));
        } else {
            $this->Flash->error(__('The facultad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
