<!DOCTYPE html>
<html lang="en">
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
        <div class="form-group ">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggallahir" class="form-control" value="2020-06-24">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group ">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="halamanlogin.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>