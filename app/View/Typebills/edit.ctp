<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Cập nhật Loại Hóa Đơn'); ?>
        </div>
    </div>
</div> 

<div class="row-fluid">    
    <div class="span12">    
       <?php echo $this->Form->create('Typebill', array('role' => 'form')); ?>
             <table class="table table-striped table-bordered table-advance table-hover">

            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Tên loại hóa đơn'); ?></strong>
                </td>
                
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('nameTypeBill', array('type' => 'text','label' => false,'class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
            
           
            <tr>
                <td colspan=2 style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Html->link('Quay Lại',array('controller'=>'typebills','action'=>'index'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px;margin-top:30px;')); ?>
                    &nbsp;
                </td>
            </tr>

        
        </table>    

            <?php echo $this->Form->end(); ?>
    </div>
</div>