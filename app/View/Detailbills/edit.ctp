<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
              <?php echo __('Cập Nhật Chi Tiết Hóa Đơn'); ?>
        </div>
    </div>
</div> 

<div class="row-fluid">    
    <div class="span12"> 
            <?php echo $this->Form->create('Detailbill', array('role' => 'form')); ?>
              <table class="table table-striped table-bordered table-advance table-hover">

            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Sản phẩm'); ?></strong>
                </td>
                
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->select('idProduct', $products , array('class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
            
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Chất lượng'); ?></strong>
                </td>
                
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('quatity', array('type' => 'text', 'label' => false,'class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Giá'); ?></strong>
                </td>
                
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('price', array('type' => 'text', 'label' => 'Giá','class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
            
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Hóa đơn'); ?></strong>
                </td>
                
                <td style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Form->select('idBill', $bills , array('class' => 'form-control')); ?>
                    &nbsp;
                </td>
            </tr>
           
            <tr>
                <td colspan=2 style="width:50%; text-align:center;font-size:15px">
                    <?php echo $this->Html->link('Quay Lại',array('controller'=>'detailbills','action'=>'index'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px;margin-top:30px;')); ?>
                    &nbsp;
                </td>
            </tr>

        
        </table>
                
            <?php echo $this->Form->end(); ?>
           
    </div>
</div>