<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('XÁC NHẬN TẠO HÓA ĐƠN'); ?>
        </div>
    </div>
</div>
<div class="row-fluid">
    
    <div class="span12">    
        <?php echo $this->Form->create('Bill', array('controller'=>'bills','action' => 'add')); ?>
        <table class="table table-striped table-bordered table-advance table-hover">
            
            <tr>
               <!--  <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Loại Hóa Đơn'); ?></strong>
                </td> -->
                
                <!-- <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->select('idTypeBill', $typeBills , array('type'=>'hidden')); ?>
                </td> -->
                <td>Bạn Phải Tạo Hóa Đơn Để Tiếp Tục</td>
            </tr>

          
                    <?php echo $this->Form->hidden('idTypeBill',array('value'=>2))?>
        
                    <?php echo $this->Form->hidden('idUser',array('value'=>$this->Session->read('idSS')))?>

            <tr>
                <td><?php echo $this->Form->submit('Tạo Hóa Đơn ', array('class' => 'btn btn-large btn-primary')); ?></td>
            </tr>

        
        
                   
       
                    
        
        </table>
        <?php echo $this->Form->end(); ?>
</div>
</div>