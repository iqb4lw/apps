<html>
    <head>
        <h2>Welcome to Test Page.</h2>
    </head>
    <body>
        <?php
        echo '<p>Hello,</p>';

        // Define PHP variables for the MySQL connection.
        $servername = "10.102.0.13";
        $username = "root";
        $password = "inipassword";

        // Creating a MySQL connection.
        $conn = mysqli_connect($servername, $username, $password);

        // Show if the connection fails or is successful.
        if (!$conn) {
            exit('<p>Your connection has failed.<p>' .
mysqli_connect_error());
        }
        else {
            echo '<p>You have connected successfully.</p>';
        }
        ?>
    </body>
</html>
