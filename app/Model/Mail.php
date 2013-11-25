<?php
App::uses('AppModel', 'Model');
/**
 * Mail Model
 *
 * @property idUserRceipt $idUserRceipt
 */
class Mail extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idMail';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idMail' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'idUserSent' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'idUserReceipt' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subject' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'UsersReceipt' => array(
			'className' => 'Users',
			'foreignKey' => 'idUserReceipt',
			'conditions' => '',
			'fields' => 'id,name',
			'order' => ''
		),
        'UsersSent' => array(
            'className' => 'Users',
            'foreignKey' => 'idUserSent',
            'conditions' => '',
            'fields' => 'id,name',
            'order' => ''
        )
	);
}
