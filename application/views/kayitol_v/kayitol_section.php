<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
</div>
<div class="row justify-content-center">
<div class="col-md-12 col-lg-10">
<div class="wrap d-md-flex">
<div class="img" style="background-image:url(<?php echo base_url("assets/") ?>img/pexels-photo-256453.jpeg)">
</div>
<div class="login-wrap p-4 p-md-5">
<div class="d-flex">
<div class="w-100">
<h3 class="mb-4">KAYIT OL</h3>
</div>
<div class="w-100">
<p class="social-media d-flex justify-content-end">
<a href="https://www.facebook.com/ersan.arslan.923" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
<a href="https://twitter.com/ecemarss" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
</p>
</div>
</div>
<form action="<?php echo base_url('register/registerdata');?>" method ="POST" class="signin-form">
    <div class="form-group mb-3">
<label class="label" for="name">AD</label>
    <input name="adi" type="text" class="form-control" placeholder="Adınız" required>
</div>
<div class="form-group mb-3">
<label class="label" for="name">SOYAD</label>
    <input name="soyadi" type="text" class="form-control" placeholder="Soyadınız" required>
</div>
<div class="form-group mb-3">
<label class="label" for="EMAIL">EMAIL</label>
    <input name="eposta" type="text" class="form-control" placeholder="E-posta" required>
</div>

<div class="form-group mb-3">
<label class="label" for="password">ŞİFRE BELİRLE</label>
    <input name="sifre" type="password" class="form-control" placeholder="Şifre" required>
</div>
<div class="form-group">
<button type="submit" class="form-control btn btn-primary rounded submit px-3">KAYIT OL</button>
</div>
<div class="form-group d-md-flex">
</form>
</section>