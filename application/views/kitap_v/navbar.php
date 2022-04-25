 <!-- Navigation -section
  =========================-->
  <nav class="navbar navbar-fixed-top navigation" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="<?php echo base_url(""); ?>">
        <img src="<?php echo base_url("assets/") ?>img/logo-yellow.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="<?php echo base_url(""); ?>">Anasayfa</a></li>
        <li><a href="<?php echo base_url("welcome/kitaplar"); ?>">Kitaplar</a></li>
        <li><a href="<?php echo base_url("welcome/iletisim"); ?>">İletişim</a></li>
        <li><a href="<?php echo base_url("welcome/login"); ?>">Giriş Yap / Kaydol</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>