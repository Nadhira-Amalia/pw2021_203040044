<?php
/*
Nadhira Amalia
203040044
https://github.com/Nadhira-Amalia/pw2021_203040044
Pertemuan 7 - (21 maret 2021)
Mempelajari mengenai GET & POST
Membuat halaman login
*/
?>

<?php 
if (isset($_POST["submit"]) ) {
    if($_POST["username"] ==  "admin" && $_POST["password"] == "siapa") {
        header("Location: admin.php");
        exit;
    } else {

        $error = true;
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

<h1>Login Admin</h1>

<?php if (isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>

<ul>
<form action="" method="post">
    <li>
        <label for="username">username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
    <label for="password">password :</label>
    <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>

</body>
</html>