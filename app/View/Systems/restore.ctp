
<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Phục Hồi Dữ Liệu'); ?>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
         <div class="well">
        <?php echo $this->Form->create('Systems', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <table class="table table-striped table-bordered table-advance table-hover">
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('File'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->file('data'); ?>
                    &nbsp;
                </td>
            </tr>
            </table> 
            <?php echo $this->Html->link('Quay Lại',array('controller'=>'systems','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>

        <?php echo $this->Form->end(); ?>   
        </div> 
    </div>
</div>