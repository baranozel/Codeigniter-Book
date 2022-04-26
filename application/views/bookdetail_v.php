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
                            <strong><h4>Description Title</h4></strong>
                            <p><h5>
                                Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue
                                sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.
                                </h5>
                            </p>
                        </div>
                    </div>
                </div>




                <hr />

                <h1 class="price-container">
                    $129.54

                </h1>


                <hr />


                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="javascript:void(0);" class="btn btn-success btn-lg">Add to cart ($129.54)</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end product -->
</div>



<?php $this->load->view("kitap_v/footer"); ?>