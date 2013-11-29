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
                array('fields'=>array('Debit.moneyDebit')));
            foreach ($dataAllDebit as $vdataAllDebit) {
                $totalDebit = $totalDebit + $vdataAllDebit['Debit']['moneyDebit'];
            }
            $this->set(compact('totalDebit'));
            ////////////////////KH Nợ/////////////////////////////
            $this->loadModel("Debited");
            $totalDebited = 0;
            $dataAllDebited = $this->Debited->find('all',
                array('fields'=>array('Debited.moneyDebit')));
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
        $this->loadModel('Debit');
        $this->loadModel('Supplier');
        $this->layout = 'default2';
        
        $this->paginate = array('limit'=>10,'recursive'=>0);
        $this->set('dataDebit',$this->paginate('Debit'));
        // $dataDebit = $this->Debit->find('all');
        // $this->set('dataDebit',$dataDebit);
    }
}

?>