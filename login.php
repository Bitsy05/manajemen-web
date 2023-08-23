<?php

include "config/config.php";

error_reporting(0);

session_start();

if ($_SESSION["jabatan"] == 'admin') {
    header("Location: index.php");
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"]  ;

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($result->num_rows > 0) {
        if ($row["jabatan"] == "admin") {
            $_SESSION["email"] = $row["email"];
            $_SESSION["jabatan"] = $row["jabatan"];
            header("Location: index.php");
        } else if ($row["jabatan"] == "" || $row["jabatan"] == null) {
            echo "<script>alert('Anda tidak boleh masuk di sini!')</script>";

        }
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan periksa kembali!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Manajemen Tutorial Workout</title>

    <script>
        function myFunction() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>

<body class="body-login">

    <div class="container2">
        <img src="assets/images/logo.png" alt="logo" class="img-fluid mb-4">

        <form action="" method="POST" class="login-form">
            <div class="input-group">
                <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input id='pass' type="password" placeholder="Password" name="password" value="<?php echo $_POST[
                    "password"
                ]; ?>" required>
            </div>
            <div class="float-end d-inline">
                <input type="checkbox" class='input-group-sm mb-4 float-right' onclick="myFunction()"> Show
                Password</input>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

</body>

</html>