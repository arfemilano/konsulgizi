<!DOCTYPE html>
<html>
<link href="css/login.css" rel="stylesheet" />
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>
    <header class="masthead">
    <div class="container">
        <section class="login-box">
            <a href="halamanindex.php" class="previous round">&#8249;</a>
            <h2> Login </h2>
            <form method="post" action="action/login.php">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" value="Login">
            </form>
            <p>Belum punya akun? <a href="halamansignup.php">Daftar disini</a>.</p>
        </section>
    </div>
    </header>
</body>
<html>