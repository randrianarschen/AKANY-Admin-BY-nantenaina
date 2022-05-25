<div class="card">
    <p id="error_msg"> <?= $error_msg; ?></p>
    <div class="row mt-5 mb-3 align-items-center">
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
                <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="Entrez votre mot clé" id="search" pwa2-uuid="EDITOR/input-A38-D17-324F7-BCF" pwa-fake-editor="" spellcheck="false" data-ms-editor="true" onkeyup="searchAny();">
                </div>
                <div class="col-md-2 text-right">
                  <span class="pr-3">ligne par page:</span>
                </div>
                <div class="col-md-2 ">
                    <div class="d-flex justify-content-end">
                        <select class="custom-select" name="rowsPerPage" id="changeRows">
                        <option value="5000">tout les lignes</option>
                           <option value="1">1</option>
                            <option value="5" selected="">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </div>
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
            <div class="dataTables_paginate paging_simple_numbers" id="selectedColumn_paginate">
            <ul id="pagination" class="pagination">
              
            </ul>
        </div>
        </div>