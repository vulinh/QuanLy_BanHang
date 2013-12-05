<?php
    App::uses('AppController', 'Controller');
    /**
    * Bills Controller
    *
    * @property Bill $Bill
    * @property PaginatorComponent $Paginator
    */
    class ClientsController extends AppController {
        public $components = array('Paginator');
        
        public function index($id = null){
            $this->loadModel('Categoryproduct');
            $options = array('conditions' => array('Categoryproduct.enable' => 1));
            $categoryproducts = $this->Categoryproduct->find('all', $options);
            
            $this->loadModel('Product');
            if($id != null){
                $this->paginate = array('limit'=>10,'recursive'=>0,
                    'fields' => 'Product.idSite,Product.nameProduct',
                    'conditions' => array('Product.idCategoryProduct' => $id)
                );
            }else{
                $this->paginate = array('limit'=>10,'recursive'=>0,
                    'fields' => 'Product.idSite,Product.nameProduct'
                );
            }
            $Products = $this->paginate('Product');
            
            $this->set(compact('categoryproducts','Products'));
          //  echo '<pre>';
//            print_r($categoryproducts);
//            echo '</pre>';
//            echo '<pre>';
//            print_r($Products);
//            echo '</pre>';
//            exit;
            
        }
        
        public function viewproduct($id = null){
            $this->loadModel('Categoryproduct');
            $options = array('conditions' => array('Categoryproduct.enable' => 1));
            $categoryproducts = $this->Categoryproduct->find('all', $options);
            
            $this->loadModel('Product');
            if($id != null){
                $options = array('conditions' => array('Product.idSite' => $id));
                $product = $this->Product->find('first', $options);
            }else{
                $this->redirect(array('controller'=>'clients','action'=>'index'));
            }
            
            $this->set(compact('categoryproducts','product'));
//            echo '<pre>';
//            print_r($product);
//            echo '</pre>';
//            exit;
            
        }
        
    }

