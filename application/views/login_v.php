<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container">
    <h3 class="text-center">Giriş Yap</h3>
    <hr>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <form action="<?= base_url("giris-yap") ?>" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Şifre</label>
                    <input type="password" class="form-control" name="password" placeholder="Şifre">
                </div>
                <button type="submit" class="btn btn-success btn-block">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>