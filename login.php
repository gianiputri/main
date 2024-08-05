<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang di halaman</title>
</head>


<body>
    <?php
    include ("config.php");
    ?>

    <?php
    if (isset($_POST['username'])) { // memeriksa apakah login telah tersubmit
        $username = $_POST['username']; //memasukkan nilai 
        $password = $_POST['password'];

        $sql = "SELECT * FROM `tbl_admin` where `username` = '" . $username . "' AND `password` = '" . $password . "'";
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_array($query);

        if (mysqli_num_rows($query) > 0) {
            session_start();
            $_SESSION['status'] = $data['login'];
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['username'] = $data['username'];

            header('location:index.php'); // mengarahkan ke halaman setelah berhasil login 
    
        }
    }
    ?>

    <div>
        <h1>login</h1>

        <form method="POST">


            <table border=1>
                <tr>
                    <td>username</td>
                    <td>:</td>
                    <td><input type="text" name="username" required></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password" required></td>
                </tr>

                <tr>
                    <td colspan="3"><input type="submit" value="login" style="width:100%;"></input></td>
                    <!-- tombol untuk tambah nama-->
                </tr>

            </table>

        </form>
    </div>


</body>

</html>