<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Pengisian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <pre>
    <form action="prosess.php" method="post" enctype="multipart/form-data">
        <!-- Nama    : <input type="text" name="nama" id="nama"><br> -->
        Hobi    : <input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>
                  <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
                  <input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi<br>
        Foto    : <input type="file" name="foto" id="foto"><br>
        <input type="submit" value="submit">
    </form>
    </pre>
</body>
</html>