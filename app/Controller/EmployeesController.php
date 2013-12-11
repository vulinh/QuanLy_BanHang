<?php
class EmployeesController extends AppController{
	var $name = 'Employees';
	var  $helpers = array('Session');
    var  $components = array('Session');
	public $theme = 'Cakestrap';

	function _listEmployeeNotGivePosition()
	{
		$this->loadModel('User');
		$dataUser1 = $this->User->find('all',
			array('conditions'=>
				array('AND'=>
					array(
						array('User.isEmployee'=>1),
						array('User.isGavePosition'=>0)))));
		return $dataUser1; 
	}

	function _listEmployeeGavePosition(){
		$this->loadModel('User');
		$dataUser2 = $this->User->query('SELECT * FROM users INNER JOIN employees ON users.id = employees.id
INNER JOIN departments ON employees.idDeparment = departments.id
WHERE users.isEmployee =1 AND users.isGavePosition =1  ');
		return $dataUser2;
	}

	function index(){
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
    		$dataUser1 = $this->_listEmployeeNotGivePosition();
    		$dataUser2 = $this->_listEmployeeGavePosition();

    		$this->loadModel('Department');
                $data = $this->Department->find('list',array('fields' =>array('Department.nameDepartment'))); 
                $this->set('dataDepartment',$data);

    		$this->set('dataUserNotGivePosition',$dataUser1);

    		
            $this->set('dataUserGavePosition',$dataUser2);
        }
        else{
            $this->redirect(array('controller'=>'users','action'=>'login'));
    }

	}

	function givePosition(){
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
  		if (!empty($this->request->data))
        {
            if ($this->Employee->save($this->request->data))
            {
            	$this->loadModel('User');
            	$this->User->updateAll(array('User.isGavePosition' =>1), array('User.id' => $this->request->data['Employee']['id']));
            	$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
            	$this->redirect(array('controller'=>'employees','action'=>'list_employee'));
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

	function update_position($idUser = null){
       
        $this->loadModel('Department');
            $data = $this->Department->find('list',array('fields' =>array('Department.nameDepartment'))); 
            $this->set('dataDepartment',$data);
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
       // $this->Employee->id = $this->request->data['Employee']['idUser'] ;
            if ($this->request->is('post'))
            {
                $this->Employee->updateAll
                (array
                    ('Employee.isManagerSale' =>$this->request->data['Employee']['isManagerSale'],'Employee.isManagerFinance' =>$this->request->data['Employee']['isManagerFinance'],'Employee.isManagerStock' =>$this->request->data['Employee']['isManagerStock'],'Employee.isManagerHuman' =>$this->request->data['Employee']['isManagerHuman'],'Employee.idDeparment' =>$this->request->data['Employee']['idDeparment']), array('Employee.id' => $this->request->data['Employee']['id']));
                // if ($this->Employee->save($this->request->data)) {
                    $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                //     $this->redirect(array('action' => 'add'));
                // } 
                // else 
                // {
                //     $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
                // }
            } 
            else 
            {
                $this->request->data = $this->Employee->read(null, $idUser);
            }
       
        }
        else
        {
            $this->redirect(array('controller'=>'users','action'=>'login'));
        }
	}
    
     //thoai
        function salaries() 
        {
           // echo '<pre>';
//            print_r($this->request->data);
//            echo '</pre>';
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
                $this->loadModel('Salary');
                $this->loadModel('User');
                if ($this->request->is('post') || $this->request->is('put') || !empty($this->request->data))
                {
                    $Salary = $this->Salary->find('first',array('conditions' => array('Salary.id' => $this->request->data['Employee']['idSalary']))); 
                    //tính tổng
                    $tong = $Salary['Salary']['amount'];
                    if($this->request->data['Employee']['seniority'] > 0){
                        $tong += ($tong*$this->request->data['Employee']['seniority'])/100; 
                    }
                    if($this->request->data['Employee']['bonus'] > 0){
                        $tong += $this->request->data['Employee']['bonus'];
                    }
                    if($tong == $this->request->data['Employee']['totalSalary']){ // kiểm tra data ko thay đổi từ client

                        if ($this->Employee->save($this->request->data)) {
                            $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                           // $this->redirect(array('controller'=>'users','action' => 'view/'.$this->request->data['Employee']['id']));
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