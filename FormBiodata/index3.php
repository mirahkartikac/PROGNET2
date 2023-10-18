<?php 
    $host = "192.168.4.4";
    $user = "2205551048";
    $pass = "2205551048";
    $db = "db_2205551048";

    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error){
        die("Koneksi gagal: ").$conn->connect_error;
    }

    $email      = "";
    $nama       = "";
    $univ       = "";
    $fakultas   = "";
    $prodi      = "";
    $nim        = "";
    $tglLahir   = "";
    $hobi       = "";
    $agama      = "";
    $error      = "";
    $sukses     = "";

    if(isset($_GET['op'])){
        $op = $_GET['op'];
    }else{
        $op = "";
    }

    if($op == 'delete'){
        $id         = $_GET['id'];
        $sql       = "delete from biodata where id = '$id'";
        $q1         = mysqli_query($conn,$sql);
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil dihapus";
            $sukses = "Data berhasil dihapus";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $error = "Data gagal dihapus";
        }
    }

    if ($op == 'edit') {
        $id         = $_GET['id'];
        $sql1       = "select * from biodata where id = '$id'";
        $q1         = mysqli_query($conn, $sql1);
        $r1         = mysqli_fetch_array($q1);
        $email      = $r1['email'];
        $nama       = $r1['nama'];
        $univ       = $r1['univ'];
        $fakultas   = $r1['fakultas'];
        $prodi      = $r1['prodi'];
        $nim        = $r1['nim'];
        $tglLahir   = $r1['tglLahir'];
        $hobi       = $r1['hobi'];
        $agama      = $r1['agama'];
    
        if ($nim == '') {
            $error = "Data tidak ditemukan";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email      = $_POST['email'];
        $nama       = $_POST['nama'];
        $univ       = $_POST['univ'];
        $fakultas   = $_POST['fakultas'];
        $prodi      = $_POST['prodi'];
        $nim        = $_POST['nim'];
        $tglLahir   = $_POST['tglLahir'];
        $hobi       = $_POST['hobi'];
        $agama      = $_POST['agama'];
        
        if($op == 'edit'){
                $sql       = "update biodata set email = '$email', nama = '$nama', univ = '$univ', fakultas = '$fakultas', prodi = '$prodi', nim = '$nim', tglLahir = '$tglLahir', hobi = '$hobi', agama = '$agama' where id = '$id'";
                if ($conn->query($sql) === TRUE) {
                    echo "Data baru berhasil di-update";
                    $sukses = "Data baru berhasil di-update";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    $error = "Data baru gagal di-update";
                }
        }else{

            $sql = "INSERT INTO biodata (email, nama, univ, fakultas, prodi, nim, tglLahir, hobi, agama) VALUES ('$email', '$nama', '$univ', '$fakultas', '$prodi', '$nim', '$tglLahir', '$hobi', '$agama')";
        
            if ($conn->query($sql) === TRUE) {
                echo "Data baru berhasil ditambahkan";
                $sukses = "Data baru berhasil ditambahkan";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                $error = "Data baru gagal ditambahkan";
            }
        }

        // Query untuk menyimpan data ke database
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Database-connect</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('../img/iyah1.jpg');
            background-size: cover;
            font-family: 'Lora', serif;
        }
        .header{
            position: fixed;
            width: 100%;
            top: 0;
            background-image: url('../img/iyah1.jpg');
            background-size: cover;
            padding: 15px; 
            z-index: 1000;
        }
        .nav{
            padding-right: 15px;
        }
        .mx-auto{
            width: 1250px;   
        }
        .card{
            margin-top:10px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: black;
            color: white;
        }
        
        form {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="header d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom fs-5">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-2 text-black">Connect Database</span>
        </a>
    
        <ul class="nav nav-pills align-items-center">
        <li class="nav-item"><a href="../index.html" class="nav-link text-black" aria-current="page">Profile</a></li>
        <li class="nav-item"><a href="../Instagram/index.html" class="nav-link text-black">Instagram</a></li>
        <li class="nav-item"><a href="../Contact/index.html" class="nav-link text-black">Contact</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link active bg-black dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Projects
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-black" href="index.html">Tugas JavaScript</a></li>
              <li><a class="dropdown-item text-black" href="index.php">Tugas PHP</a></li>
            </ul>
          </li>
        </ul>
    </div>
    <br><br><br><br>
    
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                CREATE / EDIT DATA
            </div>
            <div class="card-body">
            <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    
                }
                ?>
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="univ" class="col-sm-2 col-form-label">Universitas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="univ" name="univ" value="<?php echo $univ ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fakultas" name="fakultas" value="<?php echo $fakultas ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <select name="prodi" id="prodi" class="form-control">
                                <option value="">--Pilih Prodi--</option>
                                <option value="Arsitektur" <?php if($prodi == "Arsitektur") echo "selected" ?>>Arsitektur</option>
                                <option value="Teknik Mesin" <?php if($prodi == "Teknik Mesin") echo "selected" ?>>Teknik Mesin</option>
                                <option value="Teknik Sipil" <?php if($prodi == "Teknik Sipil") echo "selected" ?>>Teknik Sipil</option>
                                <option value="Teknik Elektro" <?php if($prodi == "Teknik Elektro") echo "selected" ?>>Teknik Elektro</option>
                                <option value="Teknologi Informasi" <?php if($prodi == "Teknologi Informasi") echo "selected" ?>>Teknologi Informasi</option>
                                <option value="Teknik Lingkungan" <?php if($prodi == "Teknik Lingkungan") echo "selected" ?>>Teknik Lingkungan</option>
                                <option value="Teknik Industri" <?php if($prodi == "Teknik Industri") echo "selected" ?>>Teknik Industri</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>" required>
                        </div>
                    </div>  
                    <div class="mb-3 row">
                        <label for="tglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tglLahir" name="tglLahir" value="<?php echo $tglLahir ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                        <div class="col-sm-10">
                            <select name="hobi" id="hobi" class="form-control" required>
                                <option value="">--Pilih Hobi--</option>
                                <option value="Jurnalistik" <?php if($hobi == "Jurnalistik") echo "selected" ?>>Jurnalistik</option>
                                <option value="Menyanyi" <?php if($hobi == "Menyanyi") echo "selected" ?>>Menyanyi</option>
                                <option value="Menari" <?php if($hobi == "Menari") echo "selected" ?>>Menari</option>
                                <option value="Basket" <?php if($hobi == "Basket") echo "selected" ?>>Basket</option>
                                <option value="Futsal" <?php if($hobi == "Futsal") echo "selected" ?>>Futsal</option>
                                <option value="Membaca" <?php if($hobi == "Membaca") echo "selected" ?>>Membaca</option>
                                <option value="Musik" <?php if($hobi == "Musik") echo "selected" ?>>Musik</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select name="agama" id="agama" class="form-control" required>
                                <option value="">--Pilih Agama--</option>
                                <option value="Hindu" <?php if($agama == "Hindu") echo "selected" ?>>Hindu</option>
                                <option value="Kristen" <?php if($agama == "Kristen") echo "selected" ?>>Kristen</option>
                                <option value="Katolik" <?php if($agama == "Katolik") echo "selected" ?>>Katolik</option>
                                <option value="Buddha" <?php if($agama == "Buddha") echo "selected" ?>>Buddha</option>
                                <option value="Konghucu" <?php if($agama == "Konghucu") echo "selected" ?>>Konghucu</option>
                                <option value="Islam" <?php if($agama == "Islam") echo "selected" ?>>Islam</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Simpan Data" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-white bg-secondary">
                BIODATA MAHASISWA
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Universitas</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Hobi</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                            $sql2   = "SELECT * FROM biodata";
                            $result = $conn->query($sql2);
                            $urut   = 0;
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $id         = $row['id'];
                                    $email      = $row['email'];
                                    $nama       = $row['nama'];
                                    $univ       = $row['univ'];
                                    $fakultas   = $row['fakultas'];
                                    $prodi      = $row['prodi'];
                                    $nim        = $row['nim'];
                                    $tglLahir   = $row['tglLahir'];
                                    $hobi       = $row['hobi'];
                                    $agama      = $row['agama'];
                                    ?>
                                    <tr>
                                        <td scope="row"><?php echo ++$urut ?></td>
                                        <td scope="row"><?php echo $email ?></td>
                                        <td scope="row"><?php echo $nama ?></td>
                                        <td scope="row"><?php echo $univ ?></td>
                                        <td scope="row"><?php echo $fakultas ?></td>
                                        <td scope="row"><?php echo $prodi ?></td>
                                        <td scope="row"><?php echo $nim ?></td>
                                        <td scope="row"><?php echo $tglLahir ?></td>
                                        <td scope="row"><?php echo $hobi ?></td>
                                        <td scope="row"><?php echo $agama ?></td>
                                        <td scope="row">
                                            <a href="index3.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                            <a href="index3.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </td>

                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>