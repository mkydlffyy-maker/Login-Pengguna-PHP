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


<!--HTML UNTUK MENGATUR STRUKTUR tampilan menu login berhasil dan login gagal-->


<!DOCTYPE html>
<html lang="id">

<head>
    <!-- MENENTUKAN KARAKTER / BAHASA DOKUMEN -->
    <meta charset="UTF-8">

    <!-- MEMBUAT TAMPILAN RESPONSIVE DI HP/LAPTOP -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JUDUL TAB BROWSER -->
    <!-- $judul berasal dari proses.php -->
    <title><?php echo $judul; ?></title>

    <!-- MENGHUBUNGKAN HTML DENGAN FILE CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- CONTAINER / KOTAK HASIL LOGIN -->
    <!-- $status menentukan class: berhasil atau gagal -->
    <div class="result-container <?php echo $status; ?>">


        <!-- PERCABANGAN UNTUK ICON HASIL LOGIN -->
        <?php if ($status == "berhasil") { ?>

            <!-- JIKA BERHASIL, TAMPILKAN ICON CENTANG -->
            <div class="result-icon">
                ✓
            </div>

        <?php } else { ?>

            <!-- JIKA TIDAK BERHASIL, TAMPILKAN ICON SILANG -->
            <div class="result-icon">
                ✕
            </div>

        <?php } ?>


        <!-- MENAMPILKAN JUDUL HASIL -->
        <!-- Contoh: Login Berhasil / Login Gagal -->
        <?php echo $judul; ?>


        <h2>
            <?php echo $judul; ?>
        </h2>


        <!-- MENAMPILKAN PESAN HASIL LOGIN -->
        <!-- Contoh: Selamat datang, Harun! -->
        <!-- atau: Username wajib diisi. -->
        <p class="result-message">
            <?php echo $pesan; ?>
        </p>


        <!-- LINK UNTUK KEMBALI KE HALAMAN LOGIN -->
        <a href="index.php" class="back-button">
            Kembali ke Login
        </a>

    </div>

</body>
</html>