<?php
/**
* 
*/
class StocksController extends AppController
{
	var $name ='Stocks';
 	public $theme = 'Cakestrap';

 	function index(){
 	  if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
        $this->_positionSS();
 		$this->set('dataStock',$this->Stock->find('all'));
    }
    else{
          $this->redirect(array('controller'=>'users','action'=>'login'));
        }

 	}

 	function add()
  	{
	    if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	    	$this->_positionSS();
	  		if (!empty($this->request->data))
	             {
	                 if ($this->Stock->save($this->request->data))
	                 {

	                 	$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
	                 }
	                 else
	                 {
	                 		$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
	                 }
	             }
	    }
	    else{
	      $this->redirect(array('controller'=>'users','action'=>'login'));
	    }

$this->loadModel('User');
		$dataUser = $this->User->find('list',array('fields' =>array('User.name'))); 
		$this->set('dataUser',$dataUser);

$this->loadModel('Typestock');
		$dataTypestock = $this->Typestock->find('list',array('fields' =>array('Typestock.nameTypeStock'))); 
		$this->set('dataTypestock',$dataTypestock);

		}
	function edit($id = null) 
	{
	        // $this->layout = 'admin_layout';
	        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	        	$this->_positionSS();
	        $this->Stock->id = $id;
	      
	        if ($this->request->is('post') || $this->request->is('put')) {
	            if ($this->Stock->save($this->request->data)) {
	                $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
	            }
	        } else {
	            $this->request->data = $this->Stock->read(null, $id);
	        }
	      }
	      else{
	        $this->redirect(array('controller'=>'users','action'=>'login'));
	      }

	      $this->loadModel('User');
		$dataUser = $this->User->find('list',array('fields' =>array('User.name'))); 
		$this->set('dataUser',$dataUser);

$this->loadModel('Typestock');
		$dataTypestock = $this->Typestock->find('list',array('fields' =>array('Typestock.nameTypeStock'))); 
		$this->set('dataTypestock',$dataTypestock);
	    }
	    function delete($id=null)	
	    {
	      if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	      
	      	$this->_positionSS();
	      
	      $this->Stock->id = $id;
	      if($id!=null)
	      {

	        $this->Stock->delete($id);
	        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xóa Thành Công</h4></div>'));
	        $this->redirect(array('controller'=>'typestocks','action'=>'index'));
	      }

	      else{
	        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xóa Thất Bại</h4></div>'));
	        $this->redirect(array('controller'=>'stock','action'=>'index'));
	        }
	      }else{
	        $this->redirect(array('controller'=>'users','action'=>'login'));
	      }
	    }

        public function _positionSS(){
            if($this->Session->read('positionSS')== 1){
                   $this->layout = 'default';
                   // $this->redirect(array('controller'=>'users','action'=>'index'));
                }
                else
                {

                        if ($this->Session->read('positionSS')== 2) 
                        {
                            $this->layout = 'sale';
                            $this->redirect(array('controller'=>'detailstocks','action'=>'export'));
                        }
                        else
                        {
                            if ($this->Session->read('positionSS')== 3)
                            {
                                $this->layout = 'finance';
                                $this->redirect(array('controller'=>'bills','action'=>'index'));
                            }
                            else
                            {
                                if ($this->Session->read('positionSS')== 4)
                                {
                                    $this->layout = 'stock';
                                    // $this->redirect(array('controller'=>'stocks','action'=>'index'));
                                }
                                else
                                {
                                    if ($this->Session->read('positionSS')== 5)
                                    {
                                        $this->layout = 'human';
                                        $this->redirect(array('controller'=>'users','action'=>'index'));
                                    }
                                }
                            }
                        }
                        
                }
        }
}
?>