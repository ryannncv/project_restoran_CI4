<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css')?>" >
    <title>Login Page</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
    <div class="col-5 mx-auto">
    <span>
    <div class="col-8">
    <?php
        if(!empty($info)){
            echo '<div class="alert alert-danger" role="alert">';
            echo $info;
            echo '</div>';
        } 
    ?>
</div>
        <center><h1>LOGIN ADMIN</h1></center>
    </span>
    <hr>
    <form action="<?= base_url('/admin/login')?>" method="post">
        <div class="form-group">
            <label for="Kategori">Email</label>
            <input type="email" name="email" reqired class="form-control">
        </div>
        <div class="form-group">
            <label for="Keterangan">Passsword</label>
            <input type="password" name="password" reqired class="form-control">
        </div>
        <div class="form-group">
            <center><input type="submit" name="login" value="LOGIN" class="btn btn-primary col-12"></center>
        </div>
    </form>
</div>
    </div>
</div>

   
</body>
</html>