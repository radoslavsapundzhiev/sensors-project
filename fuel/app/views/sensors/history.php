<h1>History of sensor reports</h1>

<?php
	
	$id = $sensor->id;

	if(isset($_POST['ASC'])){

		$asc_query = "SELECT * FROM reports WHERE sensor_id = '$id' ORDER BY timestamp ASC";
		// $stm = $mysqli->prepare($asc_query);
		// $stm->bind_param('s', $sensor->id);
		// $result = $stm->execute();
		$result = executeQuery($asc_query);

	}elseif (isset($_POST['DESC'])) {

		$desc_query = "SELECT * FROM reports WHERE sensor_id = '$id' ORDER BY timestamp DESC";
		$result = executeQuery($desc_query);

	}else{
		$default_query = "SELECT * FROM reports WHERE sensor_id = '$id'";
		$result = executeQuery($default_query);
	}

	function executeQuery($query){
		$connect = mysqli_connect("sensors.com", "root", "Ris8805240142", "mysensors");
		$result = mysqli_query($connect, $query);
		return $result;
	} 
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