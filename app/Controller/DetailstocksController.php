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
	            if ($this->Detailstock->save($this->request->data))
	            {
	            	$this->Detailstock->updateAll(array('Detailstock.timeImportport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.id' => $this->Detailstock->getLastInsertID()));
	            	$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
	            	$this->redirect(array('controller'=>'detailstocks','action'=>'import'));
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
	        	//
	        		//Hàm Kiểm Tra Số Lượng Sản Phẩm Ở Đây
	        	$this->loadModel('Product');
	        	$getProduct = $this->Product->find('first',array('conditions'=>array('Product.id'=>$this->request->data['Detailstock']['idProduct'])));
	        	$quantityExport = $this->request->data['Detailstock']['quatityExport'];
	        	$currentQuantity = $getProduct['Product']['quantity'];
	        	$quantityRemaining = $currentQuantity - $quantityExport;
	        	if($quantityRemaining>=0)
	        	{
		        	//
		            if ($this->Detailstock->save($this->request->data))
		            {

		            	$this->Detailstock->updateAll(array('Detailstock.timeExport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.id' => $this->Detailstock->getLastInsertID()));

		            	$this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock']['idProduct']));
		            	$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xuất Hàng Thành Công!</h4></div>'));
		            	$this->redirect(array('controller'=>'detailstocks','action'=>'export'));
		            }
		            else
		            {
		                $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xuất Hàng Thất Bại!</h4></div>'));
		            }
	            }
	            else
	            {
	            	$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xuất Hàng Thất Bại! Do Số Lượng Trong Kho Không Đủ</h4></div>'));

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
	}

?>