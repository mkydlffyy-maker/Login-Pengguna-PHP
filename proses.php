<?php

// MEMBUAT CLASS
class Pengguna
{
    // PROPERTY / ATRIBUT
    public $username;
    private $password;


    // METHOD SETUSERNAME / VALIDASI USERNAME
    public function setUsername($username)
    {
        // CEK USERNAME KOSONG
        if ($username == "") {
            return false; // DITOLAK
        }

        // SIMPAN USERNAME KE OBJECT
        $this->username = $username;

        // BERHASIL
        return true;
    }


    // METHOD SETPASSWORD / VALIDASI PASSWORD
    public function setPassword($password)
    {
        // CEK PANJANG PASSWORD
        if (strlen($password) < 6 || strlen($password) > 12) {
            return false; // DITOLAK
        }

        // SIMPAN PASSWORD KE OBJECT
        $this->password = $password;

        // BERHASIL
        return true;
    }
}


// MENGAMBIL DATA DARI FORM
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";


// MEMBUAT OBJECT DARI CLASS PENGGUNA
$pengguna = new Pengguna();


// MEMANGGIL METHOD UNTUK VALIDASI
$usernameValid = $pengguna->setUsername($username);
$passwordValid = $pengguna->setPassword($password);


// VALIDASI USERNAME
if (!$usernameValid) {

    // JIKA USERNAME KOSONG
    $judul = "Login Gagal";
    $pesan = "Username wajib diisi.";
    $status = "gagal";


// VALIDASI PASSWORD
} elseif (!$passwordValid) {

    // JIKA PASSWORD TIDAK SESUAI
    $judul = "Login Gagal";
    $pesan = "Password harus terdiri dari 6 sampai 12 karakter.";
    $status = "gagal";


// JIKA SEMUA VALID
} else {

    // LOGIN BERHASIL
    $judul = "Login Berhasil";
    $pesan = "Selamat datang, " . $username . "!";
    $status = "berhasil";
}

?>

