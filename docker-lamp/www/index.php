<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 
  <style>
    .button{
      text-decoration: none;
      background-color: #eeeeee;
      color: black;
      padding: 2px 6px 2px 6px;
      border: 1px solid #c2c2c2;
      border-radius:2px;
    }
  </style>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<br/>
<a href="add.html" class="button">Tambah data</a>
    <div class="container">
    <?php
      echo "<center><h1><b>DAFTAR PENGUNJUNG KANTOR</b></h1></center> ";
      echo "<center><h1><b>DESA POKO<b></h1></center>"; ?>
    <!--tombol cari -->
       <form action="proses_cari.php" method="post">
         <input type="text" name="idC" placeholder="masukkan nama"/>
         <input type="submit" value="cari"/> </form>

     <!--  menampilkan tabel Person -->
   <?php
    $conn = mysqli_connect('db', 'user', 'test', "myDb");

    $query = 'SELECT * From Person';
    $result = mysqli_query($conn, $query);
    echo '<table class="table table-striped" border="1">';
    echo '<thead>
             <tr>
              <th>NO</th>
              <th>NO KTP</th>
              <th>NAMA</th>
              <th>ALAMAT</th>
              <th>TUJUAN</th>
              <th>TANGGAL</th>
             </tr>
          </thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
//        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
             }

        echo '</tr>';
    }

    /* Libération du jeu de résultats */
    $result->close();

    mysqli_close($conn);

    ?>
 </div>
</body>
</html>
