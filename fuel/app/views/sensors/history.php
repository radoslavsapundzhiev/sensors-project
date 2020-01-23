<h1>History of sensor reports</h1>

<?php foreach ($reports as $report) : ?>

	<div>
		<h2><?php echo $report->value; ?></h2>
		<br>
		<h2><?php echo $report->timestamp; ?></h2>
		<br>
	</div>

<?php  endforeach; ?>

<a class="btn btn-default" href="/sensors/view/<?php echo $sensor->id; ?>">Back</a>	