<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Aksi</th>
        </tr>
        
        <?php
        // Koneksi ke database
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "nama_database";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Query untuk mengambil data dari tabel
        $sql = "SELECT id, nama_barang FROM barang";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama_barang"] . "</td>";
                echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada data.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
