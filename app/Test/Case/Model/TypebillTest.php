<?php
App::uses('Typebill', 'Model');

/**
 * Typebill Test Case
 *
 */
class TypebillTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typebill'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Typebill = ClassRegistry::init('Typebill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typebill);

		parent::tearDown();
	}

}
