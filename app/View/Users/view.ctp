<?php
foreach ($dataUser as $valueUser) {
    echo '<div class="row-fluid"><div class="span12">
    <div class="well" style="text-align:center;font-size:30px">Thông Tin Của '.$valueUser['users']['username'].'</div></div>';
    
     echo '<div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li>'.$this->Html->link('Thêm người dùng mới',array('controller'=>'users','action'=>'add')).'</li>
              <li>'.$this->Html->link('Quay lại',array('controller'=>'users','action'=>'index')).'</li>
            </ul>
        </div>
    </div>';
    echo ' <div class="span8"><div class="well">';
		echo '<br/><span class="label label-inverse">Tên Đăng Nhập</span>  '.'<span class="label label-info">'.$valueUser['users']['username'].'</span>';

		echo '<br/><span class="label label-inverse">Mật Khẩu</span>  '.'<span class="label label-info hide_password">******</span>'.'<span class="label label-info is_password">'.$valueUser['users']['pword'].'</span>'.'<span id="show_password" style="margin-left:10px;" class="label label-important">'.'<i class="icon-eye-open"></i>'.'</span>';
        
        echo '<br/><span class="label label-inverse">Họ Tên</span>  '.'<span class="label label-info">'.$valueUser['users']['name'].'</span>';

        echo '<br/><span class="label label-inverse">Địa Chỉ</span>  '.'<span class="label label-info">'.$valueUser['users']['address'].'</span>';

        echo '<br/><span class="label label-inverse">Điện Thoại Bàn</span>  '.'<span class="label label-info">'.$valueUser['users']['phone'].'</span>';
       
        echo '<br/><span class="label label-inverse">Di Động</span>  '.'<span class="label label-info">'.$valueUser['users']['mobile'].'</span>';
       
       echo '<br/><span class="label label-inverse">Khu Vực</span>  '.'<span class="label label-info">'.$valueUser['areas']['nameArea'].'</span>';

       echo '<br/><span class="label label-inverse">Mã Số Thuế</span>  '.'<span class="label label-info">'.$valueUser['users']['taxID'].'</span>';

 		echo '<br/><span class="label label-inverse">Di Động</span>  '.'<span class="label label-info">'.$valueUser['users']['mobile'].'</span>';

 		echo '<br/><span class="label label-inverse">Tài Khoản Ngân Hàng</span>  '.'<span class="label label-info">'.$valueUser['users']['accountBank'].'</span>';

 		echo '<br/><span class="label label-inverse">Ngân Hàng</span>  '.'<span class="label label-info">'.$valueUser['users']['bank'].'</span>';

 		echo '<br/><span class="label label-inverse">Website</span>  '.'<span class="label label-info">'.$valueUser['users']['website'].'</span>';
    
  		echo '<br/><span class="label label-inverse">Giới Hạn Nợ</span>  '.'<span class="label label-info">'.$valueUser['users']['debtLimit'].'</span>';

  		echo '<br/><span class="label label-inverse">Nợ Hiện Tại</span>  '.'<span class="label label-info">'.$valueUser['users']['debtCurrent'].'</span>';
     	
     	echo '<br/><span class="label label-inverse">Chiết Khấu</span>  '.'<span class="label label-info">'.$valueUser['users']['discount'].'%</span>';
     	echo '<br/><span class="label label-inverse">Fax</span>  '.'<span class="label label-info">'.$valueUser['users']['fax'].'</span>';
     	echo '<br/><span class="label label-inverse">Nick Yahoo</span>  '.'<span class="label label-info">'.$valueUser['users']['nickYahoo'].'</span>';
     	echo '<br/><span class="label label-inverse">Nick Skype</span>  '.'<span class="label label-info">'.$valueUser['users']['nickSkype'].'</span>';


     		if($valueUser['users']['isCustomer']==true){
     			echo '<br/><span class="label label-inverse">Loại Tài Khoản</span>  '.'<span class="label label-info">Khách Hàng</span>';
     		}
     		else{
     			if($valueUser['users']['isPartner']==true){
     				echo '<br/><span class="label label-inverse">Loại Tài Khoản</span>  '.'<span class="label label-info">Đại Lý</span>';
     			}
     			else{
     				if($valueUser['users']['isEmployee']==true){
     				echo '<br/><span class="label label-inverse">Loại Tài Khoản</span>  '.'<span class="label label-info">Nhân Viên</span>';
     				}
     			}
     		}
            echo '</div></div>';
}
?>
<script type="text/javascript">
    $('#show_password').hover(function() {
        /* Stuff to do when the mouse enters the element */
         $('.hide_password').hide('fast');
         $('.is_password').show('fast');
    }, function() {
        $('.hide_password').show('fast');
         $('.is_password').hide('fast');
    });
</script>