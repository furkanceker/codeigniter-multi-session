<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?= $user->full_name ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php foreach($user_list as $item) { ?> 
              <?php if(md5($item->email) != md5($user->email)) { ?> 
              <li><a target="_blank" href="<?= base_url("anasayfa/".md5($item->email)) ?>"><strong><?= $item->full_name ?></strong> ile Oturum Aç</a></li>
              <?php } ?>
            <?php } ?>
            <li role="separator" class="divider"></li>
            <li><a target="_blank" href="<?= base_url("giris") ?>">Başka Hesap ile Oturum Aç</a></li>
            <li><a href="<?= base_url("toplu-cikis") ?>">Tüm Hesaplardan Çıkış Yap</a></li>
            <li><a href="<?= base_url("cikis/".md5($user->email)) ?>">Çıkış Yap</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <h4>Eklenen Ürünler</h4>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <th>#</th>
                    <th>Ürün Adı</th>
                </thead>
                <tbody>
                  <?php foreach($products as $row) { ?> 
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->product_name ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/bootstrap/jquery-3.6.3.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>