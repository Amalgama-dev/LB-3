<!DOCTYPE html>
<html>
<head>
	<title>LR 3</title>
</head>
<body>
	<div class="main">
		<div class="get1">
			<h4>Запрос №1</h4>
			<form action="get1.php" method="get">
				<label for="client_id">Виберіть клієнта:</label>
				<select name="client_id" id="client_id">
					<?php
						include('connect.php');
						try {
							$stmt = $dbh->query("SELECT id_client, name FROM client");
							$res = $stmt->fetchAll();

							foreach($res as $row)
							{
								echo "<option value='$row[0]'>$row[1]</option>";
							}
						}
						catch(PDOException $ex) {
							echo $ex->GetMessage();
						}

						$dbh = null;
					?>
				</select>
				<input class="btn" type="submit" value="Отримати дані">
			</form>
		</div>
		<div class="get2">
			<h4>Запрос №2</h4>
			<form action="get2.php" method="get">
				<label for="start_time">Початок сеансу:</label>
				<input type="text" placeholder="09:20:00" name="start_time" id="start_time">
				<label for="end_time">Кінець сеансу:</label>
				<input type="text" placeholder="20:20:20" name="end_time" id="end_time">
				<input class="btn" type="submit" value="Отримати дані">
			</form>
		</div>
		<div class="get3">
			<h4>Запрос №3</h4>
			<form action="get3.php" method="get">
				<input class="btn" type="submit" value="Отримати дані аккаунтів з мінусовим балансом">
			</form>
		</div>
	</div>
</body>
</html>
