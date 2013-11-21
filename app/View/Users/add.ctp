 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           TẠO NGƯỜI DÙNG MỚI
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
    echo $this->Form->create('User', array('action' => 'add','class' => 'form-horizontal'));
    echo '<fieldset><legend>Thông Tin Người Dùng</legend>';
    		echo $this->Form->text('username',array('placeholder'=>'tên đăng nhập','class'=>'span3'));
    		// echo $this->Form->label('mật khẩu');
    		echo $this->Form->text('pword',array('placeholder'=>'mật khẩu','class'=>'span3'));
    		// echo $this->Form->label('tên');
    		echo $this->Form->text('name',array('placeholder'=>'tên','class'=>'span3'));
    		// echo $this->Form->label('địa chỉ');
            echo $this->Form->text('address',array('placeholder'=>'địa chỉ','class'=>'span3'));
            // echo $this->Form->label('điện thoại bàn');
            echo $this->Form->text('phone',array('placeholder'=>'điện thoại bàn','class'=>'span3'));
            // echo $this->Form->label('di động');
            echo $this->Form->text('mobile',array('placeholder'=>'di động','class'=>'span3'));
            echo $this->Form->text('taxID',array('placeholder'=>'mã số thuế','class'=>'span3'));
            echo $this->Form->text('accountBank',array('placeholder'=>'tài khoản ngân hàng','class'=>'span3'));
            echo $this->Form->text('bank',array('placeholder'=>'ngân hàng','class'=>'span3'));
            echo $this->Form->text('website',array('placeholder'=>'website','class'=>'span3'));
            echo $this->Form->text('nickYahoo',array('placeholder'=>'yahoo','class'=>'span3'));
            echo $this->Form->text('nickSkype',array('placeholder'=>'skype','class'=>'span3'));
            echo $this->Form->text('fax',array('placeholder'=>'fax','class'=>'span3'));
            echo '<br/>Khu Vực';
            echo $this->Form->select('idArea',$dataArea,array('class'=>'span2'));
            echo '<br/>';
            echo '</fieldset>';

            echo '<fieldset><legend>Nợ & Chiết Khấu</legend>';
            echo $this->Form->number('debtLimit',array('placeholder'=>'giới hạn nợ','class'=>'span3'));
            echo $this->Form->number('debtCurrent',array('placeholder'=>'nợ hiện tại','class'=>'span3'));
            echo $this->Form->number('discount',array('placeholder'=>'chiết khấu','class'=>'span3'));
            echo '</fieldset>';

            
            echo '<fieldset><legend>Loại Tài Khoản</legend>';
            echo $this->Form->checkbox('isCustomer',array('div'=>false));echo 'Khách Hàng';
            echo $this->Form->checkbox('isPartner');echo 'Đại Lý';
            echo $this->Form->checkbox('isEmployee');echo 'Nhân Viên';
            echo '</fieldset>';
            echo $this->Html->link('Quay Lại',array('controller'=>'users','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));
            
            echo $this->Form->end();

            	
?>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('input:checkbox:first').prop('checked', true);
    });
    

    $('input:checkbox').change(function(event) {
        $('input:checkbox:checked').not(this).prop('checked', false); 
    });


</script>