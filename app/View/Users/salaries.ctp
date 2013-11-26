 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Cập Nhật Lương Cho Nhân Viên
        </div>
    </div>
<!-- <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li class="active"><?php echo $this->Html->link('Thêm người dùng',array('controller'=>'users','action'=>'add')) ?></li>
              <li><?php echo $this->Html->link('Quay lại',array('controller'=>'users','action'=>'index')) ?></li>
            </ul>
        </div>-->
</div> 
 <div class="row-fluid">
<div class="span11 offset1">
<?php 
    echo $this->Form->create('User', array('action' => 'salaries','class' => 'form-horizontal'));
            echo '<fieldset>';
            echo $this->Form->label('Nhân viên');
            echo $this->Form->select('id',$dataUser,array('class'=>'span3', 'style' => 'margin-bottom:10px'));
           
            echo $this->Form->label('Bậc lương');
            echo $this->Form->select('idSalary',$dataSalary,array('class'=>'span3', 'style' => 'margin-bottom:10px'));
          
             echo $this->Form->label('Thâm niên');
            echo $this->Form->text('seniority',array('placeholder'=>'Thâm niên','class'=>'span3', 'style' => 'margin-bottom:10px'));
             echo $this->Form->label('Tiền thưởng');
            echo $this->Form->text('bonus',array('placeholder'=>'Tiền thưởng','class'=>'span3', 'style' => 'margin-bottom:10px'));
             echo $this->Form->label('Tỉ lệ %');
            echo $this->Form->text('percentage',array('placeholder'=>'Tỉ lệ %','class'=>'span3', 'style' => 'margin-bottom:10px'));
             echo $this->Form->label('Tổng');
            echo $this->Form->text('totalSalary',array('placeholder'=>'Tổng','class'=>'span3', 'style' => 'margin-bottom:10px'));
            
            echo '</fieldset>';
           
            echo '<a href="javascript:calculate();" class="btn btn-success pull-left" style="margin:10px 5px">Tính tổng</a>';
            echo $this->Form->input('Lưu',array('type'=>'submit','class'=>'btn btn-primary pull-left','div'=>false,'label'=>false,'style'=>'margin:10px 5px'));
            
            echo $this->Form->end();            	
?>
</div>
</div>
</div>
<script type="text/javascript">
    function calculate(){
        var salary = $('#UserIdSalary option:selected').text();
        salary = parseInt(salary);
        var seniority = parseInt($('#UserSeniority').val());
        var bonus = parseInt($('#UserBonus').val()); 
        var percentage = 0;
        var totalSalary = 0;
        if(salary > 0){
            totalSalary += salary;
            if(seniority > 0)
               totalSalary += (salary*seniority)/100;
            if(bonus > 0)
               totalSalary += bonus;  
            $('#UserTotalSalary').val(totalSalary);
        }
        return false;
    }
</script>