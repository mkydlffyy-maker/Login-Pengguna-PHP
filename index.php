<!-- Menentukan bahwa dokumen menggunakan HTML5 -->
<!DOCTYPE html>

<!-- Elemen utama HTML, bahasa yang digunakan adalah Bahasa Indonesia -->
<html lang="id">

<head>

    <!-- Mengatur karakter agar teks/simbol dapat ditampilkan dengan benar -->
    <meta charset="UTF-8">

    <!-- Membuat tampilan menyesuaikan ukuran layar perangkat -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Judul yang muncul pada tab browser -->
    <title>Login Pengguna</title>

    <!-- Menghubungkan file HTML dengan file CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Container utama untuk seluruh tampilan login -->
    <div class="login-container">

        <!-- Bagian logo -->
        <div class="logo">
            💻
        </div>

        <!-- Judul halaman -->
        <h2>Selamat Datang</h2>

        <!-- Subtitle atau keterangan di bawah judul -->
        <p class="subtitle">
            Silakan login untuk melanjutkan
        </p>

        <!--
            FORM LOGIN

            action = menentukan file yang menerima data
            method = menentukan metode pengiriman data
        -->
        <form action="proses.php" method="post">

            <!-- Group untuk input username -->
            <div class="form-group">

                <!-- Label untuk input username -->
                <label>Username</label>

                <!--
                    type = jenis input
                    name = nama data yang dikirim ke PHP
                    placeholder = teks petunjuk
                    required = input wajib diisi
                -->
                <input
                    type="text"
                    name="username"
                    placeholder="Masukkan username"
                    required
                >

            </div>


            <!-- Group untuk input password -->
            <div class="form-group">

                <!-- Label untuk input password -->
                <label>Password</label>

                <!--
                    type="password" = menyembunyikan karakter password
                    name="password" = nama data yang dikirim ke PHP
                    placeholder = teks petunjuk
                    required = input wajib diisi
                -->
                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>


            <!-- Tombol untuk mengirim form -->
            <button type="submit" class="login-button">
                Login
            </button>

        </form>


        <!-- Footer atau keterangan bagian bawah -->
        <div class="footer">
            Sistem Login Pengguna
        </div>

    </div>

</body>
</html>