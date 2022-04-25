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
                                <h3 class="mb-4">Giriş Yap</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="https://www.facebook.com/ersan.arslan.923" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="https://twitter.com/ecemarss" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <form action="#" class="signin-form">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Kullanıcı Adı</label>
                                <input type="text" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Şifre</label>
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Giriş Yap</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Beni Hatırla
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                    <div class="w-50 text-md-right">
                                        <a href="<?php echo base_url("welcome/forgot") ?>">Şifremi Unuttum</a>
                                    </div>
                                </div>
                        </form>
                        <p class="text-center">Üye Değil Misiniz?
                            <br>
                        <a  href="<?php echo base_url("welcome/kayit") ?>">Hemen Kaydolun</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>