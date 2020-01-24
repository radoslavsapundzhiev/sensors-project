<h1>History of sensor reports</h1>

<table id="reports" style="border: 1px solid black">
	<thead>
		<th>ID</th>
		<th>VALUE</th>
		<th>TIMESTAMP</th>
	</thead>
	<tbody>
		<?php foreach ($reports as $report) : ?>
			<td><?php echo $report->id; ?></td>
			<td><?php echo $report->value; ?></td>
			<td><?php echo $report->timestamp; ?></td>
		<?php  endforeach; ?>
	</tbody>
</table>
<br>
<a class="btn btn-default" href="/sensors/view/<?php echo $sensor->id; ?>">Back</a>	