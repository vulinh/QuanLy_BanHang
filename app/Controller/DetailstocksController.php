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
			$this->_positionSS();
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
			$this->_positionSS();
			$this->loadModel('Supplier');
			$this->set('dataSupplier',$this->Supplier->find('all'));

			if(!$this->Session->check('idBillSS'))
			{

				$this->redirect(array('controller'=>'detailstocks','action'=>'billimport'));
			}
			else
			{	
		
				if (!empty($this->request->data))
	        	{
	        		$numberRow = $_POST['numberRow'];
	        		if(empty($_POST['status'])){
	        			$status = 0;
	        		}
	        		else{
	        			$status = 1;
	        		}
	        		
	        		$supplier = $_POST['supplier'];
	        		$total = 0;
	        	
		        	$this->loadModel('Product');
		        	$this->loadModel('Bill');
		        	if($numberRow ==1 || empty($numberRow))
		        	{
		        		$getProduct = $this->Product->find('first',array('conditions'=>array('Product.id'=>$this->request->data['Detailstock'][1]['idProduct'])));

		        		$price = $getProduct['Product']['price'];

			        	$quantityImport = $this->request->data['Detailstock'][1]['quatity'];
			        	$currentQuantity = $getProduct['Product']['quantity'];
			        	$quantityRemaining = $currentQuantity + $quantityImport;
			        	$total = $price * $quantityImport;
		        		if ($this->Detailstock->saveAll($this->request->data['Detailstock']))
            			{
            				$this->Detailstock->updateAll(array('Detailstock.timeImport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][1]['idBill']));

            				$this->Bill->updateAll(array('Bill.total' =>$total), array('Bill.id' => $this->request->data['Detailstock'][1]['idBill']));

				            $this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][1]['idProduct']));
				            if($status){
				            	$this->Bill->updateAll(array('Bill.status' =>1), array('Bill.id' => $this->request->data['Detailstock'][1]['idBill']));
				            	$this->loadModel('Expense');
				            	$this->Expense->save( 
    								array(
        								'money' => $total,
        								'idBill' =>$this->request->data['Detailstock'][1]['idBill'],
        								'time' =>date('Y-m-d H:i:s'),
    								)
								);

				            }
				            else{
				            	$this->loadModel('Debit');
				            	$this->Debit->save( 
    								array(
        								'moneyDebit' => $total,
        								'idBill' =>$this->request->data['Detailstock'][1]['idBill'],
        								'time' =>date('Y-m-d H:i:s'),
        								'idSupplier'=>$supplier,
        								'status'=>0
    								)
								);
				            	
				            }
				            
            				$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
            			}
            			else
            			{
                			$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
            			}
		        	}
		        	else
		        	{
		        	for ($i=1; $i <= $numberRow ; $i++) 
		        	{ 	        	
			        	
			        	$getProduct = $this->Product->find('first',array('conditions'=>array('Product.id'=>$this->request->data['Detailstock'][$i]['idProduct'])));

			        	$price = $getProduct['Product']['price'];
			        	$quantityImport = $this->request->data['Detailstock'][$i]['quatity'];
			        	$currentQuantity = $getProduct['Product']['quantity'];
			        	$quantityRemaining = $currentQuantity + $quantityImport;
			        	$total += $price * $quantityImport;

			        	if($i==1)
			        	{
				        	if ($this->Detailstock->saveAll($this->request->data['Detailstock']))
				        	{
			        		
				            	$this->Detailstock->updateAll(array('Detailstock.timeImport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][$i]['idBill']));
				            	$this->Bill->updateAll(array('Bill.total' =>$total), array('Bill.id' => $this->request->data['Detailstock'][$i]['idBill']));
				            	$this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][$i]['idProduct']));
				            	if($status){
				            		$this->Bill->updateAll(array('Bill.status' =>1), array('Bill.id' => $this->request->data['Detailstock'][$i]['idBill']));
				            	}
				            	$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
				            	
				        	}
				        	else
				        	{
				            	$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
				        	}
				        }
				        else
				        {
				        	$this->Detailstock->updateAll(array('Detailstock.timeImport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][$i]['idBill']));
				        	$this->Bill->updateAll(array('Bill.total' =>$total), array('Bill.id' => $this->request->data['Detailstock'][$i]['idBill']));
				            $this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][$i]['idProduct']));
				            if($status){
				            	$this->Bill->updateAll(array('Bill.status' =>1), array('Bill.id' => $this->request->data['Detailstock'][$i]['idBill']));
				            }
				        }
				    }
				    $this->loadModel('Expense');
				    if($status){
				        $this->Expense->save( 
    					array(
        					'money' => $total,
        					'idBill' =>$this->request->data['Detailstock'][1]['idBill'],
        					'time' =>date('Y-m-d H:i:s'),
    					)
						);
				    }

				    else{
				            	$this->loadModel('Debit');
				            	$this->Debit->save( 
    								array(
        								'moneyDebit' => $total,
        								'idBill' =>$this->request->data['Detailstock'][1]['idBill'],
        								'time' =>date('Y-m-d H:i:s'),
        								'idSupplier'=>$supplier,
        								'status' => 0
    								)
								);
				            	
				            }
			        	
			    }

			        $this->Session->delete('idBillSS');	
			        $this->redirect(array('controller'=>'detailstocks','action'=>'billimport'));
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
			$this->_positionSS();
			$this->loadModel('User');
			$dataUser = $this->User->find('all',array('conditions'=>
							array('OR'=>
								array('User.isCustomer'=>1),
								array('User.isPartner'=>1)
					)));

			$this->set('dataUser',$dataUser);
			if(!$this->Session->check('idBillExportSS'))
			{

				$this->redirect(array('controller'=>'detailstocks','action'=>'billexport'));
			}
			else
			{	
		
				if (!empty($this->request->data))
	        	{
	        		
	        		$user = $_POST['user'];
	        		$numberRow = $_POST['numberRow'];
	       			if(empty($_POST['status'])){
	       				$status = 0;
	       			}
	       			else{
	       				$status = 1;
	       			}
					$total = 0;
		        	$this->loadModel('Product');
		        	$this->loadModel('Bill');
		        	if($numberRow ==1 || empty($numberRow))
		        	{
		        		$getProduct = $this->Product->find('first',array('conditions'=>array('Product.id'=>$this->request->data['Detailstock'][1]['idProduct'])));

		        		$price = $getProduct['Product']['price'];
			        	$quantityExport = $this->request->data['Detailstock'][1]['quantityExport'];

						$currentQuantity = $getProduct['Product']['quantity'];

			        	$quantityRemaining = $currentQuantity - $quantityExport;

			        	$total = $price * $quantityExport;
			        	if($quantityRemaining>=0)
			        	{
			        		if ($this->Detailstock->saveAll($this->request->data['Detailstock']))
	            			{
	            				$this->Detailstock->updateAll(array('Detailstock.timeExport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][1]['idBill']));
	            				$this->Bill->updateAll(array('Bill.total' =>$total), array('Bill.id' => $this->request->data['Detailstock'][1]['idBill']));

					            $this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][1]['idProduct']));

					            if($status){
					            	$this->Bill->updateAll(array('Bill.status' =>1), array('Bill.id' => $this->request->data['Detailstock'][1]['idBill']));
					            	$this->loadModel('Receipt');
					            	$this->Receipt->save( 
	    								array(
	        								'money' => $total,
	        								'idBill' =>$this->request->data['Detailstock'][1]['idBill'],
	        								'time' =>date('Y-m-d H:i:s'),
	    								)
									);

				            	}
				            	else{
				            	$this->loadModel('Debited');
				            	$this->Debited->save( 
    								array(
        								'moneyDebit' => $total,
        								'idBill' =>$this->request->data['Detailstock'][1]['idBill'],
        								'time' =>date('Y-m-d H:i:s'),
        								'idUser'=>$user,
    								)
								);
				            	
				            }
	            				$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
	            			}
	            			else
	            			{
	                			$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));

	            			}
            			}
            			else
            			{
            				$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại, Không Đủ Số Lượng Để Xuất Hàng</h4></div>'));
            			}
		        	}
		        	else
		        	{
			        	for ($i=1; $i <= $numberRow ; $i++) 
			        	{ 	        	
				        	
				        	$getProduct = $this->Product->find('first',array('conditions'=>array('Product.id'=>$this->request->data['Detailstock'][$i]['idProduct'])));
				        	$price = $getProduct['Product']['price'];
				        	$quantityExport = $this->request->data['Detailstock'][$i]['quantityExport'];
				        	$currentQuantity = $getProduct['Product']['quantity'];
				        	$quantityRemaining = $currentQuantity - $quantityExport;
				        	$total += $price * $quantityExport;
				        	if($quantityRemaining>=0)
				        	{

					        	if($i==1)
					        	{
						        	if ($this->Detailstock->saveAll($this->request->data['Detailstock']))
						        	{
					        		
						            	$this->Detailstock->updateAll(array('Detailstock.timeImport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][$i]['idBill']));
						            	$this->Bill->updateAll(array('Bill.total' =>$total), array('Bill.id' => $this->request->data['Detailstock'][$i]['idBill']));
						            	$this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][$i]['idProduct']));

						            	$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
						            	
						        	}
						        	else
						        	{
						            	$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
						        	}
						        }
						        else
						        {
						        	$this->Detailstock->updateAll(array('Detailstock.timeImport' =>"'".date('Y-m-d H:i:s')."'"), array('Detailstock.idBill' => $this->request->data['Detailstock'][$i]['idBill']));
						        	$this->Bill->updateAll(array('Bill.total' =>$total), array('Bill.id' => $this->request->data['Detailstock'][$i]['idBill']));
						            $this->Product->updateAll(array('Product.quantity' =>$quantityRemaining), array('Product.id' => $this->request->data['Detailstock'][$i]['idProduct']));
						        }
					        }
					        else
            				{
            					$this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại, Không Đủ Số Lượng Để Xuất Hàng</h4></div>'));
            				}
					    }

					    if($status){
				            	$this->Bill->updateAll(array('Bill.status' =>1), array('Bill.id' => $this->request->data['Detailstock'][1]['idBill']));
				            	$this->loadModel('Receipt');
				            	$this->Receipt->save( 
    								array(
        								'money' => $total,
        								'idBill' =>$this->request->data['Detailstock'][1]['idBill'],
        								'time' =>date('Y-m-d H:i:s'),
    								)
								);

				            }
				        else{
				            	$this->loadModel('Debited');
				            	$this->Debited->save( 
    								array(
        								'moneyDebit' => $total,
        								'idBill' =>$this->request->data['Detailstock'][1]['idBill'],
        								'time' =>date('Y-m-d H:i:s'),
        								'idUser'=>$user,
    								)
								);
				            	
				            }
			        	
			    	}

			        $this->Session->delete('idBillExportSS');	
			        $this->redirect(array('controller'=>'detailstocks','action'=>'billexport'));
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

	function deletebillimport(){
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
			$this->_positionSS();
			$this->loadModel('Bill');
			$this->Bill->delete($this->Session->read('idBillSS'));
			$this->Session->delete('idBillSS');
			$this->redirect(array('controller'=>'detailstocks','action'=>'billimport'));
			
		}
		else
		{
			$this->redirect(array('controller'=>'users','action'=>'login'));
		}

	}

	function deletebillexport(){
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
			$this->_positionSS();
			$this->loadModel('Bill');
			$this->Bill->delete($this->Session->read('idBillExportSS'));
			$this->Session->delete('idBillExportSS');
			$this->redirect(array('controller'=>'detailstocks','action'=>'billexport'));
			
		}
		else
		{
			$this->redirect(array('controller'=>'users','action'=>'login'));
		}

	}

	function billimport(){
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
			$this->_positionSS();
			$this->loadModel('Typebill');
       // $this->loadModel('User');
		$Typebills = $this->Typebill->find('list', array('fields' => array('nameTypebill')));
		//$users = $this->Bill->User->find('list');
		$this->set(compact('Typebills'));
		}
		else{
			$this->redirect(array('controller'=>'users','action'=>'login'));
		}
	}

	function billexport(){
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
		{
			$this->_positionSS();
			$this->loadModel('Typebill');
       // $this->loadModel('User');
		$Typebills = $this->Typebill->find('list', array('fields' => array('nameTypebill')));
		//$users = $this->Bill->User->find('list');
		$this->set(compact('Typebills'));
		}
		else{
			$this->redirect(array('controller'=>'users','action'=>'login'));
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
                            // $this->redirect(array('controller'=>'detailstocks','action'=>'export'));
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
        }
	}

?>