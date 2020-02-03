<!-- Wrapper -->
<div class="wrapper">
<!-- Navbar -->
<?php if(!isset($user)){?>
<div class="cs-navbar">
<?php } else { ?>
<div class="cs-navbar" style="background-color:#000000; position:relative;">
<?php }?>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark py-4">
            <a href="" class="navbar-brand"><img src="<?= base_url()?>assets/img/kasulampua.png" alt="" width="140"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link mx-3 cs-btn" href="#">About <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item active">
                        <a class="nav-link mx-3 cs-btn" href="<?=base_url()?>">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mx-3 cs-btn" href="<?=base_url('public_/data')?>">Data</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mx-3 cs-btn" href="<?=base_url('public_/berita')?>">Berita</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mx-3 cs-btn" href="<?=base_url('public_/buku')?>">Buku</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mx-3 cs-btn" href="<?=base_url('public_/infografis')?>">Infografis</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mx-3 cs-btn" href="<?=base_url('public_/kontak')?>">Hubungi Kami</a>
                    </li>
                </ul>
                <form class="form-inline ml-auto">
                    <input class="mr-sm-2 cs-searchbox" type="search" placeholder="Cari..." aria-label="Search">
                </form>
                <button href="nav-link" id="searchButton" style="color:#ffffff; font-size:18px; border:none; background-color:transparent"><i class="fas fa-search"></i></button>
            </div>
        </nav>
    </div>
</div>
<!-- End of Navbar -->