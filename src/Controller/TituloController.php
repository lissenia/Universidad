<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Titulo Controller
 *
 * @property \App\Model\Table\TituloTable $Titulo
 */
class TituloController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $titulo = $this->paginate($this->Titulo);

        $this->set(compact('titulo'));
        $this->set('_serialize', ['titulo']);
    }

    /**
     * View method
     *
     * @param string|null $id Titulo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $titulo = $this->Titulo->get($id, [
            'contain' => []
        ]);

        $this->set('titulo', $titulo);
        $this->set('_serialize', ['titulo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $titulo = $this->Titulo->newEntity();
        if ($this->request->is('post')) {
            $titulo = $this->Titulo->patchEntity($titulo, $this->request->data);
            if ($this->Titulo->save($titulo)) {
                $this->Flash->success(__('The titulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The titulo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('titulo'));
        $this->set('_serialize', ['titulo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Titulo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $titulo = $this->Titulo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $titulo = $this->Titulo->patchEntity($titulo, $this->request->data);
            if ($this->Titulo->save($titulo)) {
                $this->Flash->success(__('The titulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The titulo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('titulo'));
        $this->set('_serialize', ['titulo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Titulo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $titulo = $this->Titulo->get($id);
        if ($this->Titulo->delete($titulo)) {
            $this->Flash->success(__('The titulo has been deleted.'));
        } else {
            $this->Flash->error(__('The titulo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
