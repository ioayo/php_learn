<?php 

	function validateLogPass($username, $password) {
		if (strlen($username) > 3 && strlen($password)) {
			return true;
		} else {
			return false;
		}
	};

	function formHandlerCreate() {
			if(isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if (validateLogPass($username, $password)) {
				$connection = mysqli_connect("localhost", "root", "", "course_test");
				if ($connection) {
					
					$query = "INSERT INTO users(username, password)";
					$query .= "VALUES ('$username', '$password')";
					$result = mysqli_query($connection, $query);
					if(!$result) {
						die("query failed");
					};

				};
				mysqli_close($connection);
			} else {
				echo "cannot be vaildate";
			}
		}
	};

	function formHandlerRead() {
		$connection = mysqli_connect("localhost", "root", "", "course_test");
		if ($connection) {
			$query = "SELECT * FROM users";
			$result = mysqli_query($connection, $query);

			if(!$result) {
				die("query failed");
			};

			while ($row = mysqli_fetch_assoc($result)) {
				$string = $row['id'] . ' ' . $row['username'] . ' ' . $row['password'] . ' ';
				echo $string;
			};
		};
		mysqli_close($connection);
	};
?>