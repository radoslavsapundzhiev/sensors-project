<h1>History of sensor reports</h1>

<?php
	
	$id = $sensor->id;
	$mysqli = new mysqli("sensors.com", "root", "Ris8805240142", "mysensors");

	if(isset($_POST['ASC'])){

		$query = "SELECT * FROM reports WHERE sensor_id = ? ORDER BY timestamp ASC";
	
	}elseif (isset($_POST['DESC'])) {

		$query = "SELECT * FROM reports WHERE sensor_id = ? ORDER BY timestamp DESC";

	}else{

		$query = "SELECT * FROM reports WHERE sensor_id = ?";
	}

	$stm = $mysqli->prepare($query);
	$stm->bind_param("s", $sensor->id);
	$stm->execute();
	$result = $stm->get_result(); 
?>

<form method="POST">
	<input type="submit" name="ASC" value="Sort by date Asc"><br><br>
	<input type="submit" name="DESC" value="Sort by date Desc"><br><br>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>VALUE</th>
				<th>TIMESTAMP</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_array($result)) : ?>
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
				</tr>
			<?php  endwhile; ?>
		</tbody>
	</table>
</form>
<br>
<a class="btn btn-default" href="/sensors/view/<?php echo $sensor->id; ?>">Back</a>	