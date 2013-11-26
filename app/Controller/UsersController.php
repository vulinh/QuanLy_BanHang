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
                        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4 style="text-align:center">(T_T) Đăng nhập thất bại, vui lòng kiểm tra tên đăng nhập hoặc mật khẩu</h4></div>'));
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

                $this->set('dataUser',$this->User->find('all'));
                $this->set('idUser',$this->Session->read('idSS'));

            }
            else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
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

        function view($id=null){
            if($this->request->is('get'))
            {
                $this->set('dataUser',$this->User->query('SELECT *FROM (users INNER JOIN areas ON users.idArea=areas.id)
                    WHERE users.id='.$id));
            }

        }

        function edit($id = null) 
        {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
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
                $this->redirect(array('controller'=>'users','action'=>'index'));
            }
            else
            {
                if($dataEmployee['Employee']['isManagerSale'] ==1 )
                {
                    $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý bán hàng</h4></div>'));
                    $this->redirect(array('controller'=>'users','action'=>'index'));
                }
                else
                {
                    if($dataEmployee['Employee']['isManagerFinance'] ==1 )
                    {
                        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý tài chính</h4></div>'));
                        $this->redirect(array('controller'=>'users','action'=>'index'));
                    }

                    else
                    {
                        if($dataEmployee['Employee']['isManagerStock'] ==1 )
                        {
                            $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Chào mừng nhân viên quản lý kho</h4></div>'));
                            $this->redirect(array('controller'=>'users','action'=>'index'));
                        } 
                    }
                }
            }
        }

        //thoai
        function salaries() 
        {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
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
        //end
    }

?>