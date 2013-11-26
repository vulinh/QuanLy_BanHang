<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Thêm Bậc Lương'); ?>
        </div>
    </div>
</div> 

<div class="row-fluid">    
    <div class="span12"> 
        <div class="well">   
            <?php echo $this->Form->create('Salary', array('role' => 'form')); ?>
             <table class="table table-striped table-bordered table-advance table-hover">
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Bậc lương'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('name', array('type' => 'text','div'=>false,'label'=>false, 'placeholder' => 'Bậc lương','class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Giá trị'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('amount', array('type' => 'text','div'=>false,'label'=>false, 'placeholder' => 'Giá trị','class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
               </table>
               <div>
               <?php echo $this->Html->link('Quay Lại',array('controller'=>'salaries','action'=>'index'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
               echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px;margin-top:30px;')); ?>
               </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>