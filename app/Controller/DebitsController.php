<?php
class DebitsController extends AppController{
	var $name = 'Debits';
	var  $helpers = array('Session');
    var  $components = array('Session');
	public $theme = 'Cakestrap';

	function index()
	{
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
			$this->set('dataDebit',$this->Debit->find('all'));
			//$this->set('dataUser',$this->User->query('SELECT *FROM (users INNER JOIN areas ON users.idArea=areas.id)
                // WHERE users.id='.$id));
		}
		else
		{
            $this->redirect(array('controller'=>'users','action'=>'login'));
    	}
	}

	function add()
	{
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
	  		if (!empty($this->request->data))
	        {
	            if ($this->Debit->save($this->request->data))
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
	}

	// function edit($id = null) 
 //    {
 //        if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
 //        {
 //        	$this->Debit->id = $id;
      
 //            if ($this->request->is('post') || $this->request->is('put'))
 //            {
 //                if ($this->Debit->save($this->request->data)) {
 //                    $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));

 //                } 
 //                else 
 //                {
 //                    $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
 //                }
 //            } 
 //            else 
 //            {
 //                $this->request->data = $this->Debit->read(null, $id);
 //            }

 //        }
 //        else
 //        {
 //            $this->redirect(array('controller'=>'users','action'=>'login'));
 //        }
 //    }

}
?>