<html>
 <head>
 <title>data cari</title>
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
  <div class="container">
  <?php
   $nama= "";
   if (isset($_POST["idC"]))
     $id = $_POST["idC"];

     include "koneksi.php";
     $query = "SELECT * From Person where id = '$id' order by id asc";
     $result = mysqli_query($conn, $query);
   ?>
  <a href="index.php" class="button">Home</a>
  <center><h1><b>HASIL PENCARIAN</b></h1></center>
   <table class="table table-striped" border="1">
        <thead>
             <tr>
              <th>NO</th>
              <th>NO KTP</th>
              <th>NAMA</th>
              <th>ALAMAT</th>
              <th>TUJUAN</th>
              <th>TANGGAL</th>
              <th colspan="2">Ubah & Hapus</th>
             </tr>
          </thead>
    <?php
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      $no=0;
      while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" .$row['id']. "</td>";
        echo "<td>" .$row['ktp']. "</td>";
        echo "<td>" .$row['nama']. "</td>";
        echo "<td>" .$row['alamat']. "</td>";
        echo "<td>" .$row['tujuan']. "</td>";
        echo "<td>" .$row['tanggal']. "</td>";
        echo "<td><a href=\"form_edit.html?id=$id[id]\"onClick=\"return confirm('Are you sure you want to edit?')\">Edit</a> </td>";
        echo "<td><a href=\"delete.php?id=$id[id]\"onClick=\"return confirm('Are you sure you want to delete?')\">Del</a> </td>";
    }
   ?></table></div>
</body>
</html>
