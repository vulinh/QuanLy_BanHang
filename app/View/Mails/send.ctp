<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Gửi tin nhắn'); ?>
        </div>
    </div>
</div> 

<div class="row-fluid">
    <div class="span12"> 
    <div class="well">   
    <?php echo $this->Form->create('Mail', array('role' => 'form')); ?>
        <?php echo $this->Form->input('idUserSent', array('type' => 'hidden','value' => $idUser)); ?>
        <table class="table table-striped table-bordered table-advance table-hover">
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Người nhận'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->select('idUserReceipt', $idUserRceipts ,array('class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Tiêu đề'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('subject', array('type' => 'text','label'=>'','class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Nội dung'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('content', array('type' => 'textarea','label'=>'','class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
            
            <tr>
                <td colspan=2 style="width:50%; text-align:center;font-size:15px">
                
                    <?php echo $this->Html->link('Quay Lại',array('controller'=>'mails','action'=>'index'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px;margin-top:30px;')); ?>
                    &nbsp;
                </td>
            </tr>
            
        </table>

            <?php echo $this->Form->end(); ?>
            </div>
    </div>
</div>