<html>
<head>
  <title>Latihan</title>
  <style>
    .form-control {
      border-radius: 32;
      background-color: rgb(179, 190, 182);
      width: 520px;
    }

    #container {
      width: 1280px;
    }
  </style>
</head>
<body>
  <div id="container">
    <form action="latihan" method="post">
        NISN:           <input type="text" class="form-control" name="nisn"><br>
        Nama Lengkap:   <input type="text" class="form-control" name="n_lengkap"><br>
        Nama Panggilan: <input type="text" class="form-control" name="n_panggilan"><br>
        Umut:           <input type="text" class="form-control" name="umur"><br>
        Alamat:         <input type="text" class="form-control" name="alamat"><br>
        <input type="submit" name="insert" value="Create"><br>
    </form>
  </div>
</body>
</html>
