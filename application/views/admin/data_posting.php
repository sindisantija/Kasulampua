<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA POSTING MANAGEMENT
                    <small>Halaman Untuk Mengelola Data Yang Akan Di Posting</small>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <?php if($this->session->flashdata() != NULL) {?>
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <?= $this->session->flashdata('alert')?>
                    </div>
                <?php };?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                KATEGORI
                                <small>List Kategori</small>
                            </h2>
                        </div>
                        <div class="body">
                            <ul class="list-group">
                                <?php foreach($categories as $c) {?>
                                    <li class="list-group-item"><?= $c->name?></li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="footer"></div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        Detail Postingan
                                        <small>Berisi Detail Postingan</small>
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="row clear-fix">
                                        <div class="col-sm-6">
                                            <small id="infoTitle">Judul : </small>
                                        </div>
                                        <div class="col-sm-6">
                                            <small id="infoStatus">Status Upload : </small>
                                        </div>
                                        <div class="col-sm-11">
                                            <small>Deskripsi : </small>
                                            <p style="text-align:justify; padding:4px 4px" id="infoDesc">
                                            
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer"></div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <span>Download Template Excel Kami Disini</span>
                                    <a href="<?=base_url()?>assets/file/TemplateKasulampua.xls" download style="margin-left:38%" class="btn btn-success">Download Template</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-col-sm-12">
                    <div class="card">
                        <div class="header">
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal" id="addBtn">Tambah</button>
                                <script>
                                    $('#addBtn').on('click', function(){
                                        $('#iptModName').val('');
                                        $('#iptModPass').val('');
                                        $('#formTarget').attr('action', '<?=base_url()?>admin/dt_kasulampua/add_post');
                                    });
                                </script>
                            <button type="button" class="btn btn-danger waves-effect" id="deleteBtn">Hapus</button>
                        </div>
                        <div class="body">
                            <form action="<?= base_url()?>admin/dt_kasulampua/delete_post" method="POST">
                            <table id="mainTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="inputDelete" style="display:none">Input</th>    
                                        <th>No</th>
                                        <th width="20%">Judul</th>
                                        <th>Tanggal</th>
                                        <th>Kategori</th>
                                        <th>Posted By</th>
                                        <th>Status File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = $this->uri->segment(4) + 1;
                                    foreach($post as $c) {?>
                                    <tr>
                                        <td class="inputDelete" style="display:none"> 
                                            <input type="checkbox" id="checkbox_<?= $c->newid?>" class="filled-in" value="<?= $c->newid?>" name="id[]"/>
                                            <label for="checkbox_<?= $c->newid?>"></label>
                                        </td>
                                        <td><?= $no++?></td>
                                        <td style="text-transform:capitalize"><?= $c->pname?></td>
                                        <td><?= $c->pdate?></td>
                                        <td><?= $c->cname?></td>
                                        <td><?= $c->uname?></td>
                                        <td>
                                            <?php 
                                                echo ($c->pstatus < 1 ? 'Kosong' : 'Terupload');
                                            ?>
                                        </td>
                                        <td>
                                            <button value="<?= $c->newid?>" type="button" class="btn btn-danger editBtn" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">edit</i></button>
                                            <button type="button" value="<?= $c->newid ?>" class="btn btn-info infoBtn"><i class="material-icons">info</i></button>
                                            <?= anchor('admin/dt_kasulampua/file/'.$c->newid.'', '<i class="material-icons">archive</i>', 'class="btn btn-success"')?>
                                        </td>
                                    </tr>
                                    <?php };?>
                                    <script>
                                        $('.editBtn').on('click', function(){
                                            var id = $(this).val();
                                            $.ajax({
                                                type: "POST",
                                                url: '<?= base_url()?>admin/dt_kasulampua/get_data_individual',
                                                data: {id:id},
                                                dataType : 'JSON',
                                                success: function(response){
                                                    $('#iptModName').val(response['Title']);
                                                    $('#iptModDesc').val(response['Desc']);
                                                    $('#iptModFile').val(response['File']);
                                                    $('#iptModCat').val(response['Cat']);
                                                    $('#iptModCat').text(response['CatName']);
                                                    $('#iptModId').val(id);
                                                    $('#formTarget').attr('action', '<?=base_url()?>admin/dt_kasulampua/update_categories');
                                                },
                                                error: function(){
                                                    alert('Terjadi Sebuah Kesalahan...');
                                                }
                                            });
                                        });

                                        $('.infoBtn').on('click', function(){
                                            var id = $(this).val();
                                            $.ajax({
                                                type: "POST",
                                                url: '<?= base_url()?>admin/dt_kasulampua/get_data_individual',
                                                data: {id:id},
                                                dataType : 'JSON',
                                                success: function(response){
                                                    $('#infoTitle').html('Judul :  ' + response['Title']);
                                                    $('#infoDesc').html(response['Desc']);
                                                    if(response['File'] == 0) {
                                                        $('#infoStatus').html('Status Upload : Belum Terupload');
                                                    }
                                                    else {
                                                        $('#infoStatus').html('Status Upload : Terupload');
                                                    }
                                                },
                                                error: function(){
                                                    alert('Terjadi Sebuah Kesalahan...');
                                                }
                                            });
                                        });
                                    </script>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th><strong>TOTAL</strong></th>
                                        <th><?= $no - 1 ?></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <button type="submit" class="btn btn-danger inputDelete" style="display:none">Hapus</button>
                            </form>
                            <br>
                            <?=
                                $this->pagination->create_links();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <form id="formTarget" action="" method="post" enctype="multipart/form-data">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Tambah Postingan</h4>
                <small>Menambahkan Postingan </small>
            </div>
           
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="body">
                    <div class="col-sm-12">
                        <input type="hidden" value="" id="iptModId" name="id">
                        <input type="hidden" value="0" name="file_id" id="iptModFile">
                        <input type="hidden" value="<?= $this->session->userdata('username')?>" name="user_id">
                        <input type="hidden" value="<?= date('Y-m-d H:i:s')?>" name="date">
                        
                        <div class="form-group">
                            <label for=""><small>Nama Pengguna : </small></label>
                            <p><?= $this->session->userdata('user_name')?></p>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <label for="iptModName"><small>Judul Postingan : </small></label>
                                <input type="text" class="form-control" placeholder="Masukkan Judul" name="name" id="iptModName" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="pb-3" for="iptModCat"><small>Kategori : </small></label>
                            <select name="cat" class="form-control show-tick">
                                <option id="iptModCat" value="0" selected>--- Pilih Kategori ---</option>
                                <?php foreach($categories as $c) {?>
                                    <option value="<?= $c->id?>"><?= $c->name?></option>
                                <?php }?>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <label for="iptModDesc"><small>Deskripsi : </small></label>
                                <textarea rows="4" id="iptModDesc" class="form-control no-resize" placeholder="Tulis Deskripsi Disini" name="desc"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="iptModImg"><small>Gambar: </small></label>
                            <input type="file" style="hidden" name="image" required accept=".jpg, .png">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">KEMBALI</button>
            </div>
        </form>
        </div>
    </div>
</div>