 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           CẬP NHẬT TÀI KHOẢN
        </div>
    </div>

    

    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li class="active"><?php echo $this->Html->link('Thêm một loại kho mới',array('controller'=>'typestocks','action'=>'add')) ?></li>
            </ul>
        </div>
    </div>
<div class="span8">
<?php 
    echo $this->Form->create('User', array('action' => 'edit','class' => 'form-horizontal'));
    //echo $this->Form->text('idUser',array('hiddenField' => true)); 
	// echo $this->Form->label('tên đăng nhập');
    		echo $this->Form->text('username',array('placeholder'=>'tên đăng nhập'));
    		// echo $this->Form->label('mật khẩu');
    		echo $this->Form->text('pword',array('placeholder'=>'mật khẩu'));
    		// echo $this->Form->label('tên');
    		echo $this->Form->text('name',array('placeholder'=>'tên'));
    		// echo $this->Form->label('địa chỉ');
            echo $this->Form->text('address',array('placeholder'=>'địa chỉ'));
            // echo $this->Form->label('điện thoại bàn');
            echo $this->Form->text('phone',array('placeholder'=>'điện thoại bàn'));
            // echo $this->Form->label('di động');
            echo $this->Form->text('mobile',array('placeholder'=>'di động'));
            echo $this->Form->text('taxID',array('placeholder'=>'mã số thuế'));
            echo $this->Form->text('accountBank',array('placeholder'=>'tài khoản ngân hàng'));
            echo $this->Form->text('bank',array('placeholder'=>'ngân hàng'));
            echo $this->Form->text('website',array('placeholder'=>'website'));
            echo $this->Form->text('nickYahoo',array('placeholder'=>'yahoo'));
            echo $this->Form->text('nickSkype',array('placeholder'=>'skype'));
            echo $this->Form->text('fax',array('placeholder'=>'fax'));
            echo '<br/>';

            echo $this->Form->number('debtLimit',array('placeholder'=>'giới hạn nợ'));
            echo $this->Form->number('debtCurrent',array('placeholder'=>'nợ hiện tại'));
            echo $this->Form->number('discount',array('placeholder'=>'chiết khấu'));
            echo '<br/>';
            echo $this->Form->checkbox('isCustomer');echo 'Khách Hàng';
            echo $this->Form->checkbox('isPartner');echo 'Đại Lý';
            echo $this->Form->checkbox('isEmployee');echo 'Nhân Viên';
             
            echo $this->Form->label('khu vực');
            echo $this->Form->select('idArea',$dataArea,array('class'=>'span2'));
            // echo $this->Form->text('image_name');
            echo $this->Form->end('Submit');	
?>
</div>
</div>