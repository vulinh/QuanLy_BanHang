<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            Thông Tin Bậc Lương
        </div>
    </div>
</div>
<div class="row-fluid">
     <div class="span12">
         <div class="well">
                <table class="table table-striped table-bordered">
                    <tbody>
                       <tr>        <td><strong><?php echo __('Bậc lương'); ?></strong></td>
        <td>
            <?php echo h($salary['Salary']['name']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Giá trị'); ?></strong></td>
        <td>
            <?php echo h($salary['Salary']['amount']); ?>
            &nbsp;
        </td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            
            </div>
     </div>
 </div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'salaries','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>