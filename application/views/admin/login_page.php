<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <title>Halaman Login</title>
</head>
<style>
    .wrapper {
        position:relative !important;
        width:100%;
        height:100vh;
    }
    
    .login-box {
        position:absolute !important;
        top:50%;
        left:50%;
        transform:translate(-50%, -50%);
    }
</style>
<body>
    <div class="wrapper">
        <div class="login-box">
        <?php if($this->session->flashdata('Error') != null) {?>
            <small class="alert alert-light p-0" role="alert">
                <?= $this->session->flashdata('Error')?>
            </small>
        <?php }?>
        <div class="card mt-2" style="width:18rem; ">
            <div class="card-body p-3">
                <h5 class="card-title pb-2" style="text-align:center">Login</h5>
               <form action="<?=base_url()?>admin/auth/auth" method="POST">
                    <div class="form-group">
                        <small><?= form_error('username')?></small>
                        <input type="text" class="form-control" id="inputUsername" aria-describedby="usernameHelp" placeholder="Nama Pengguna..." name="username">
                    </div>
                    <div class="form-group">
                        <small><?= form_error('password')?></small>
                        <input type="password" class="form-control" id="inputUsername" aria-describedby="usernameHelp" placeholder="Password..." name="password">
                    </div>
                    <div class="form-group">
                       <input class="btn btn-primary w-100" type="submit" value="Login">
                    </div>
               </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>