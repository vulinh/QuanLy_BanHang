
<?php 
			
			echo $this->Form->create('User', array('controller'=>'users','action' => 'login','method'=>'post','class'=>'form-signin'));
			echo '<h2 class="form-signin-heading">Đăng Nhập</h2>';
    		echo $this->Form->text('username',array('placeholder'=>'tên đăng nhập'));
    	
    		echo $this->Form->password('pword',array('placeholder'=>'mật khẩu'));
    		echo $this->Form->end('Submit');
?>