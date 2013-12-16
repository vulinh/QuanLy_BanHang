<?php
    App::uses('AppController', 'Controller');
    /**
    * News Controller
    *
    * @property News $News
    * @property PaginatorComponent $Paginator
    */
    class NewsController extends AppController {

        /**
        * Components
        *
        * @var array
        */
        public $components = array('Paginator');
        public $theme = 'Cakestrap';

        /**
        * index method
        *
        * @return void
        */
        public function index() {
            $this->News->recursive = 0;
            $this->set('news', $this->paginate());
        }

        public function project() {
            $idTypeNews = 1;
            $whitelist = array('idTypeNews' => $idTypeNews);
            $this->paginate = array(
                'conditions' => array('News.idTypeNews' => $idTypeNews),
                'fields'=>array('News.*, users.id, users.name'),
                'recursive'=>0,
                'joins' => array(
                    array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        //     'foreignKey' => 'idBill',
                        'conditions' => array('News.idUser=users.id')),
                )
            );
            $this->set('news', $this->paginate());
        }
        
        public function projectindex() {
            $this->layout = "client_index";
            $idTypeNews = 1;
            $this->paginate = array(
                'conditions' => array('News.idTypeNews' => $idTypeNews, 'News.status' => 1),
                'fields'=>array('News.id, News.title, News.time, News.summary, News.image, users.name'),
                'recursive'=>0,
                'joins' => array(
                   array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('News.idUser=users.id')),
                ),'limit'=>10
            );
            $this->set('news', $this->paginate());
        }

        public function review() {
            $idTypeNews = 2;
            $this->paginate = array(
                'conditions' => array('News.idTypeNews' => $idTypeNews),
                'fields'=>array('News.*, users.id, users.name'),
                'recursive'=>0,
                'joins' => array(
                    array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        //     'foreignKey' => 'idBill',
                        'conditions' => array('News.idUser=users.id')),
                )
            );
            $this->set('news', $this->paginate());
        }
        
        public function reviewindex() {
            $this->layout = "client_index";
            $idTypeNews = 2;
            $this->paginate = array(
                'conditions' => array('News.idTypeNews' => $idTypeNews, 'News.status' => 1),
                'fields'=>array('News.id, News.title, News.time, News.summary, News.image, users.name'),
                'recursive'=>0,
                'joins' => array(
                   array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('News.idUser=users.id')),
                ),'limit'=>10
            );
            $this->set('news', $this->paginate());
        }

        public function guide() {
            $idTypeNews = 3;
            $this->paginate = array(
                'conditions' => array('News.idTypeNews' => $idTypeNews),
                'fields'=>array('News.*, users.id, users.name'),
                'recursive'=>0,
                'joins' => array(
                    array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        //     'foreignKey' => 'idBill',
                        'conditions' => array('News.idUser=users.id')),
                )
            );
            $this->set('news', $this->paginate());
        }
        
        public function guideindex() {
            $this->layout = "client_index";
            $idTypeNews = 3;
            $this->paginate = array(
                'conditions' => array('News.idTypeNews' => $idTypeNews, 'News.status' => 1),
                'fields'=>array('News.id, News.title, News.time, News.summary, News.image, users.name'),
                'recursive'=>0,
                'joins' => array(
                   array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('News.idUser=users.id')),
                ),'limit'=>10
            );
            $this->set('news', $this->paginate());
        }

        /**
        * view method
        *
        * @throws NotFoundException
        * @param string $id
        * @return void
        */
        public function view($id = null) {
            $this->layout = "client_index";
            if (!$this->News->exists($id)) {
                throw new NotFoundException(__('Invalid news'));
            }
            $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
            $this->set('news', $this->News->find('first', $options));
        }

        /**
        * add method
        *
        * @return void
        */
        public function add($idType = null) {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')){ 
                if ($this->request->is('post')) {
                    $this->request->data['News']['idUser'] = $this->Session->read('idSS');
                    $this->request->data['News']['view'] = 1;
                    $this->request->data['News']['time'] = $this->News->getDataSource()->expression('NOW()');
                    $this->News->create();
                    if ($this->News->save($this->request->data)) {
                        $this->Session->setFlash(__('Đã thêm '. $this->request->data['News']['title']), 'flash/success');

                        switch($this->request->data['News']['idTypeNews']){
                            case 1:
                                $this->redirect(array('action' => 'project'));
                                break;
                            case 2:
                                $this->redirect(array('action' => 'review'));
                                break;
                            case 3:
                                $this->redirect(array('action' => 'guide'));
                                break;  
                        };

                    } else {
                        $this->Session->setFlash(__('Không thể thêm tin tức, vui lòng thử lại'), 'flash/error');
                    }
                }

                $this->loadModel('Typenews');
                $type = $this->Typenews->find('first', array('conditions' => array('Typenews.id' => $idType)));
                $this->set('typenews',$type);
            }else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        /**
        * edit method
        *
        * @throws NotFoundException
        * @param string $id
        * @return void
        */
        public function edit($id = null, $idType = null) {
            $this->News->id = $id;
            if (!$this->News->exists($id)) {
                throw new NotFoundException(__('Invalid news'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->News->save($this->request->data)) {
                    $this->Session->setFlash(__('Đã cập nhật dữ liệu'), 'flash/success');
                    switch($this->request->data['News']['idTypeNews']){
                        case 1:
                            $this->redirect(array('action' => 'project'));
                            break;
                        case 2:
                            $this->redirect(array('action' => 'review'));
                            break;
                        case 3:
                            $this->redirect(array('action' => 'guide'));
                            break;  
                    };
                } else {
                    $this->Session->setFlash(__('Không thể cập nhật dữ liệu, vui lòng thử lại'), 'flash/error');
                }
            } else {
                $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
                $this->request->data = $this->News->find('first', $options);

                $this->loadModel('Typenews');
                $type = $this->Typenews->find('first', array('conditions' => array('Typenews.id' => $idType)));
                $this->set('typenews',$type);
            }
        }

        /**
        * delete method
        *
        * @throws NotFoundException
        * @throws MethodNotAllowedException
        * @param string $id
        * @return void
        */
        public function delete($id = null, $idType = null) {
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
            $this->News->id = $id;
            if (!$this->News->exists()) {
                throw new NotFoundException(__('Invalid news'));
            }

            $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
            $data = $this->News->find('first', $options);

            if ($this->News->delete()) {
                $this->Session->setFlash(__('Đã xóa tin tức '.$data['News']['title']), 'flash/success');
                switch($idType){
                    case 1:
                        $this->redirect(array('action' => 'project'));
                        break;
                    case 2:
                        $this->redirect(array('action' => 'review'));
                        break;
                    case 3:
                    $this->redirect(array('action' => 'guide'));
                    break;  
                };
            }
            $this->Session->setFlash(__('Không thể xóa tin tức '.$data['News']['title']), 'flash/error');
            switch($idType){
                case 1:
                    $this->redirect(array('action' => 'project'));
                    break;
                case 2:
                    $this->redirect(array('action' => 'review'));
                    break;
                case 3:
                    $this->redirect(array('action' => 'guide'));
                    break;  
            };
    }}
