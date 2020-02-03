<div class="container" >
    <div class="row sect-data_ks my-4">
        <div class="col-lg-3">
           <ul id="catName"> 
                <?php foreach($cat as $c){?>
                    <li class="data-tab">
                        <input type="hidden" value="<?= $c->id?>">
                        <?= $c->name?>
                    </li>
                <?php };?>
           </ul>
        </div>
        <div class="col-lg-9" id="resultPost">

        </div>
    </div>
    <div class="row sect-indikator_ks my-4">
        <div class="col-lg-12" id="idkResult">
            
        </div>
    </div>
</div>