<?php
    App::uses('AppController', 'Controller');
    /**
    * Products Controller
    *
    * @property Product $Product
    * @property PaginatorComponent $Paginator
    */
    class ReportsController extends AppController {
        public $components = array('Paginator');
        public $theme = 'Cakestrap';

        public function index() {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
                
                ////////////////////User/////////////////////////////
                $this->loadModel('User');
                $countAllUser = $this->User->find("count");
                $countCustomer = $this->User->find("count",
                    array("conditions"=>array("User.isCustomer"=>1)));
                $countPartner = $this->User->find("count",
                    array("conditions"=>array("User.isPartner"=>1)));
                $countEmployee = $this->User->find("count",
                    array("conditions"=>array("User.isEmployee"=>1)));
                $this->set(compact('countAllUser', 'countCustomer', 'countPartner', 'countEmployee'));

                ////////////////////Thu/////////////////////////////
                $this->loadModel("Receipt");
                $total = 0;
                $dataAllReceipt = $this->Receipt->find('all',
                    array('fields'=>array('Receipt.money')));
                foreach ($dataAllReceipt as $vdataAllReceipt) {
                    $total = $total + $vdataAllReceipt['Receipt']['money'];
                }
                $this->set(compact('total'));


                ////////////////////Chi/////////////////////////////
         
                $this->loadModel("Expense");
                $totalExpense = 0;
                $dataAllExpense = $this->Expense->find('all',
                    array('fields'=>array('Expense.money')));
                foreach ($dataAllExpense as $vdataAllExpense) {
                    $totalExpense = $totalExpense + $vdataAllExpense['Expense']['money'];
                }
                $this->set(compact('totalExpense'));

                ////////////////////Nợ NCC/////////////////////////////
                $this->loadModel("Debit");
                $totalDebit = 0;
                $dataAllDebit = $this->Debit->find('all',
                    array('fields'=>array('Debit.moneyDebit'),
                        'conditions'=>array('Debit.status'=>0)));
                foreach ($dataAllDebit as $vdataAllDebit) {
                    $totalDebit = $totalDebit + $vdataAllDebit['Debit']['moneyDebit'];
                }
                $this->set(compact('totalDebit'));
                ////////////////////KH Nợ/////////////////////////////
                $this->loadModel("Debited");
                $totalDebited = 0;
                $dataAllDebited = $this->Debited->find('all',
                    array('fields'=>array('Debited.moneyDebit'),
                        'conditions'=>array('Debited.status'=>0)));
                foreach ($dataAllDebited as $vdataAllDebited) {
                    $totalDebited = $totalDebited + $vdataAllDebited['Debited']['moneyDebit'];
                }
                $this->set(compact('totalDebited'));

                ////////////////////Sản Phẩm/////////////////////////////
                $this->loadModel("Product");
                $totalProduct = 0;
                $dataAllProduct = $this->Product->find('all',
                    array('fields'=>array('Product.quantity')));
                foreach ($dataAllProduct as $vdataAllProduct) {
                    $totalProduct = $totalProduct + $vdataAllProduct['Product']['quantity'];
                }
                $this->set(compact('totalProduct'));

            }
            else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

           function debit(){
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
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
                                // $this->redirect(array('controller'=>'bills','action'=>'index'));
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
            $this->loadModel('Debit');
        $this->loadModel('Supplier');
        
        $this->paginate = array(
            'limit'=>10,
            'fields'=>array('Debit.time','Debit.moneyDebit','Debit.idBill','Supplier.nameSupplier'),
            'recursive'=>0,
            'joins' => array( 
                array(

                    'table' => 'suppliers',
                    'alias' => 'Supplier',
                    'type' => 'INNER',
                    'foreignKey' => 'Debit.idSupplier',
                    'conditions' => 'Debit.idSupplier = Supplier.id'
                )
            )
        );
        $this->set('dataDebit',$this->paginate('Debit'));
        }
        else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
    }

   

        function debited(){
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
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
                                // $this->redirect(array('controller'=>'bills','action'=>'index'));
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
        $this->loadModel('Debited');
        $this->loadModel('User');
        
        $this->paginate = array(
            'limit'=>10,
            'fields'=>array('Debited.time','Debited.moneyDebit','Debited.idBill','User.name'),
            'recursive'=>0,
            'joins' => array( 
                array(

                    'table' => 'users',
                    'alias' => 'User',
                    'type' => 'INNER',
                    'foreignKey' => 'Debited.idUser',
                    'conditions' => 'Debited.idUser = User.id'
                )
            )
        );
        $this->set('dataDebited',$this->paginate('Debited'));
        // $dataDebit = $this->Debit->find('all');
        // $this->set('dataDebit',$dataDebit);
    }
    else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
}



    function product(){
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
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
        $this->loadModel('Product');
        $this->loadModel('Detailstock');
        $this->loadModel('Stock');

        $this->paginate = array(
            'limit'=>100,
            'fields'=>array('Stock.nameStock,Detailstock.timeImport','Detailstock.timeExport','Detailstock.idBill','Product.nameProduct','Detailstock.quatity','Detailstock.quantityExport'),
            'recursive'=>0,
            'joins' => array(
                array(

                    'table' => 'detailstocks',
                    'alias' => 'Detailstock',
                    'type' => 'INNER',
                    'foreignKey' => 'Detailstock.idStock',
                    'conditions' => 'Detailstock.idStock = Stock.id'
                ), 
                array(

                    'table' => 'products',
                    'alias' => 'Product',
                    'type' => 'INNER',
                    'foreignKey' => 'Detailstock.idProduct',
                    'conditions' => 'Detailstock.idProduct = Product.id'
                )
            ),
            'order'=>array('Detailstock.idBill' => 'desc',)
        );

        $this->set('dataDetailstock',$this->paginate('Stock'));

    }
    else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
}

       

        function user(){
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
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
            $this->loadModel('User');
            $this->paginate = array(
                'joins' => array(
                    array(
                        'table' => 'areas',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        'foreignKey' => 'idArea',
                        'conditions' => array('User.idArea=areas.id')),

                ),'fields' => 'User.*,areas.id,areas.nameArea','limit'=>10,'recursive'=>0);
            $this->set('dataUser',$this->paginate('User'));
        }
        else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
    }

        function receipt(){
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
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
                                // $this->redirect(array('controller'=>'bills','action'=>'index'));
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
            $this->loadModel('Receipt');
            $this->paginate = array(
                'joins' => array(
                    array(
                        'table' => 'bills',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        'foreignKey' => 'idBill',
                        'conditions' => array('Receipt.idBill=bills.id')),
                    array(
                        'table' => 'typebills',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idTypeBill=typebills.id')),
                   array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idUser=users.id')),
                ),'fields' => 'Receipt.time,Receipt.money,bills.status,typebills.nameTypeBill,users.name',
                'limit'=>10,'recursive'=>0);
            $this->set('dataReceipt',$this->paginate('Receipt'));
        }
        else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
    }

    
        
        function expense(){

            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
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
                                // $this->redirect(array('controller'=>'bills','action'=>'index'));
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
            $this->loadModel('Expense');
            $this->paginate = array(
                'joins' => array(
                    array(
                        'table' => 'bills',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        'foreignKey' => 'idBill',
                        'conditions' => array('Expense.idBill=bills.id')),
                    array(
                        'table' => 'typebills',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idTypeBill=typebills.id')),
                   array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idUser=users.id')),
                ),'fields' => 'Expense.time,Expense.money,bills.status,typebills.nameTypeBill,users.name',
                'limit'=>10,'recursive'=>0);
            
            $this->set('dataExpense',$this->paginate('Expense'));

        }
        else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        

  
    }

?>