<?php
/**
 * BillFixture
 *
 */
class BillFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'idTypeBill' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'total' => array('type' => 'float', 'null' => false, 'default' => null),
		'idUser' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'idTypeBill' => array('column' => 'idTypeBill', 'unique' => 0)
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
			'idTypeBill' => 1,
			'time' => '2013-11-19 10:22:39',
			'total' => 1,
			'idUser' => 1,
			'status' => 1
		),
	);

}
