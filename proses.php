<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

if ($nama == ''){
    echo "Nama : " . 'tidak ada nama';
} else{
    echo "Nama : " . $nama . "<br>";
}

if ($email == ''){
    echo "Email : " . 'tidak ada email' . "<br>";
} else{
    echo "Email : " . $email . "<br>";
}

if ($pesan == ''){
    echo "Pesan : " . 'tidak ada pesan';
} else{
    echo "Pesan : " . $pesan . "<br>";
}
?>