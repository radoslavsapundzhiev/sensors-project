
<?php if(Session::get_flash('success')) : ?>
	<div class="alert alert-success"><?php echo Session::get_flash('success'); ?></div>
<?php endif; ?>

<?php if(Session::get_flash('error')) : ?>
	<div class="alert alert-danger"><?php echo Session::get_flash('error'); ?></div>
<?php endif; ?>	

<h1>List of sensors</h1>

<?php foreach ($sensors as $sensor) : ?>

	<div>
		<h2><?php echo $sensor->name; ?></h2>
		<br>
		<a class="btn btn-default" href="/sensors/view/<?php echo $sensor->id; ?>">Details</a>
	</div>

<?php  endforeach; ?>	
