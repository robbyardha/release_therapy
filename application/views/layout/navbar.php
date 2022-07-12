<nav class="navbar navbar-expand-lg classic transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="./index.html">
                <img src="<?= base_url('assets') ?>/img/logo-dark.png" srcset="<?= base_url('assets') ?>/img/logo-dark@2x.png 2x" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">Terapi.In</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">

                    <li class="nav-item ">
                        <a class="nav-link <?php if ($this->uri->segment(1) == "Home" || $this->uri->segment(1) == "home" || $this->uri->segment(1) == "") {
                                                echo "active";
                                            } ?>" href="<?= base_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item <?php if ($this->uri->segment(1) == "#howto" || $this->uri->segment(1) == "#Howto") {
                                            echo "active";
                                        } ?>">
                        <a class="nav-link" href="#howto">How To</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?php if ($this->uri->segment(1) == "curhat" || $this->uri->segment(1) == "Curhat") {
                                                echo "active";
                                            } ?>" href="<?= base_url('curhat') ?>">Let's Curhat</a>
                    </li>

                </ul>

            </div>
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">

                <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->
</header>
<!-- /header -->