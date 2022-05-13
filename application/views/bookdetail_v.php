<?php $this->load->view("kitap_v/head"); ?>

<?php $this->load->view("kitap_v/navbar"); ?>



<div class="container" style="padding-top: 100px;">
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <div id="myCarousel-2" class="carousel slide">
                    <img src="<?php echo base_url("assets/") ?>img/hp.jpg" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="name">
                    Harry Potter Felsefe Taşı
                    <small>Yazar <a href="javascript:void(0);">J.K. Rowling</a></small>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-muted"></i>
                    <span class="fa fa-2x"><h5>(109) Votes</h5></span>
                    <a href="javascript:void(0);">109 customer reviews</a>
                </h2>


                <hr />

                <div class="description description-tabs" style="background-color: rgb(48, 48, 48);">
                    <div id="myTabContent" class="tab-content" style="background-color: rgb(48, 48, 48);">
                        <div class="tab-pane fade active in" id="more-information" style="background-color: rgb(48, 48, 48);">
                            <br />
                            <strong><h4>Kitap Açıklaması</h4></strong>
                            <p><h5>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, optio libero quos, pariatur quas eveniet, minima minus culpa cum deserunt rerum distinctio saepe qui! Ratione velit eligendi obcaecati distinctio tenetur?
                                </h5>
                            </p>
                        </div>
                    </div>
                </div>




                <hr />

                <h1 class="price-container">
                    ₺70.00

                </h1>


                <hr />


                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="javascript:void(0);" class="btn btn-success btn-lg">Satın Al</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end product -->

    <div class="title text-center">
          <h2>Önerilen Kitaplar</h2>
        </div>


    <div class="row">
          <div class="row product-list">
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="<?php echo base_url("assets/") ?>img/hp.jpg" alt="" />
                        <a href="<?php echo base_url("welcome/book_detail"); ?>" class="adtocart">
                        <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="<?php echo base_url("welcome/book_detail"); ?>" class="pro-title">
                                Harry Potter Felsefe Taşı
                            </a>
                        </h4>
                        <p class="price">₺70.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="<?php echo base_url("assets/") ?>img/hp.jpg" alt="" />
                        <a href="<?php echo base_url("welcome/book_detail"); ?>" class="adtocart">
                        <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="<?php echo base_url("welcome/book_detail"); ?>" class="pro-title">
                                Harry Potter Felsefe Taşı
                            </a>
                        </h4>
                        <p class="price">₺70.00</p>
                    </div>
                </section>
            </div>


            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="<?php echo base_url("assets/") ?>img/hp.jpg" alt="" />
                        <a href="<?php echo base_url("welcome/book_detail"); ?>" class="adtocart">
                        <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="<?php echo base_url("welcome/book_detail"); ?>" class="pro-title">
                                Harry Potter Felsefe Taşı
                            </a>
                        </h4>
                        <p class="price">₺70.00</p>
                    </div>
                </section>
            </div>





    
</div>



<?php $this->load->view("kitap_v/footer"); ?>