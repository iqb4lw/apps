<html>
    <head>
        <h2>Selamat Datang di Halaman Testing Database.</h2>
    </head>
    <body>
        <?php
        echo '<p>Hai,</p>';

        // Define PHP variables for the MySQL connection.
        $servername = "10.102.0.13";
        $username = "root";
        $password = "inipassword";

        // Creating a MySQL connection.
        $conn = mysqli_connect($servername, $username, $password);

        // Show if the connection fails or is successful.
        if (!$conn) {
            exit('<p>Anda gagal terhubung ke Database !<p>' .
mysqli_connect_error());
        }
        else {
            echo '<p>Anda berhasil terhubung ke Database !</p>';
        }
        ?>
    </body>
</html>

