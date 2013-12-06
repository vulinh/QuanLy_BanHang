<?php
App::uses('AppModel', 'Model');
/**
 * Categoryproduct Model
 *
 * @property Manufacturer $
 */
class Categoryproduct extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nameCategoryProduct' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'idManufacture' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'enable' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
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
 * hasOne associations
 *
 * @var array
 */
 
    public function loadParentCategory($id){
        $category = array();
        while($id > 0){
            $options = array('conditions' => array('Categoryproduct.' . $this->primaryKey => $id));
            $item = $this->find('first', $options);

            array_push($category,$item);
            $id =  $item['Categoryproduct']['idParent'];  
        };
        return $category;
    }
    
    public function loadChildCategory($id){
        $options = array('conditions' => array('Categoryproduct.idParent' => $id));
        $itemChild = $this->find('all');
        $category = array();
        $this->findChildCategory($itemChild,$id,&$category);
    }
    
    function findChildCategory($categorys,$id,&$array)
    {  
        foreach($categorys as $category)
        {
            if($category['Categoryproduct']['idParent'] == $id)
            {
                $item = array('id' => $category['Categoryproduct']['id'],'name' => $category['Categoryproduct']['nameCategoryProduct']);                    
                array_push($array,$item);
                $this->findChildCategory($categorys,$category['Categoryproduct']['id'],&$array);
            }
        }
    }
    
    public function printParentCategory($parentCategory,$url){
        $n = count($parentCategory);
        for($i = $n -1; $i>=0 ;$i--){
           echo '<a href="/'.url.'/categoryproducts/view/'.$parentCategory[$i]['Categoryproduct']['id'].'" class="">'.$parentCategory[$i]['Categoryproduct']['nameCategoryProduct'].'</a>';
           for($j=1; $j < $i*2; $j++) echo '<br>++ ';
        }
    }
}
