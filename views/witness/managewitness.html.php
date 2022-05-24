<div class="card">
    <p id="error_msg"> <?= $error_msg; ?></p>
    <div class="col-md-8 offset-md-2">
                    <form action="simple-results.html">
                        <div class="input-group">
                            <input type="search" id="search" onKeyup="searchAny('witness', 6);" class="form-control form-control-lg" placeholder="Entrez votre mot clé">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
            </form>
    </div>
    <div class="card-header">
        <h3 class="card-title">Toutes les évènements</h3>
<!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10px">N°</th>
                    <th>Nom du témoin</th>
                    <th >Titre</th>
                    <th>Date et heure</th>
                    <th>Fonction</th>
                     <th>Lien du vidéo</th>
                    <th>Image</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                $i = 0;
                foreach ($witnesses as $witness) {
                    $i++;
                ?>
                    <tr id="<?= 'row' . $i; ?>">
                        <td ><?= $i ?>.</td>
                        <input type="hidden" id="<?= 'id' . $i; ?>" value="<?= $witness['id']; ?>" name="id">
                        <td  class="td<?=$i;?>"  id="<?= 'td1' . $i; ?>"> <?= $witness['name_witness']; ?></td>
                          <td  class="td<?=$i;?>" id="<?= 'td2' . $i; ?>"><?= $witness['title']; ?></td>
                          <td  class="td<?=$i;?>" id="<?= 'td3' . $i; ?>"><?= $witness['date_publication']; ?></td>
                          <td  class="td<?=$i;?>"  id="<?= 'td4' . $i; ?>"> <?= $witness['function']; ?></td>
                          <td  class="td<?=$i;?>" id="<?= 'td5' . $i; ?>"><?= $witness['link_video']; ?></td>
                        <td  class="td<?=$i;?>" id="<?= 'td6' . $i; ?>"><img id="<?= 'image' . $i; ?>" src="./views/images/witness/<?= $witness['image']; ?>" alt="" width="100px" height="100px"></td>
                        <td>
                            <button type="submit" class="btn btn-primary btn-sm" id="<?= 'edit_button' . $i; ?>"  onclick="edit_row(event,'<?= $i; ?>', 6)"> <i class="fas fa-pencil-alt"></i></button>
                            <button type ="submit" class="btn btn-danger btn-sm" id="<?='cancel_button'.$i;?>" onclick="cancel(event, '<?=$i;?>', 'witness','anulate');" style="display:none;"><i class="fa-solid fa-ban"></i></button>
                            <button type="submit" id="<?= 'save_button' . $i; ?>" class="btn btn-success btn-sm" class="save" style="display:none;" onclick="save_row(event, '<?= $i; ?>', 'witness','updateRowWit', 6);"><i class="fas fa-check"></i></button>
                            <button type="submit" class="btn btn-danger btn-sm" id="delete_button<?=$i;?>" onclick="delete_row(event, '<?= $i; ?>', 'witness')"><i class="fas fa-trash"></i></button>

                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
       
    </div> 
    
</div>
<div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                        <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>