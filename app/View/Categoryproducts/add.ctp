<?php
    function printCategory($categorys,$id, $kitu)
        {  
            foreach($categorys as $category)
            {
                if($category['Categoryproduct']['idParent'] == $id)
                {
                    echo "<option value='".$category['Categoryproduct']['id']."'>".$kitu.' '.$category['Categoryproduct']['nameCategoryProduct']."</option>";
    
                    printCategory($categorys,$category['Categoryproduct']['id'],$kitu.$kitu);
                   
                }
            }
    }
?>
<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('THÊM LOẠI SẢN PHẨM'); ?>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <?php echo $this->Form->create('Categoryproduct', array('action' => 'add')); ?>
        <table class="table table-striped table-bordered table-advance table-hover">

            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Tên Loại Sản Phẩm'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('nameCategoryProduct', array('type' => 'text','placeholder'=>'Tên Loại Sản Phẩm','label'=>false)); ?>
                </td>
            </tr>

            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Cấp cha'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                     <select name="data[Categoryproduct][idParent]">
                        <option value='0'>Không có</option>
                        <?php
                           printCategory($categorys,0, '++'); 
                        ?>
                     </select>
                </td>
            </tr>
        
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Hiển Thị'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('enable', array('type' => 'checkbox','checked'=>true,'label' => false)); ?>
                </td>
            </tr>
        

            <tr>
                <td colspan="3">
                    <?php echo $this->Html->link('Quay Lại',array('controller'=>'categoryproducts','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
                </td>
                
            </tr>       
        </table>
        <?php echo $this->Form->end(); ?>

    </div>
</div>