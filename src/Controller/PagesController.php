<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pages Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class PagesController extends AppController
{

    public function index(){
        $result=$this->loadModel('products');
        $data=$result->find();
        $this->set('products', $data);

    }

       /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->loadModel('products')->get($id, [
            'contain' => []
        ]);

        $this->set('product', $product);
    }
    
}
