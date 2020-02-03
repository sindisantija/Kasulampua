<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    USER MANAGEMENT
                    <small>Halaman Untuk Mengelola Data Dari User</small>
                    <input type="checkbox" style="display:block !important">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal" id="addBtn">Tambah</button>
                            <script>
                                $('#addBtn').on('click', function(){
                                    $('#iptModName').val('');
                                    $('#iptModPass').val('');
                                    $('#formTarget').attr('action', '<?=base_url()?>admin/user/add_user');
                                });
                            </script>
                            <button type="button" class="btn btn-danger waves-effect" id="deleteBtn">Hapus</button>
                        </div>
                        <div class="body">
                            <form action="<?= base_url()?>admin/user/delete_user" method="POST">
                            <table id="mainTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="inputDelete" style="display:none">Input</th>    
                                        <th>No</th>
                                        <th width="40%">Username</th>
                                        <th width="30%">Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = $this->uri->segment(4);
                                    foreach($user as $u) {?>
                                    <tr>
                                        <td class="inputDelete" style="display:none"> 
                                        <?php if($no > 0) {?>
                                            <input type="checkbox" id="checkbox_<?= $u->id?>" class="filled-in" value="<?= $u->id?>" name="id[]"/>
                                            <label for="checkbox_<?= $u->id?>"></label>
                                        <?php };?>
                                    </td>
                                    <td><?= $no++?></td>
                                    <td style="text-transform:capitalize"><?= $u->username?></td>
                                    <td><?php if($u->status == 1) echo "Super Admin"; else echo "Admin" ?></td>
                                    <td>
                                        <button value="<?= $u->id?>" type="button" class="btn btn-danger editBtn" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">edit</i></button>
                                    </td>
                                    </tr>
                                    <?php };?>
                                    <script>
                                        $('.editBtn').on('click', function(){
                                            var id = $(this).val();
                                            $.ajax({
                                                type: "POST",
                                                url: '<?= base_url()?>admin/user/get_data_individual',
                                                data: {id:id},
                                                dataType : 'JSON',
                                                success: function(response){
                                                    $('#iptModName').val(response['Username']);
                                                    $('#iptModPass').val(response['Password']);
                                                    $('#iptModId').val(id);
                                                    $('#formTarget').attr('action', '<?=base_url()?>admin/user/update_user');
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
    <form id="formTarget" action="" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Tambah User</h4>
                <small>Menambahkan User Baru</small>
            </div>
           
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                            <input type="hidden" value="" id="iptModId" name="id">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Username" name="username" id="iptModName" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Password" name="password" id="iptModPass" />
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>