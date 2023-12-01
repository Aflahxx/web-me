<style>
    body {
        background-image: url("cod11.jpg");
        background-repeat: no-repeat;
        background-size: 100%; /* Anda dapat mengatur persentase yang sesuai */
    }
    
						
   
                        /* Add some basic styling to the table */
                        table {
                          border-collapse: collapse;
                          width: 100%;
                          border: 1px solid #ccc;
                        }
                      
                        th, td {
                          border: 1px solid #000;
                          padding: 8px;
                          text-align: left;
                        }
                      
                        th {
                          background-color: #d3d3d3;
                        }
                      
                        tr:nth-child(even) {
                          background-color: #d3d3d3;
                        }
                      
                        tr:hover {
                          background-color: #d3d3d3;
                        }
                    
</style>


<style>
        /* Styling navbar */
        .navbar {
            background-color: #333; /* Warna latar belakang navbar */
            overflow: hidden;
        }

        /* Styling tautan navbar */
        .navbar a {
            float: left; /* Membuat tautan berada di sebelah kiri */
            display: block; /* Membuat tautan berada dalam satu blok */
            color: white; /* Warna teks tautan */
            text-align: center; /* Pusatkan teks tautan */
            padding: 14px 16px; /* Ruang antara teks dan pinggiran navbar */
            text-decoration: none; /* Hilangkan dekorasi tautan (underline) */
        }

        /* Efek hover saat kursor di atas tautan */
        .navbar a:hover {
            background-color: #ddd; /* Warna latar belakang saat hover */
            color: black; /* Warna teks saat hover */
        }
    </style>
</head>
<body>

<div class="navbar">
    <?php
    // Daftar tautan navbar
    $navbarLinks = [
        "Beranda" => "dashbord.php",
        "Tips" => "tutor.php",
        "Kontak" => "kontak.php"
    ];

    // Loop melalui tautan dan tampilkan dalam navbar
    foreach ($navbarLinks as $label => $url) {
        echo "<a href=\"$url\">$label</a>";
    }
    ?>
</div>

<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			
		    <th>NO</th>
			<th>ALAMAT</th>
			<th>OPSI</th>

		</tr>
		<?php 
		include 'koneksii.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from daerah");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			    <td><?php echo $no++; ?></td>
				<td><?php echo $d['alamat']; ?></td>
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