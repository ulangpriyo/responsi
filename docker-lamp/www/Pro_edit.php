   <?php
    include "koneksi.php";
     $idk =$_GET['id'];
     $tanggalE = date("Y-m-d H:i:s");
     $ktpE = $_POST['ktp'];
     $namaE = $_POST['nama'];
     $alamatE = $_POST['alamat'];
     $tujuanE = $_POST['tujuan'];

     if(isset($_POST['edit'])){
           if(empty($ktpE) || empty($namaE) || empty($alamatE)) {
              if(empty($ktpE)) {
                 echo "<font color='red'>KTP field is empty.</font><br/>";
                }
              if(empty($namaE)) {
                echo "<font color='red'>NAMA field is empty.</font><br/>";
                }
              if(empty($alamatE)) {
                echo "<font color='red'>ALAMAT field is empty.</font><br/>";
                }
                //link to the previous page
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                }
     else{
       $sql ="UPDATE Person SET ktp='$ktpE',nama='$namaE',alamat='$alamatE',tujuan='$tujuanE' where id='$idk' ";
       $hasil = mysqli_query($conn,$sql);
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='index.php'>Home</a>"; 

            }
         }
    ?>


