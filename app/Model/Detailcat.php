<?php
App::uses('AppModel', 'Model');
/**
 * Detailcat Model
 *
 */
class Detailcat extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'detailcat';
    
    public function isExists($idCategory,$idManufacturer){
        $option = array(
            'fields' => array('count'),
            'conditions' => array(
                'detailcat.idCategoryProduct' => $idCategory,
                'detailcat.idManufacturer' => $idManufacturer,
            ),
            'recursive' => -1,
            'callbacks' => false
        );
        $data = $this->find('first',$option);
        
        if(!empty($data['Detailcat']['count'])){
            return $data['Detailcat']['count'];  
        }else{
            return 0;
        }
    }
    
    public function add($idCategory,$idManufacturer) {
        if($this->isExists($idCategory,$idManufacturer) > 0){
           return $this->edit($idCategory,$idManufacturer,true); 
        }
        $data = array('Detailcat' => array('idCategoryProduct' => $idCategory, 'idManufacturer' => $idManufacturer, 'count' => 1));
        $this->create();
        if ($this->save($data)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($idCategory,$idManufacturer,$fg = true) {
        $result = $this->isExists($idCategory,$idManufacturer);
        if($result == 0 ){
           return false;
        }
        if($result == 1 && !$fg){
           return $this->delete($idCategory,$idManufacturer); 
        }
        $db = $this->getDataSource();
        $fields = array('idCategoryProduct','idManufacturer','count');
        if($fg){
            $value = array($idCategory,$idManufacturer,$db->expression('count + 1'));
        }else{
            $value = array($idCategory,$idManufacturer,$db->expression('count - 1'));
        }
        if ((bool)$db->update($this,$fields,$value)) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($idCategory,$idManufacturer) {
        $db = $this->getDataSource();
        $data = array('Detailcat.idCategoryProduct' => $idCategory, 'Detailcat.idManufacturer' => $idManufacturer);
        if ((bool)$db->delete($this,$data)) {
            return true;
        } else {
            return false;
        }
    }

}
