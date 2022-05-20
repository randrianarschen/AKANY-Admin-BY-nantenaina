<div class="card">
    <p id="error_msg"> <?= $error_msg; ?></p>
    <div class="card-header">
        <h3 class="card-title">Toutes les responsables</h3>
<!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10px">N°</th>
                    <th>Nom</th>
                    <th >Prénom</th>
                    <th>fonction</th>
                    <th>Image</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($responsibles as $responsible) {
                    $i++;
                    ?>
                    <tr id="<?= 'row' . $i; ?>">
                        <td ><?= $i ?>.</td>
                        <input type="hidden" id="<?= 'id' . $i; ?>" value="<?= $responsible['id']; ?>" name="id">
                        <td  class="td<?=$i;?>"  id="<?= 'td1' . $i; ?>"> <?= $responsible['name_resp']; ?></td>
                          <td  class="td<?=$i;?>" id="<?= 'td2' . $i; ?>"><?= $responsible['firstname_resp']; ?></td>
                          <td  class="td<?=$i;?>" id="<?= 'td3' . $i; ?>"><?= $responsible['function']; ?></td>
                        <td  class="td<?=$i;?>" id="<?= 'td4' . $i; ?>"><img id="<?= 'image' . $i; ?>" src="./views/images/Responsibles/<?= $responsible['image']; ?>" alt="" width="100px" height="100px"></td>
                        <td>
                            <button type="submit" class="btn btn-primary btn-sm" id="<?= 'edit_button' . $i; ?>"  onclick="edit_row(event,'<?= $i; ?>', 4)"> <i class="fas fa-pencil-alt"></i></button>
                            <button type="submit" id="<?= 'save_button' . $i; ?>" class="btn btn-success btn-sm" class="save" style="display:none;" onclick="save_row(event, '<?= $i; ?>', 'Responsible','updateRowResp', 4);"><i class="fas fa-check"></i></button>
                            <button type="submit" class="btn btn-danger btn-sm" id="delete_button<?=$i;?>" onclick="delete_row(event, '<?= $i; ?>', 'Responsible')"><i class="fas fa-trash"></i></button>

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