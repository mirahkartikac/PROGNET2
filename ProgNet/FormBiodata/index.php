<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
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
        <span class="fs-2 text-black">Mirah Kartika</span>
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
    <div class="container">
        <h1>Biodata</h1>
        <br>
        <form action="proses.php" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="name@example.com" name="email" required><br>

            <label for="name">Nama:</label>
            <input type="text" id="name" placeholder="Mirah Example" name="nama" required><br>
            <label for="univ">Universitas:</label>
            <input type="text" id="univ" placeholder="Universitas Example" name="univ" required><br>
            <label for="fakultas">Fakultas:</label>
            <input type="text" id="fakultas" placeholder="Fakultas Example" name="fakultas" required><br>
            <label for="prodi">Program Studi:</label>
            <input type="text" id="prodi" placeholder="Teknologi Example" name="prodi" required><br>

            <label for="nim">NIM:</label>
            <input type="number" id="nim" placeholder="2205551048" name="nim" required><br>

            <label for="gender">Jenis Kelamin:</label>
            <select id="gender" name="gender" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br>

            <label for="age">Umur:</label>
            <input type="number" id="age" placeholder="20" name="umur" required><br>

            <label for="birthplace">Tempat Lahir:</label>
            <input type="text" id="birthplace" placeholder="Singaraja Example" name="birthplace" required><br>

            <label for="tglLahir">Tanggal Lahir:</label>
            <input type="date" id="tglLahir" name="tglLahir" required><br><br>

            <label for="hobi">Hobi:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobi[]" value="Jurnalistik" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Jurnalistik
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobi[]" value="Menyanyi" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Menyanyi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobi[]" value="Menari" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Menari
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Olahraga
                </label>
            </div>

            <label for="agama">Agama</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" value="Hindu" id="hindu">
                <label class="form-check-label" for="hindu">
                  Hindu
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" value="Kristen" id="kristen">
                <label class="form-check-label" for="kristen">
                  Kristen
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" value="Katolik" id="katolik">
                <label class="form-check-label" for="katolik">
                  Katolik
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" value="Buddha" id="buddha">
                <label class="form-check-label" for="buddha">
                  Buddha
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" value="Konghucu" id="konghucu">
                <label class="form-check-label" for="konghucu">
                  Kong Hu Cu
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" value="Islam" id="islam" checked>
                <label class="form-check-label" for="islam">
                  Islam
                </label>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="container">
        <div id="result">
            
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
