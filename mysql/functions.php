<?php include "db.php";?>
<?php 
	function showAllData() {
		global $connection;
		$query = "SELECT * FROM users";
		$result = mysqli_query($connection, $query);

		//check if query is done
		if(!$result) {
			die('Query FAILED');
		};

		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];

			echo "<option value=''>$id</option>";
		}
	}
	
?>