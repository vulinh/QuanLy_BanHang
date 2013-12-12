<?php
    App::uses('AppController', 'Controller');
    /**
    * Mails Controller
    *
    * @property Mail $Mail
    * @property PaginatorComponent $Paginator
    */
    class SlidesController extends AppController {  

        /**
        * Components
        *
        * @var array
        */
        public $components = array('Paginator','RequestHandler');
        public $theme = 'Cakestrap';

        function index(){
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
                $dataSlide = $this->Slide->find('all');
                $this->set('dataSlide',$dataSlide);
            }
            else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }
        public function add() 
        {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
                if ($this->request->is('post'))
                {
                    $this->Slide->create();
                    if ($this->Slide->save($this->request->data)) 
                    {
                        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                    }
                    else
                    {
                        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));

                    }
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
            
 
                $this->Slide->id = $id;

                if ($this->request->is('post') || $this->request->is('put'))
                {
                    if ($this->Slide->save($this->request->data)) {
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
                    $this->request->data = $this->Slide->read(null, $id);
                }
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
          
                if($id!=null)
                {
                
                    $this->Slide->delete($id);
                    $this->Session->setFlash(__('Xóa Thành Công'));
                    $this->redirect(array('controller'=>'slides','action'=>'index'));
                }

                else{
                    $this->Session->setFlash(__('Lỗi'));
                    //$this->redirect(array('controller'=>'user','action'=>'admin'));
                }
            }
            else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }
    }