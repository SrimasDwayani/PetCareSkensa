<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin C3</title>
	<link rel="stylesheet" href="text/css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			list-style: none;
			text-decoration: none;
		}
		body{
        background: url('admin.png');
		}
		.wrapper{
			display: flex;
			position: relative;
		}
		.wrapper .sidebar{
			position: fixed;
			width: 200px;
			height: 100%;
			background: #00999f;
			padding: 30px 0;
		}
		.wrapper .sidebar h2{
			color: #fff;
			text-transform: uppercase;
			text-align: center;
			margin-bottom: 30px;
		}
		.wrapper .sidebar ul li{
			padding: 15px;
			border-bottom: 1px solid #00999f;
			border-top: 1px;
			
		}
		.wrapper .sidebar ul li a{
			color: #fff;
			display: block;
		}
		.wrapper .sidebar ul li a .fas{
			width: 25px;
		}
		.wrapper .sidebar ul li:hover{
			background: #a6f77b;
		}
		.wrapper .sidebar ul li:hover a{
			color: #fff;
		}
		.wrapper .main_content{
			width: 100%;
			margin-left: 200px;
			font-family: "Raleway SemiBold", sans-serif;
			color: white;
		}
		.wrapper .main_content .header{
			padding: 20px;
			background: #fff;
			color: #717171;
			border-bottom: 1px solid #e0e4e8;
		}
		        #submit-btn {
            background: #00999f;;
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 40px;
            transition: 0.25s;
            width: 153px;
            
        }
        #submit-btn:hover {
            box-shadow: 0px 1px 18px #24c64f;
            
        }
	</style>
</head>
<body>

<div class="wrapper">
	<div class="sidebar">
		<h2>Admin</h2>
		<ul>
			<li><a href="1.php"><i class="fas fa-home"></i>Dashboard</a></li>
			<li><a href="4.php"><i class="fas fa-user"></i>Data User</a></li>
			<li><a href="5.php"><i class="fas fa-users"></i>Data Petugas</a></li>
			<li><a href="3.php"><i class="fas fa-book"></i>Pengaduan</a></li>
			<li><a href="2.php"><i class="fas fa-cog"></i>Setting</a></li>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
		</ul>
	</div>
	<div class="main_content">
		<div class="info">
			<div><BR><BR><BR><BR><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<center><p style="font-size: 50px;">Selamat Datang Di Halaman Admin!</p></center>
				 <center><input id="submit-btn" type="submit" name="login" value="Mulai"></center>
			</div>
		</div>
	</div>
</div>

</body>
</html>