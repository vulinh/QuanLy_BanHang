<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            Nội dung tin nhắn
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
                            <td><strong><?php echo __('Tiêt đề'); ?></strong></td>
                            <td>
                            <?php echo h($mail['Mail']['subject']); ?>
                            &nbsp;
                            </td>
                        </tr>
                       <tr>        
                            <td><strong><?php echo __('Người gửi'); ?></strong></td>
                            <td>
                            <?php echo h($mail['UsersSent']['name']); ?>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>        
                            <td><strong><?php echo __('Ngày'); ?></strong></td>
                            <td>
                            <?php echo h($mail['Mail']['date']); ?>
                            &nbsp;
                            </td>
                        </tr>
                        
                        <tr>        
                            <td colspan = '2' style = 'font-size: 1.1em;'>
                            <?php echo h($mail['Mail']['content']); ?>
                            &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->
            </div>
            
            <div class = 'reply'>
            
            </div>
     </div>
 </div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'mails','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>