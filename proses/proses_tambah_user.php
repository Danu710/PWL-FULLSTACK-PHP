<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";

if (!empty($_POST['input_user_validate'])) {
  $select = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");
  if (mysqli_num_rows($select) > 0) {
    $_SESSION['message'] = [
      'title' => 'Username Yang Dimasukan Sudah Ada',
      'icon' => 'info'
    ];
    header('Location: ../user');
  } else {
    $query_id = mysqli_query($conn, "SELECT MAX(id) as id FROM login");
    $data_id = mysqli_fetch_array($query_id);
    $max_id = $data_id['id'];
    $id_number = (int) substr($max_id, 3);
    $id_number++;
    $id = 'ID' . sprintf("%03s", $id_number);

    $query = mysqli_query($conn, "INSERT INTO login (id,nama,username,level,nohp,alamat,password)
        values ('$id','$name','$username','$level','$nohp','$alamat','$password')");
    if (!$query) {
      $_SESSION['message'] = [
        'title' => 'Data User Gagal Ditambah',
        'icon' => 'error'
      ];
      header('Location: ../user');
    } else {
      $_SESSION['message'] = [
        'title' => 'Data User Berhasil Ditambah',
        'icon' => 'success'
      ];
      header('Location: ../user');
    }
  }
}
?>