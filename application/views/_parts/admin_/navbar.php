 <!-- Overlay For Sidebars -->
 <div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">Cari</i>
    </div>
    <input type="text" placeholder="Cari...">
    <div class="close-search">
        <i class="material-icons">Keluar</i>
    </div>
</div>
<!-- #END# Search Bar -->
<nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Admin Dashboard SULAMPUKA</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i
                                class="material-icons">Cari</i></a></li>
                    <!-- #END# Call Search -->
                    <li class="pull-right"><a href="<?= base_url()?>admin/auth/logout" class="js-right-sidebar" data-close="true"><i
                                class="material-icons">Keluar</i></a></li>
                </ul>
            </div>
        </div>
    </nav>