<h1>History of sensor reports</h1>
	<a class="btn btn-default" href="/sensors/history/<?php echo $sensor->id; ?>?order=Asc">Sort by date Asc</a>
	<br><br>
	<a class="btn btn-default" href="/sensors/history/<?php echo $sensor->id; ?>?order=Desc">Sort by date Desc</a>
	<br><br>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>VALUE</th>
				<th>TIMESTAMP</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($reports as $report) : ?>
				<tr>
					<td><?php echo $report->id; ?></td>
					<td><?php echo $report->value; ?></td>
					<td>
						<?php 
							$datetime = DateTime::createFromFormat("Y-m-d H:i:s", $report->timestamp); 
							echo $datetime->format('d/m/yy, H:i:s'); 
						?>
					</td>
				</tr>
			<?php  endforeach; ?>
		</tbody>
	</table>
<br>
<a class="btn btn-default" href="/sensors/view/<?php echo $sensor->id; ?>">Back</a>	