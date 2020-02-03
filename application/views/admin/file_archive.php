<section class="content" style="">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA DETAIL
                    <small>Halaman Untuk Melihat Detail Data Serta Mengupload File Data</small>
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
                    <div class="card">
                        <div class="header" style="display:flex">
                            <div class="left-section" style="width:50%">
                                <h2 style="margin:8px 0px"><?= $titledata?></h2>
                            </div>
                            <?php if($check != null) {?>
                            <div class="right-section" style="width:50%;text-align:right">
                            <?php echo form_open_multipart(base_url().'admin/dt_kasulampua/change_file');?>
                            <input type="hidden" value="<?= $postid ?>" name="postid">
                            <p style="text-align:right;" id="fileLabel"><small>No File Selected</small></p>
                            <input type="file" name="userfile" id="upFile" class="UpFile" required accept=".xls, .xlsx" style="display:none" />
                            <label for="upFile" class="btn btn-success">Upload Ulang File</label>
                            <input type="submit" class="btn btn-success" value="Upload" />
                            <?php echo form_close()?>
                            </div>
                            <?php };?>
                            <script type="text/javascript">
                                $(function() {
                                    $('.UpFile').change(function() {
                                        $('#fileLabel').html('File : ' + $(this).val());
                                        $('#fileLabel2').html('File : ' + $(this).val());
                                    });
                                });
                            </script>
                        </div>
                        <!-- <div class="header" style="display:flex">
                            <div class="search" style="width:80%">
                                <input type="text" class="form-control" placeholder="Cari Postingan Disini">  
                            </div>
                            <div class="button-search" style="width:20%; text-align:center">
                                <button class="btn btn-primary" style="width:80%; padding:8px 0;">Search</button>
                            </div>
                        </div> -->
                        <div class="body">
                            <?php if($check != null) {?>
                                <table id="mainTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th widht="30%">Provinsi</th>
                                            <th>2014</th>
                                            <th>2015</th>
                                            <th>2016</th>
                                            <th>2017</th>
                                            <th>2018</th>
                                            <th>2019</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no = $this->uri->segment(4) + 1;
                                    foreach($result as $r) {?>
                                    <tr>
                                        <td><?=$r->province?></td>
                                        <td><?=$r->tahun_2014?></td>
                                        <td><?=$r->tahun_2015?></td>
                                        <td><?=$r->tahun_2016?></td>
                                        <td><?=$r->tahun_2017?></td>
                                        <td><?=$r->tahun_2018?></td>
                                        <td><?=$r->tahun_2019?></td>
                                    </tr>
                                        <?php };?>
                                    </tbody>
                                </table>    
                            <?php } else {?>
                                <div class="upload-file-body" style="width:100%; padding:120px 0px; text-align:center">
                                    <h3>Sepertinya Data Yang Anda Cari Tidak Ditemukan ...</h3>
                                    <br>
                                    <small id="fileLabel2">No File Selected</small>
                                <?php echo form_open_multipart(base_url().'admin/dt_kasulampua/do_upload');?>
                                    <input type="hidden" value="<?= $postid ?>" name="postid">
                                    <label class="btn btn-success btn-lg" style="cursor:pointer" for="fileUpload">Pilih File</label>
                                    <input type="file" name="userfile" id="fileUpload" class="UpFile" required accept=".xls, .xlsx" style="display:none" />
                                    <input type="submit" class="btn btn-success btn-lg" value="Upload" />
                                </form>
                                </div> 
                            <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>