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
                            $getID = $this->User->find
                            ('first',
                                array(
                                    'conditions'=>array('User.username'=> $user,'User.pword'=>$pword)));

                            $this->Session->write('idSS',$getID['User']['id']);
                            $this->Session->write('userSS',$user);
                            $this->Session->write('passSS',$pword);
                            // $this->redirect(array('controller'=>'users','action'=>'add'));
                            $this->_checkPosition($user,$pword);
                        }
                    }
                    else
                    {
                        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4 style="text-align:center">Đăng nhập thất bại, vui lòng kiểm tra tên đăng nhập hoặc mật khẩu</h4></div>'));
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
            $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4 style="text-align:center">Bạn Đã Đăng Xuất</h4></div>'));
            $this->redirect(array('controller'=>'users','action'=>'login'));
        }

        function index(){
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
            	$this->_positionSS();
                $this->set('dataUser',$this->User->find('all'));
                $this->set('idUser',$this->Session->read('idSS'));

            }
            else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        function add(){
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
            	$this->_positionSS();
                if (!empty($this->request->data))
                {
                    $datauser = $this->User->find('all');
                    $check = false;
                    foreach($datauser as $vdatauser ){
                    	if($vdatauser['User']['username']==$this->request->data['User']['username']){
                    		$check = true;
                    		break;
                    	}
                    	else{
                    		$check= false;
                    	}
                    }
                    if($check != true){
                    	if ($this->User->save($this->request->data))
                    	{

                        	$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                    	}
                    	else
                    	{
                        	$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
                    	}
                    }
                    else{
                    	$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại Do Trùng Tên Đặng Nhập</h4></div>'));
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

        function view($id=null){
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
            	$this->_positionSS();
                if($this->request->is('get'))
                {
                    $this->set('dataUser',$this->User->query('SELECT *FROM (users INNER JOIN areas ON users.idArea=areas.id)
                        WHERE users.id='.$id));
                }
            }
            else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }

        }

        function edit($id = null) 
        {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
            
                $this->_positionSS();
                $this->User->id = $id;

                if ($this->request->is('post') || $this->request->is('put'))
                {
                    if ($this->User->save($this->request->data)) {
                        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                        $this->redirect(array('action' => 'edit'));
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
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
                $this->_positionSS();
                if($id!=null)
                {

                    $this->User->delete($id);
                    $this->Session->setFlash(__('Xóa Thành Công'));
                    $this->redirect(array('controller'=>'users','action'=>'add'));
                }

                else{
                    $this->Session->setFlash(__('Sai cú pháp'));
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
                $dataEmployee['Employee']['isManagerStock'] ==1 &&
                $dataEmployee['Employee']['isManagerHuman'] ==1)
            {

                $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng admin</h4></div>'));
                $this->Session->write('positionSS',1);
                $this->redirect(array('controller'=>'reports','action'=>'index'));
            }
            else
            {
                if($dataEmployee['Employee']['isManagerSale'] ==1 &&        
                $dataEmployee['Employee']['isManagerFinance'] ==0 &&
                $dataEmployee['Employee']['isManagerStock'] ==0 &&
                $dataEmployee['Employee']['isManagerHuman'] ==0)
                {
                    $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý bán hàng</h4></div>'));
                    $this->Session->write('positionSS',2);
                    $this->redirect(array('controller'=>'reports','action'=>'index'));
                }
                else
                {
                    if($dataEmployee['Employee']['isManagerSale'] ==0 &&
                    $dataEmployee['Employee']['isManagerFinance'] ==1 &&
                    $dataEmployee['Employee']['isManagerStock'] ==0 &&
                    $dataEmployee['Employee']['isManagerHuman'] ==0)
                   {
                       $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý tài chính</h4></div>'));
                       $this->Session->write('positionSS',3);
                       $this->redirect(array('controller'=>'reports','action'=>'index'));
                   }

                    else
                    {
                       if($dataEmployee['Employee']['isManagerSale'] ==0 &&
                    $dataEmployee['Employee']['isManagerFinance'] ==0 &&
                    $dataEmployee['Employee']['isManagerStock'] ==1 &&
                    $dataEmployee['Employee']['isManagerHuman'] ==0)
                       {
                            $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý kho</h4></div>'));
                           $this->Session->write('positionSS',4);
                           $this->redirect(array('controller'=>'stocks','action'=>'index'));
                       }
                       else{
                        	if($dataEmployee['Employee']['isManagerSale'] ==0 &&
                    $dataEmployee['Employee']['isManagerFinance'] ==0 &&
                    $dataEmployee['Employee']['isManagerStock'] ==0 &&
                    $dataEmployee['Employee']['isManagerHuman'] ==1)
                            {
                        		$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý nhân sự</h4></div>'));
                           $this->Session->write('positionSS',5);
                           $this->redirect(array('controller'=>'reports','action'=>'index'));
                        	}
                       } 
                   }
               }
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
                                    $this->redirect(array('controller'=>'stocks','action'=>'index'));
                                }
                                else
                                {
                                    if ($this->Session->read('positionSS')== 5)
                                    {
                                        $this->layout = 'human';
                                        // $this->redirect(array('controller'=>'users','action'=>'index'));
                                    }
                                }
                            }
                        }
                        
                }
        }
        //thoai
        function salaries() 
        {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
                $this->_positionSS();
                $this->loadModel('Salary');
                if ($this->request->is('post') || $this->request->is('put') || !empty($this->request->data))
                {
                    $Salary = $this->Salary->find('first',array('conditions' => array('Salary.id' => $this->request->data['User']['idSalary']))); 
                    //tính tổng
                    $tong = $Salary['Salary']['amount'];
                    if($this->request->data['User']['seniority'] > 0){
                        $tong += ($tong*$this->request->data['User']['seniority'])/100; 
                    }
                    if($this->request->data['User']['bonus'] > 0){
                        $tong += $this->request->data['User']['bonus'];
                    }
                    if($tong == $this->request->data['User']['totalSalary']){ // kiểm tra data ko thay đổi từ client

                        if ($this->User->save($this->request->data)) {
                            $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                            $this->redirect(array('action' => 'view/'.$this->request->data['User']['id']));
                        } 
                        else 
                        {
                            $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
                        }

                    }else{
                        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Hãy tính lại trước khi lưu</h4></div>')); 
                    }
                } 
                $dataUser = $this->User->find('list',array('fields' =>array('User.name'),
                    'conditions' => array('User.isEmployee' => 1)
                )); 
                $dataSalary = $this->Salary->find('list',array('fields' =>array('Salary.amount'))); 
                $this->set(compact('dataSalary','dataUser'));
            }
            else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }
        
        function profile(){
        	if ($this->Session->check('userSS') && $this->Session->check('passSS'))
        	{
                $this->_positionSS();
        		$this->set('dataUser',$this->User->query('SELECT * FROM users 
        			INNER JOIN employees
        			
				ON users.id=employees.id

				INNER JOIN areas
				
				ON users.id=areas.id


				WHERE users.id = '.$this->Session->read('idSS')));
         	}
        	else
            	{
                	$this->redirect(array('controller'=>'users','action'=>'login'));
	        }
        }
        //end
    }

?>