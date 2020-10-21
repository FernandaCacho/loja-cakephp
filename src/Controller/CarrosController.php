<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carros Controller
 *
 * @property \App\Model\Table\CarrosTable $Carros
 * @method \App\Model\Entity\Carro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Marcas'],
        ];
        $carros = $this->paginate($this->Carros);

        $this->set(compact('carros'));
    }

    /**
     * View method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carro = $this->Carros->get($id, [
            'contain' => ['Marcas'],
        ]);

        $this->set('carro', $carro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carro = $this->Carros->newEmptyEntity();
        if ($this->request->is('post')) {
            $carro = $this->Carros->patchEntity($carro, $this->request->getData());
            if ($this->Carros->save($carro)) {
                $this->Flash->success(__('O carro foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O carro não pode ser salvo. Por favor, tente novamente.'));
        }
        $marcas = $this->Carros->Marcas->find('list', ['limit' => 200]);
        $this->set(compact('carro', 'marcas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carro = $this->Carros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carro = $this->Carros->patchEntity($carro, $this->request->getData());
            if ($this->Carros->save($carro)) {
                $this->Flash->success(__('O carro foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O carro não pode ser salvo. Por favor, tente novamente.'));
        }
        $marcas = $this->Carros->Marcas->find('list', ['limit' => 200]);
        $this->set(compact('carro', 'marcas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carro = $this->Carros->get($id);
        if ($this->Carros->delete($carro)) {
            $this->Flash->success(__('O carro foi apagado.'));
        } else {
            $this->Flash->error(__('O carro não pode ser apagado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
