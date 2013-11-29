<?php
class Debit extends AppModel{
	var $name = 'Debit';
	public $useTable = 'debits';
	
	public $belongsTo = array(
		'Suppliers' => array(
			'className' => 'Suppliers',
			'foreignKey' => 'idSupplier',
			'conditions' => '',
			'fields' => 'id,nameSupplier',
			'order' => ''
		),
	);

}
?>