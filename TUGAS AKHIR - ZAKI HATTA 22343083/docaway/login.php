<?php
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:admin/index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - DocAway</title>


    <!-- LOGO -->
    <link
      rel="shortcut icon"
      href="images/logo_hijau_with_bg-removebg-preview.png"
      type="image/x-icon"
    />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap');
		* {
			padding:0;
			margin:0;
		}
		body {
			font-family: 'Nunito Sans', sans-serif;
			background-color: #F9F1F0;
		}
		a {
			color: inherit;
			text-decoration: none;
		}
		.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.card-login {
  background-color: #ffffff;
  width: 400px;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.card-login h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333333;
}

.input-control {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #cccccc;
  border-radius: 5px;
  font-size: 16px;
}

.btn {
  width: 100%;
  padding: 10px;
  background-color: #42855b;
  color: #ffffff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: #344D67;
}

	</style>
</head>
<body>

	<!-- login -->
	<div class="container">
		<div class="card-login">
			
			<h2>Login</h2>
			<form action="" method="post">
				<input type="text" name="user" placeholder="Username" class="input-control">
				<input type="password" name="pass" placeholder="Password" class="input-control">
				<button type="submit" name="login" class="btn">Login</button>
			</form>

			<?php

				// cek jika tombol login di tekan
				if(isset($_POST['login'])){

					include 'koneksi.php';

					// cek data login
					$query_select = 'select * from users
					where username = "'.mysqli_real_escape_string($conn, $_POST['user']).'"
					and password = "'.mysqli_real_escape_string($conn, md5($_POST['pass'])).'" ';

					$run_query_select = mysqli_query($conn, $query_select);
					$d = mysqli_fetch_object($run_query_select);

					if($d){
						
						// buat session
						$_SESSION['uid'] 	= $d->iduser;
						$_SESSION['uname'] 	= $d->namalengkap;

						header('location:admin/index.php');

					}else{
						echo 'Username atau password salah';
					}

				}
			?>
		</div>
	</div>
</body>
</html>