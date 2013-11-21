
<?php 
			
			echo $this->Form->create('User', array('controller'=>'users','action' => 'login','method'=>'post','class'=>'form-vertical no-padding no-margin'));
			echo '<div class="lock"><i class="icon-lock"></i></div>';
			echo '<div class="control-wrap">
				<h4>ĐĂNG NHẬP</h4>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-user"></i>
							</span>'.
							 $this->Form->text('username',array('placeholder'=>'tên đăng nhập')).
						'</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-key"></i>
							</span>'
							.$this->Form->password('pword',array('placeholder'=>'mật khẩu','id'=>'input-password')).
						'</div>
						<!--<div class="mtop10">
							<div class="block-hint pull-left small">
								<input type="checkbox" id=""> Remember Me 
							</div>
							<div class="block-hint pull-right">
								<a href="javascript:;" class="" id="forget-password">Forgot Password?</a>
							</div>
						</div>-->
						 <div class="clearfix space5"></div>
					</div>
				</div>
			</div>';

			// echo '<h2 class="form-signin-heading">Đăng Nhập</h2>';
    		
    		// <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Login">
    		echo $this->Form->submit('Đăng Nhập',array('div'=>false,'id'=>'login-btn','class'=>'btn btn-block login-btn'));
    		
    		echo $this->Form->end();
?>