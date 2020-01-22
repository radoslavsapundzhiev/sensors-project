<h1>List of sensors</h1>

<?php foreach ($sensors as $sensor) : ?>

	<div>
		<h2><?php echo $sensor->name; ?></h2>
		<br>
		<a class="btn btn-default" href="/sensors/view/<?php echo $sensor->id; ?>">Details</a>
	</div>

<?php  endforeach; ?>	
