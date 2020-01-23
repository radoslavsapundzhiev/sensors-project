<h1>Detail Page</h1>

<div>
	<h2>Name: <?php echo $sensor->name; ?></h2>
	<br>
	<h2>Unit: <?php echo $sensor->unit; ?></h2>
	<br>
	<br>
	<br>
	<a class="btn btn-default" href="/sensors/edit/<?php echo $sensor->id; ?>">Edit Sensor</a>
	<br><br>
	<a class="btn btn-danger" href="/sensors/delete/<?php echo $sensor->id; ?>">Delete Sensor</a>
	<br><br>
	<a class="btn btn-default" href="/sensors/history/<?php echo $sensor->id; ?>">History of Reports</a>
	<br><br>
	<a class="btn btn-default" href="/sensors/report/<?php echo $sensor->id; ?>">Send Report</a>
	<br><br>
	<a class="btn btn-default" href="/sensors/">Back</a>
	<br>
</div>