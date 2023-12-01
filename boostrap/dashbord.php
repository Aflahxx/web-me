<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        background-image: url("cod11.jpg");
        background-repeat: no-repeat;
        background-size: 100%; /* Anda dapat mengatur persentase yang sesuai */
    }
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>WebPendaftaran</title>
</head>
<body>
		<!-- SIDEBAR -->
		<section id="sidebar">
			<a href="#" class="brand">
				<i class='bx bxs-smile'></i>
				<span class="text">WebPendaftaran</span>
			</a>
			<ul class="side-menu top">
				<li class="active">
					<a href="index.html">
						<i class='bx bxs-dashboard' ></i>
						<span class="text">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="tambah.php">
						<i class='bx bxs-doughnut-chart' ></i>
						<span class="text">Tambah Data</span>
					</a>
				</li>
					<li>
					<a href="tutor.php">
						<i class='bx bxs-caret-right-circle' ></i>
						<span class="text">Tutorial</span>
					</a>
				</li>
				</li>
			</ul>
			<ul class="side-menu">
				<li>
					<a href="kontak.php">
						<i class='bx bxs-cog' ></i>
						<span class="text">Settings</span>
					</a>
				</li>
				<li>
					<a href="daerah.php">
						<i class='bx bxs-home' ></i>
						<span class="text">Daerah</span>
					</a>
				</li>
				<li>
					<a href="login.php" class="logout">
						<i class='bx bxs-log-out-circle' ></i>
						<span class="text">Logout</span>
					</a>
				</li>
				
			</ul>
		</section>
		<!-- SIDEBAR -->
	
	
	
		<!-- CONTENT -->
		<section id="content">
			<!-- NAVBAR -->
			<nav>
				<input type="checkbox" id="switch-mode" hidden>
				<label for="switch-mode" class="switch-mode"></label>
				<a href="#" class="notification">
					<i class='bx bxs-bell' ></i>
					<span class="num">8</span>
				</a>
				<a href="#" class="profile">
					<img src="img/1.jpg">
				</a>
			</nav>
			<!-- NAVBAR -->
	
			<!-- MAIN -->
			<main>
				<div class="head-title">
					<div class="left">
						<h1>Dashboard</h1>
						<ul class="breadcrumb">
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li><i class='bx bx-chevron-right' ></i></li>
							<li>
								<a class="active" href="jadwal.php">Team</a>
							</li>
							
						</ul>
				</div>
				<h2></h2>

	<body>		
		<style>
						
   
   /* Add some basic styling to the table */
   table {
	 border-collapse: collapse;
	 width: 100%;
	 border: 1px solid #ccc;
   }
 
   th, td {
	 border: 1px solid #ccc;
	 padding: 8px;
	 text-align: left;
   }
 
   th {
	 background-color: #808080;
   }
 
   tr:nth-child(even) {
	 background-color: #d3d3d3;
   }
 
   tr:hover {
	 background-color: #ddd;
   }
 </style>

	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			
		    <th>NO</th>
			<th>NAMA TIM</th>
			<th>NAMA PEMAIN</th>
			<th>DAERAH</th>
			<th>TANGGAL</th>
			<th>OPSI</th>

		</tr>
		<?php 
		include 'koneksii.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from terdaftar");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			    <td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_tim']; ?></td>
				<td><?php echo $d['nama_pemain']; ?></td>
				<td><?php echo $d['daerah']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td>
					<a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('apakah kamu mau hapus data?')"><i class="bx bx-trash"></i></a>
					<a href="edit.php?id=<?php echo $d['id']; ?>"  onclick="return confirm('apakah kamu mau edit data?')"><i class="bx bx-pencil"></i></a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>


			</body>
			</html>