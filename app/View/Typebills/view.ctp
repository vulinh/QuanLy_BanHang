<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            Hóa Đơn
        </div>
    </div>
</div>
<div class="row-fluid">
     <div class="span12">
         <div class="well">
                <div class="table-responsive">
               <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>        
                            <td><strong><?php echo __('Tên loại hóa đơn'); ?></strong></td>
                            <td>
                            <?php echo h($typebill['Typebill']['nameTypeBill']); ?>
                            &nbsp;
                            </td>
                        </tr>                    
                        </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div>
            </div>
     </div>
 </div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'typebills','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>  