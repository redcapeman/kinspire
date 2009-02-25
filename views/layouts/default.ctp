<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('kĭn-spīr\' - Development Project Management System:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('kinspire.default.css');
		echo $scripts_for_layout;
	?>
	<script>
	function backButtonOverride()
	{
	  // Work around a Safari bug
	  // that sometimes produces a blank page
	  setTimeout("backButtonOverrideBody()", 1);
	
	}
	
	function backButtonOverrideBody()
	{
	  // Works if we backed up to get here
	  try {
	    history.forward();
	  } catch (e) {
	    // OK to ignore
	  }
	  // Every quarter-second, try again. The only
	  // guaranteed method for Opera, Firefox,
	  // and Safari, which don't always call
	  // onLoad but *do* resume any timers when
	  // returning to a page
	  setTimeout("backButtonOverrideBody()", 250);
	}
	</script>
</head>
<body onLoad="backButtonOverride()">

<div id="wrapper">

<!-- banner -->

<?php echo $this->element('cboxtop'); ?>
	<?php echo $html->image('logo-transp.gif'); ?>
<?php echo $this->element('cboxbottom'); ?>
<div class="reset"></div>

<?php if ($session->read('Auth.User.id')) : ?>
	<!-- toolbar goes here -->
	<div align="center">
		<?php echo $this->element('toolbar'); ?>
	</div>
<?php endif; ?>

<!-- divider -->

<div class="divider"></div>

<?php if($session->check('Message.flash')): ?>
	<?php echo $this->element('cboxtop'); ?>
		<div align="center"><h4><font color="red">
			<?php
				if ($session->check('Message.flash')) {
					$session->flash();
				}
			?>
		</font></h4></div>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>

<div id="main">
	<?php echo $this->element('user_left_navigation'); ?>
	<div id="content_wrapper">
		<?php if(isset($this->pageTitle)): ?>
			<?php echo $this->element('yboxtop'); ?>
				<?php echo $this->pageTitle; ?>
			<?php echo $this->element('yboxbottom'); ?>
		<?php endif; ?>
		<?php echo $content_for_layout;?>
	</div>
	<div class="reset"></div>
</div>

<!-- divider + reset -->

<div class="divider reset"></div>

<div id="footer" class="cbox">
	<div class="cboxtop"><div class="cboxtopinner"></div></div>
	<div class="cboxinner">
		<div align="center">kInspire Copyright &copy; 2009 <a href="mailto:travis.rowland@gmail.com" target="blank">Exquisite Software LLC</a> | 
		Design and Code Copyright &copy; 2009 <a href="mailto:travis.rowland@gmail.com" target="blank">Exquisite Software LLC</a><br>
		<?php echo $html->image('apache.gif'); ?> <?php echo $html->image('cake.gif'); ?> <?php echo $html->image('mysql.gif'); ?> <?php echo $html->image('php.gif'); ?></div>
	</div><div class="cboxbottom">
	<div class="cboxbottominner"></div></div>
</div>


<!-- end wrapper -->
</div>
</body>
</html>