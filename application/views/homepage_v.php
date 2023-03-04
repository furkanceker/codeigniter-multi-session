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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav pull-right">
        <li><a href="">Çıkış</a></li>
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
                    <tr>
                        <td>1</td>
                        <td>Bilgisayar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>