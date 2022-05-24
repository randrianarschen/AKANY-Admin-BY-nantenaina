<div class="card">
<div class="row mt-5 mb-3 align-items-center">
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
                <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="Entrez votre mot clé" id="search" pwa2-uuid="EDITOR/input-A38-D17-324F7-BCF" pwa-fake-editor="" spellcheck="false" data-ms-editor="true" onkeyup="searchAny();">
                </div>
                <div class="col-md-2 text-right">
                  <span class="pr-3">Rows Per Page:</span>
                </div>
                <div class="col-md-2 ">
                    <div class="d-flex justify-content-end">
                        <select class="custom-select" name="rowsPerPage" id="changeRows">
                            <option value="1">1</option>
                            <option value="5" selected="">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </div>
            </div>

    <div class="card-header">
        <h3 class="card-title">Toutes les demandes</h3>

        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th style="width: 10px">N°</th>
                    <th>But</th>
                    <th style="">Motif</th>
                    <th style="">Date</th> 
                    <th>Montant</th>
                    <th>Image</th>
                    <th width="50px">Option</th>
                </tr>
            </thead>
            <tbody id="tdbody">
                
                <?php
                $i = 0;
                foreach ($donations as $donation) {
                ++$i;
                ?>

                    <tr id="<?= 'row' .$i; ?>">
                        <td><?= $i ?>.</td>
                        <input type="hidden" name="id" id="<?='id'.$i;?>" value="<?= $donation['id']; ?>">
                        <td class="<?= 'td' .$i; ?>"><?= $donation['sujet']; ?></td>
                       <td class="<?= 'td' .$i; ?>"><?=$donation['motif'];?></td>  
                        <td class="<?= 'td' .$i; ?>"><?= $donation['cree_a'] ?></td>
                        <td class="<?= 'td' .$i; ?>"><?=$donation['montant'];?></td>
                        <td class="<?= 'td' .$i; ?>"><img id = "<?='image'.$i;?>" src="views/images/donation/<?=$donation['image'] ;?>" width="100" height="100"></td>
                        <td>
                            <button type="submit" class="btn btn-primary btn-sm" id="<?= 'edit_button' . $i; ?>"  onclick="edit_row(event,'<?= $i; ?>', 5)"> <i class="fas fa-pencil-alt"></i></button>
                            <button type ="submit" class="btn btn-danger btn-sm" id="<?='cancel_button'.$i;?>" onclick="cancel(event, '<?=$i;?>', 'donation','anulate');" style="display:none;"><i class="fa-solid fa-ban"></i></button>
                            <button type="submit" id="<?= 'save_button' . $i; ?>" class="btn btn-success btn-sm" class="save" style="display:none;" onclick="save_row(event, '<?= $i; ?>', 'donation','updateRowDonat', 5);"><i class="fas fa-check"></i></button>
                            <button type="submit" class="btn btn-danger btn-sm" id="delete_button<?=$i;?>" onclick="delete_row(event, '<?= $i; ?>', 'donation')"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <table class="table" id="table-id">
</table>
<div class="pagination-container">
  <nav>
    <ul class="pagination">
      <li data-page="prev">
      <span> < <span class="sr-only">(current)</span></span>
      </li>
      <li data-page="next" id="prev">
      <span> > <span class="sr-only">(current)</span></span>
      </li>
    </ul>
  </nav>
</div>

    <!-- /.card-body -->
</div>