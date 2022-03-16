<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>

		<?php
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "newdb";
			
			
			try {
				$db = new PDO("mysql:host=$servername; dbname=$dbname; charset=utf8", $username, $password);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo "Connection failed: " . $e->getMessage();
				
			}
		?>
		
		<h1>test</h1>
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
			Name: <input type="text" name="name" value=""><br>
			GebDat: <input type="text" name="gebdat" value=""><br>
			Tabelle:
			<select name="tables[]" id="tables">
				<option value="user">user</option>
				<option value="sacrifice">sacrifice</option>
			</select>
			<input type="submit" name="submit" value="submit">
			<input type="submit" name="fetch" value="fetch">
		</form>
		
		
		<?php
		
			if (isset($_POST['submit'])) {
				$count = 0;
				if ($_POST['name'] == null) {
					$count = 1;
				}
				
				$name = $_POST['name'];
				$gebdat = $_POST['gebdat'];
				
				$sql = "INSERT INTO user (u_name, u_gebdat) VALUES (:name, :gebdat)";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
				$stmt->bindParam(':gebdat', $_POST['gebdat'], PDO::PARAM_STR);
				$stmt->execute();
			}
			
			if (isset($_POST['fetch'])) {
				$count = 0;
				if ($_POST['name'] == null) {
					$count = 1;
				}
				
				$sql = "SELECT * FROM user";
				$stmt = $db->prepare($sql);
				$stmt->execute();
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					echo "{$row['u_id']} {$row['u_name']} {$row['u_gebdat']}<br>";
				}
				foreach ($_POST['tables'] as $key) {
					echo $key;
				}
			}
			
		?>
		
	</body>
</html>