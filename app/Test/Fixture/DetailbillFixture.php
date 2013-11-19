<?php
/**
 * DetailbillFixture
 *
 */
class DetailbillFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'detailbill';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'idProduct' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'quatity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'price' => array('type' => 'float', 'null' => false, 'default' => null),
		'idBill' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'idBill' => array('column' => 'idBill', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'idProduct' => 1,
			'quatity' => 1,
			'price' => 1,
			'idBill' => 1
		),
	);

}
