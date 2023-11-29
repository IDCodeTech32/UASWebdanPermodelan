<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styletabel.css">
    <title>JSNForm</title>
</head>
<body>

    <!-- Header -->    
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <h1>JSNForm</h1>
    </header>
    

    <!-- Sidebar -->
    <div class="container">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="index.php">Homepage</a></li>
                    <li><a href="form.php">Form</a></li>
                    <li><a href="tabel.php">Tabel</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Body -->
        <main class="main">
            <section>
                <h2>Tabel</h2>
                <table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Password</th>
            <th>Jekel</th>
            <th>TglLahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>NIM</th>

        </tr>
    </thead>
    <tbody>
        <?php
        
        include "koneksi.php";


        if ($koneksi->connect_error) {
            die("Connection failed: " . $koneksi->connect_error);
        }

        $sql = "SELECT Nama, Jurusan, Email, Password, Jekel, TglLahir, Alamat, NIM FROM mahasiswa";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["Nama"]."</td>";
                echo "<td>".$row["Jurusan"]."</td>";
                echo "<td>".$row["Email"]."</td>";
                echo "<td>".$row["Password"]."</td>";
                echo "<td>".$row["Jekel"]."</td>";
                echo "<td>".$row["TglLahir"]."</td>";
                echo "<td class='age'></td>";
                echo "<td>".$row["Alamat"]."</td>";
                echo "<td>".$row["NIM"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }

        $koneksi->close();
        ?>
    </tbody>
</table>
            </section>
        </main>

    </div>

    <!-- Footernya -->
    <footer>
        <p>&copy; 2023 JSNForm. All rights reserved.</p>
    </footer>


    <!--Java Scriptnya -->
    <script>

    // JavaScript kalkulasi tanggal lahir
    document.addEventListener("DOMContentLoaded", function() {
        var rows = document.querySelectorAll("tbody tr");

        rows.forEach(function(row) {
            var birthDate = new Date(row.cells[5].textContent);
            var age = calculateAge(birthDate);
            row.querySelector(".age").textContent = age;
        });

        function calculateAge(birthDate) {
            var currentDate = new Date();
            var age = currentDate.getFullYear() - birthDate.getFullYear();

            
            if (
                currentDate.getMonth() < birthDate.getMonth() ||
                (currentDate.getMonth() === birthDate.getMonth() && currentDate.getDate() < birthDate.getDate())
            ) {
                age--;
            }

            return age;
        }
    });
</script>
    
</body>
</html>
