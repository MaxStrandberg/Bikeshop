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

        $keyword = $this->request->query('keyword');
        if(!empty($keyword)){

            $result=$this->loadModel('products');
            $data=$result->find('all', array( 'conditions' => array('brand LIKE ' => $keyword.'%')));
            $this->set('products', $data);
        }else{
       
        $result=$this->loadModel('products');
        $data=$result->find();
        $this->set('products', $data);
        }
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

    public function search()
    {
        $this->request->allowMethod('ajax');
   
        $keyword = $this->request->query('keyword');
        $query = $this->Pages->find('all',[
              'conditions' => ['brand LIKE'=>'%'.$keyword.'%']
        ]);
        $this->set('tags', $this->paginate($query));
        $this->set('_serialize', ['tags']);
    }
    
}
