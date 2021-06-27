<!DOCTYPE html>
<html>
<link href="css/signup.css" rel="stylesheet" />
<head>
    <title>Sign Up</title>
</head>
<body>
    <header class="masthead">
        <div class="container">
            <section class="login-box">
            <a href="halamanindex.php" class="previous round">&#8249;</a>
                <h2> Sign Up </h2>
                <p>Silahkan isi data dibawah ini untuk membuat akun baru</p>
                <form action="action/register.php" method="post">
                    <label>Nama</label>
                    <input type="text" placeholder="Nama" name="nama" class="form-control" value="">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" class="form-control" value="01-01-2000">
                    <label>Jenis Kelamin</label>
                    <select name="jeniskelamin" class="form-control" value="">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <label>Username</label>
                    <input type="text" placeholder="Username" name="username" class="form-control" value="">
                    <label>Password</label>
                    <input type="password" placeholder="Password" name="password" class="form-control" value="">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
                <p>Sudah punya akun? <a href="halamanlogin.php">Login disini</a>.</p>
            </section>
        </div>
    </header>
</body>
<html>