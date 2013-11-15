<?php

class UsersController extends AppController{
	var $name = 'Users';
    var  $helpers = array('Session');
    var  $components = array('Session');
	public $theme = 'Cakestrap';

    function login(){
        $this->layout = 'login';
        if (!$this->Session->check('userSS') && !$this->Session->check('passSS')) 
        {
            if (!empty($this->request->data)){
                $user = $this->request->data['User']['username'];
                $pword = $this->request->data['User']['pword'];
                if ($this->_checkUserAndPass($user,$pword)) 
                {
                    if($this->_checkEmployee()){
                        $this->Session->write('userSS',$user);
                        $this->Session->write('passSS',$pword);
                        // $this->redirect(array('controller'=>'users','action'=>'add'));
                        $this->_checkPosition($user,$pword);
                    }
                }
                else
                {
                    $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Đăng nhập thất bại, vui lòng kiểm tra tên đăng nhập hoặc mật khẩu</h4></div>'));
                    $this->redirect(array('controller'=>'users','action'=>'login'));

                }  
            }
        }
        
        else
        {
            $this->redirect(array('controller'=>'users','action'=>'add'));
        }
    }

    function logout(){
        $this->Session->destroy();
        $this->redirect(array('controller'=>'users','action'=>'login'));
    }

	function add(){
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
  		if (!empty($this->request->data))
        {
            if ($this->User->save($this->request->data))
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
    $this->loadModel('Area');
		$data = $this->Area->find('list',array('fields' =>array('Area.nameArea'))); 
		$this->set('dataArea',$data);
	}

    function edit($id = null) 
    {
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
        $this->User->id = $id;
      
            if ($this->request->is('post') || $this->request->is('put'))
            {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                    $this->redirect(array('action' => 'add'));
                } 
                else 
                {
                    $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
                }
            } 
            else 
            {
                $this->request->data = $this->User->read(null, $id);
            }
            // $datd = $this->Product->find('list');
            // $this->set('data', $datd);
            $this->loadModel('Area');
            $data = $this->Area->find('list',array('fields' =>array('Area.nameArea'))); 
            $this->set('dataArea',$data);
        }
        else
        {
            $this->redirect(array('controller'=>'users','action'=>'login'));
        }
    }

    function delete($id=null)   
    {
      if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
      //$this->Product->id = $id;
        if($id!=null)
        {

            $this->User->delete($id);
            $this->Session->setFlash(__('Xóa Thành Công'));
            $this->redirect(array('controller'=>'users','action'=>'add'));
        }

        else{
            $this->Session->setFlash(__('Có id đâu mà xóa pa'));
            //$this->redirect(array('controller'=>'user','action'=>'admin'));
        }
      }
      else{
        $this->redirect(array('controller'=>'users','action'=>'login'));
      }
    }

    function _checkUserAndPass($user,$pword)
    {
        $flag = true;
        $count = $this->User->find('count', 
        array('conditions' => 
        array('User.username' => $user,'User.pword'=>$pword)));
        if($count !=1 )
        {
            $flag = false;
        }
        return $flag;
    }
    function _checkEmployee()
    {
        $data = $this->User->find('first');
        if($data['User']['isCustomer'] ==1 || $data['User']['isPartner'] ==1  )
        {
            $this->redirect('http://www.bing.com/');
        }
        return true;
    }
    function _checkPosition($user,$pword)
    {
        $dataUser = $this->User->find('first', 
        array('conditions' => 
        array('User.username' => $user,'User.pword'=>$pword)));
        $idUser = $dataUser['User']['id'];

        $this->loadModel('Employee');
        $dataEmployee = $this->Employee->find('first',
        array('conditions' => 
        array('Employee.id' => $idUser)));
        if($dataEmployee['Employee']['isManagerSale'] ==1 &&        
        $dataEmployee['Employee']['isManagerFinance'] ==1 &&
        $dataEmployee['Employee']['isManagerStock'] ==1)
        {
            $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng admin</h4></div>'));
            $this->redirect(array('controller'=>'users','action'=>'add'));
        }
        else
        {
            if($dataEmployee['Employee']['isManagerSale'] ==1 )
            {
                $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý bán hàng</h4></div>'));
                $this->redirect(array('controller'=>'users','action'=>'add'));
            }
            else
            {
                if($dataEmployee['Employee']['isManagerFinance'] ==1 )
                {
                    $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý tài chính</h4></div>'));
                    $this->redirect(array('controller'=>'users','action'=>'add'));
                }
            
                else
                {
                    if($dataEmployee['Employee']['isManagerStock'] ==1 )
                    {
                        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý kho</h4></div>'));
                        $this->redirect(array('controller'=>'users','action'=>'add'));
                    } 
                }
            }
        }
    }
}
    
?>