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

        	////////////////////Nợ/////////////////////////////
            $this->loadModel("Debit");
            $totalDebit = 0;
            $dataAllDebit = $this->Debit->find('all',
                array('fields'=>array('Debit.moneyDebit')));
            foreach ($dataAllDebit as $vdataAllDebit) {
                $totalDebit = $totalDebit + $vdataAllDebit['Debit']['moneyDebit'];
            }
            $this->set(compact('totalDebit'));

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
}

?>