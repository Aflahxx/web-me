<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <div>
        <h2>Data Tim</h2>
        <br/>
        <a href="tambah.php">+ TAMBAH DATA</a>
        <br/>
        <br/>
        <table border="1">
            <tr>
                
                <th>id</th>
                <th>nama_tim</th>
                <th>tanggal</th>                
                
                
            </tr>
            <?php 
            include 'koneksii.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from jadwal");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                   
                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['nama_tim']; ?></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    
                    
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </table>


    </div>
</body>
</html>