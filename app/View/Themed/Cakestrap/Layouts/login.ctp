<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Quản Lý
	</title>
	<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('font-awesome');
			echo $this->Html->css('style.min');
			echo $this->Html->css('style_responsive');
			echo $this->Html->css('style_default');

			echo $this->fetch('css');
			
			echo $this->Html->script('jquery-1.8.3.min');
			echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->fetch('script');
		?>
</head>
<body id="login-body">
	<div class="login-header">
		<div id="logo" class="center">
			<img src="<?php echo $this->webroot; ?>img/logo.png" alt="logo" class="center">
		</div>
	</div>
	<?php echo $this->Session->flash(); ?>
	<div id="login">
		

		<?php echo $this->fetch('content'); ?> 
	
	</div>
	<!-- <div id="container"> -->

<!-- 		<div id="content" class="container"> -->

			

		<!-- </div> -->
		<!-- <div id="footer"> -->
			
		<!-- </div> -->
	<!-- </div> -->

<?php echo $this->Html->script('jquery.blockui');?>
<?php echo $this->Html->script('scripts');?>
<?php echo $this->fetch('script');?>

</body>
</html>
