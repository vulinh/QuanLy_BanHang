<?php 
class DetailstocksController extends AppController
{
	var $name = 'Detailstocks';

	var  $helpers = array('Session');
    var  $components = array('Session');
	public $theme = 'Cakestrap';

	function index()
	{
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
			$this->paginate = array('limit'=>5);

			$this->set('dataDetailStocks',$this->paginate());
		}
		else
		{
            $this->redirect(array('controller'=>'users','action'=>'login'));
    	}
	}

	function import()
	{

		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{


			if (!empty($this->request->data))
	        {
	        	$numberRow = $_POST['numberRow'];
	        	// echo $numberRow;
		        $this->loadModel('Product');
		        	for ($i=1; $i <= $numberRow ; $i++) 
		        	{ 	        	
			        	
			        	$getProduct = $this->Product->find('first',array('conditions'=>array('Product.id'=>$this->request->data['Detailstock'][$i]['idProduct'])));
			        	$quantityImport = $this->request->data['Detailstock'][$i]['quatity'];
			        	$currentQuantity = $getProduct['Product']['quantity'];
			        	$quantityRemaining = $currentQuantity + $quantityImport;
			        	
			        		// $this->Detailstock->create();
			        	if($i==1){
				        if ($this->Detailstock->saveAll($this->request->data['Detailstock']))
				        {
			        		
				            $this->Detailstock->updateAll(array('Detailstock.timeImport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][$i]['idBill'],'Detailstock.quatityExport'=>0));

				            $this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][$i]['idProduct']));

				            $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
				            	// $this->redirect(array('controller'=>'detailstocks','action'=>'import'));
				            // break;
				        }
				        else
				        {
				            $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
				        }
				        }
				        else
				        {
				        	$this->Detailstock->updateAll(array('Detailstock.timeImport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][$i]['idBill'],'Detailstock.quatityExport'=>0));

				            $this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][$i]['idProduct']));
				        }
			        	
			        }
				}
				
					
							
		}
		else
		{
            $this->redirect(array('controller'=>'users','action'=>'login'));
    	}
    	$this->loadModel('Product');
		$dataProduct = $this->Product->find('list',array('fields' =>array('Product.nameProduct'))); 
		$this->set('dataProduct',$dataProduct);

		$this->loadModel('Stock');
		$dataStock = $this->Stock->find('list',array('fields' =>array('Stock.nameStock'))); 
		$this->set('dataStock',$dataStock);
	}

	function export()
	{
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
			if (!empty($this->request->data))
	        {
	        	$numberRow = $_POST['numberRow'];
		        $this->loadModel('Product');
		        for ($i=1; $i <= $numberRow ; $i++) 
		        { 	        	
		        	$getProduct = $this->Product->find('first',array('conditions'=>array('Product.id'=>$this->request->data['Detailstock'][$i]['idProduct'])));
		        	$quantityExport = $this->request->data['Detailstock'][$i]['quatityExport'];

		        	$currentQuantity = $getProduct['Product']['quantity'];
		        	$quantityRemaining = $currentQuantity - $quantityExport;
		        	if($quantityRemaining>=0)
		        	{
			        	if($i==1){
			            if ($this->Detailstock->saveAll($this->request->data['Detailstock']))
			            {

			            	$this->Detailstock->updateAll(array('Detailstock.timeExport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][$i]['idBill'],'Detailstock.quatity'=>0));

			            	$this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][$i]['idProduct']));
			            	$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xuất Hàng Thành Công!</h4></div>'));
			            	// $this->redirect(array('controller'=>'detailstocks','action'=>'export'));
			            }
			            else
			            {
			                $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xuất Hàng Thất Bại!</h4></div>'));
			            }
			        	}
			        	else
			        	{
			        		$this->Detailstock->updateAll(array('Detailstock.timeExport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][$i]['idBill'],'Detailstock.quatity'=>0));

			            	$this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][$i]['idProduct']));
			        	}
		            }
		            else
		            {
		            	$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xuất Hàng Thất Bại! Do Số Lượng Trong Kho Không Đủ</h4></div>'));
		            	break;

		            }
	        	}
			}
		}
		else
		{
            $this->redirect(array('controller'=>'users','action'=>'login'));
    	}
    	$this->loadModel('Product');
		$dataProduct = $this->Product->find('list',array('fields' =>array('Product.nameProduct'),
			'conditions'=>array('Product.quantity >'=>'0'))); 
		$this->set('dataProduct',$dataProduct);

		$this->loadModel('Stock');
		$dataStock = $this->Stock->find('list',array('fields' =>array('Stock.nameStock'))); 
		$this->set('dataStock',$dataStock);
	}
	function billimport(){
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
			$this->loadModel('TypeBill');
       // $this->loadModel('User');
		$typeBills = $this->TypeBill->find('list', array('fields' => array('nameTypeBill')));
		//$users = $this->Bill->User->find('list');
		$this->set(compact('typeBills'));
		}
		else{
			$this->redirect(array('controller'=>'users','action'=>'login'));
		}
	}
	}

?>