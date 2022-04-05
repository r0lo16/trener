<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trener</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/dashboard.css">
				<script>
			function op(obj) {
			x=document.getElementById(obj);
			if(x.style.display == "none") x.style.display = "block";
			else x.style.display = "none"
			}
		</script>
		
</head>
<body>
	
	<div class="dashboard"><div class="baner">
				<img src="logo.png"  alt="logo" srcset="">
				<h3 class="cen_dash">Dashboard</h3>
				<?php
	
			echo "<p class='trener'>Witaj trenerze: "."<b>".$_SESSION['user'].' </br></br>  <a href="logout.php" class="logout">Wyloguj się!</a> </p>';
	
	?></div>
	
		<div class="block1">
			<div>
			
			<div class="container">
				<div class="options">
					<div class="adduser"><a class="adduser1" href="/" onClick="op('poka'); return false;">Dodaj użytkownika</a>
						<div id="poka"><div class="adduser2">
						<form method="post" action="add_user_dashboard.php">
							Nick:<br>
							<input type="text" name="user">
							<br>
							Email:<br>
							<input type="email" name="email">
							<br>
							Imie:<br>
							<input type="text" name="imie">
							<br>
							Nazwisko:<br>
							<input type="text" name="nazwisko">
							<br><br>
							<input type="submit" name="save" value="DODAJ">
						</form></div></div></div>
					<div class="deletuser"><a class="deletuser1" href="/" onClick="op('poka1'); return false;">Usuń użytkownika</a>
						<div id="poka1"><div class="deletuser2">
						<table border=1 cellpadding=1 cellspacing=1>
								<tr>
									<th>User</th>
									<th>Email</th>
									<th>Nazwisko</th>
									<th>Akcja</th>
								</tr>
								<?php
								
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "trener1";
									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									  die("Connection failed: " . $conn->connect_error);
									}
									//wybor z tabeli
									$sql = "SELECT * FROM klienci ";
									$records = mysqli_query($conn,$sql);
									while($row = mysqli_fetch_array($records))
									{
										echo"<tr>";
										
										echo"<td>".$row['user']."</td>";
										echo"<td>".$row['email']."</td>";
										echo"<td>".$row['nazwisko']."</td>";
										echo"<td><a href=delete_user.php?id_klient=".$row['id_klient'].">DELET</a></td>";
										
									}
								?>

							</table></div></div>
					<div class="addworkout"><a  class="addworkout1" href="/" onClick="op('poka2'); return false;">Dodaj ćwiczenie</a>
						<div id="poka2" ><div class="addworkout2">
						<table border=1 cellpadding=1 cellspacing=1>
								<tr>
									<th>Dodaj Zdjecie</th>
									<th>Nazwa</th>
									<th>Opis</th>
									<th>Podzial</th>
									<th>Grupa</th>
									<th>Miejsce</th>
									<th>Akcja</th>
									
									
								</tr>
								<p class="text-center">Dodaj Ćwiczenie</p>

                			<form class="my-5" action="upload.php" method="post" enctype="multipart/form-data">
								<td><input type="file" name="image" class="form-control"></br></td>
								<td><input type="text" name="nazwa"></br></td>
								<td><textarea name="text"></textarea></br></td>
								<td>
									<select name="podzial">
										<option value="" disabled selected>Podział</option>
										<option value="Wielostowawe">Wielostowawe</option>
										<option value="Izolacyjne">Izolacyjne</option>
										
									</select>
								</br></td>
								<td>
									<select name="grupa">
										<option value="" disabled selected>Grupa Miesniowa</option>
										<option value="klatka">Klatka</option>
										<option value="barki">Barki</option>
										<option value="ramiona">Ramiona</option>
										<option value="brzuch">Brzuch</option>
										<option value="plecy">Plecy</option>
										<option value="nogi">Nogi</option>
									
									</select>
								</br></td>
								<td>
									<select name="miejsce">
										<option value="" disabled selected>Miejsce</option>
										<option value="HOME">HOME</option>
										<option value="GYM">GYM</option>
										<option value="OUTDOOR">OUTDOOR</option>
										
									
									</select>
								</br></td>
								<td><input type="submit" name="upload" value="UPLOAD" ></td>

               	 			</form>

						</table></div></div></div>
                
            	
           
            		
					<div class="deletworkout"><a class="deletworkout1" href="/" onClick="op('poka3'); return false;">Usuń ćwiczenie</a>
							<div id="poka3"><p class="text-center"><div class="deletworkout2">
								<div class="deletworkout2"><p>Ćwiczenia Dodane</p>
							<table border=1 cellpadding=1 cellspacing=1>
							<tr>
							<th>Zdjecie</th>
							<th>Nazwa</th>
							<th>Aklcja</th>								
							</tr>
							<?php
								
								$db = mysqli_connect("localhost","root","","trener1");
								$sql = "SELECT * FROM image";
								$result = mysqli_query($db,$sql);
								while($row = mysqli_fetch_array($result)){
									echo"<div id='img_div'>";
									echo"<tr>";
										echo"<td><img src='".$row['image']."' class='my-3' style='width:150px;height:100px;'></td>";
										echo "<td>".$row['nazwa']."</td>";
										echo"<td><a href=delet_zdjecie.php?id=".$row['id'].">DELET</a></td>";
								}
								

								?>
								

							</table></div></div></div></div>
					<div class="podgladwpis"><a class="podgladwpis1" href="/" onClick="op('poka4'); return false;">Podgląd wpisów</a>
						<div id="poka4"><div class="podgladwpis2">
							<table border=1 cellpadding=1 cellspacing=1>
								<tr>
									<th>ID</th>
									<th>Nick</th>
									<th>Tresc</th>
									<th>Data</th>
									<th>Akcja</th>
								</tr>
								<?php
								
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "trener1";
									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									  die("Connection failed: " . $conn->connect_error);
									}
									//wybor z tabeli
									$sql = "SELECT * FROM `opinie` ";
									$records = mysqli_query($conn,$sql);
									while($row = mysqli_fetch_array($records))
									{
										echo"<tr>";
										
										echo"<td>"."<h1>".$row['id']."</td>";
										echo"<td>"."<h5>".$row['nick']."</td>";
										echo"<td>"."<h7>".$row['tresc']."</td>";
										echo"<td>"."<h5>".$row['data']."</td>";
										echo"<td><a href=delete_tresc.php?id=".$row['id'].">Delete</a></td>";
										
									}
								?>

							</table></div></div></div>
					

				</div>
				</div>
            	</div>
				</div>
			</div>
	</div>
 
</body>
</html>






