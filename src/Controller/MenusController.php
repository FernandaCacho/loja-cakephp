<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carros Controller
 *
 * @property \App\Model\Table\CarrosTable $Carros
 * @method \App\Model\Entity\Carro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MenusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
       $menus = $this->paginate($this->Menus);

        $this->set(compact('menus'));
    }


}
