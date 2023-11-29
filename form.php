<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styleform.css">
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
                    <li><a href="">Form</a></li>
                    <li><a href="tabel.php">Tabel</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Body -->
        <main class="main">
            <section>
                <h2>Form Page</h2>
                
                <div>
                    <form action = "" method="GET">

                        <p>Nama:</p>
                        <input type = "text" name = "Nama" required>

                        <p>Jurusan:</p>
                        <input type = "text" name = "Jurusan" required>

                        <p>Email:</p>
                        <input type = "email" name = "Email" required>

                        <p>Password:</p>
                        <input type = "password" name = "Password" required>

                        <p>Jenis Kelamin:</p>
                        <input type = "text" name = "Jekel" required>

                        <p>Tanggal Lahir:</p>
                        <input type = "date" name = "TglLahir"required>

                        <p>Alamat:</p>
                        <input type = "text" name = "Alamat">

                        <p>NIM:</p>
                        <input type = "text" name = "NIM" required>


                        <button value="simpan" name= "proses"> Submit </button>
                    </form>
                </div>
                <?php

                    include "koneksi.php";

                    if (isset ($_GET['proses'])){
                        mysqli_query($koneksi, "insert into mahasiswa set
                        Nama = '$_GET[Nama]',
                        Jurusan = '$_GET[Jurusan]',
                        Email = '$_GET[Email]',
                        Jekel = '$_GET[Jekel]',
                        Password = '$_GET[Password]',
                        TglLahir = '$_GET[TglLahir]', 
                        NIM = '$_GET[NIM]',
                        Alamat = '$_GET[Alamat]' ");

                        // Redirect ke tabel nya langsung
                    header("Location: tabel.php");
                    exit();
                    }
                ?>

            </section>
        </main>

    </div>

    <!-- Footernya -->
    <footer>
        <p>&copy; 2023 JSNForm. All rights reserved.</p>
    </footer>

    
</body>
</html>
