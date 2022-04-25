<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive" src="<?php echo base_url("assets"); ?>/assets/images/221.jpg" alt="avatar"/></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username">John Doe</a></h5>
                    <ul>
                        <li class="">
                            <a href="javascript:void(0)" class="usertitle" aria-haspopup="true" aria-expanded="false">
                                <small>Web Developer</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">

                <li>
                    <a href="<?php echo base_url("AdminPanel") ?>">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("AdminPanel/users") ?>">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Üyeler</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
                        <span class="menu-text">Ayarlar</span>
                    </a>
                </li>



                <li class="menu-separator"><hr></li>

                <li>
                    <a href="documentation.html">
                        <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
                        <span class="menu-text">Documentation</span>
                    </a>
                </li>



                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
                        <span class="menu-text">Angular Version</span>
                    </a>
                </li>
            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->