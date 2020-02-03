<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info" style="background:url(<?= base_url('assets/img/user-img-background.jpg') ?>)">
            <div class="image">
                <img src="<?=base_url()?>assets/img/geo.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                <div class="email"></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">Pengguna</i>Profil</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu" style="overflow:hidden">
            <ul class="list">
                <li class="header">MAIN NAVIGASI</li>
                <!-- <li class="">
                    <a href="<?php // echo base_url('dashboard')?>">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li> -->
                <li>
                    <a href="<?=base_url('admin/user')?>">
                        <i class="material-icons">face</i>
                        <span>Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('admin/categories')?>">
                        <i class="material-icons">home</i>
                        <span>Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url()?>admin/dt_kasulampua/post">
                        <i class="material-icons">archive</i>
                        <span>Data Sulampuka</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url()?>admin/dt_kasulampua/post">
                        <i class="material-icons">home</i>
                        <span>Berita</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url()?>admin/dt_kasulampua/post">
                        <i class="material-icons">home</i>
                        <span>Buku</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
               <a href="javascript:void(0);">BPS - Badan Pusat Statistik SULTRA</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>