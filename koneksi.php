<head>
<title>CRUD Siswa RPL</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">

<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<script>src="./assets/js/bootstrap.min.js"</script>
</head>
<?php
//Membuat koneksi ke database
//mysqli (source, username, password,nama db)

$db = new mysqli("localhost","root","","11rpl1_db",);
if (mysqli_connect_errno()) {
    echo "Error :" . mysqli_connect_error();
}
else{
    //echo 'Success;
}
?>