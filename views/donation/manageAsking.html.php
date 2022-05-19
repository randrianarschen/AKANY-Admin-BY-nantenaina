<div class="card">
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
        <table class="table">
            <thead>
                <tr>
                    <?php echo"bon voyage";?>
                    <th style="width: 10px">N°</th>
                    <th>But</th>
                    <th>Montant</th>
                    <th style="width: 40px">Motif</th>
                    <th style="width: 40px">Date</th>
                    <th>Image</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                $i = 0;
                foreach ($donations as $donation) {
                ++$i;
                ?>

                    <tr id="<?= 'row' .$i; ?>">
                        <td><?= $i ?>.</td>
                        <td id="<?= 'td1' .$i; ?>"><?= $donation['sujet']; ?></td>
                        <td id="<?= 'td2' .$i; ?>"><?=$donation['montant'];?></td>
                        <td id="<?= 'td3' .$i; ?>"><?=$donation['motif'];?></td>
                         <td id="<?= 'td4' .$i; ?>"><?= $donation['cree_a'] ?></td>
                        <td id="<?= 'td5' .$i; ?>"><img src="views/images/donation/<?=$donation['image'] ;?>" width="100" height="100"></td>
                        <td>
                        <button type="submit" class="btn btn-primary btn-sm" id="<?= 'edit_button'.$i; ?>"  class="edit" onclick="edit_row(event,'<?= $i; ?>')"> <i class="fas fa-pencil-alt"></i></button>
                                       <button type="button" class="btn btn-secondary btn-sm" id="<?='cancel'.$i?>" style="display:none" onclick="cancel(event, '<?= $i; ?>')"><i class="fas fa-ban"></i></button>
                                        <button type="sumbit" id="<?= 'save_button'.$i; ?>" class="btn btn-success btn-sm" class="save" style="display:none;" onclick="save_row(event, '<?= $i; ?>', 'events','updateRowEvent');"><i class="fas fa-check"></i></button>
                                        
                                        <button type="submit"   class="btn btn-danger btn-sm" class="delete" onclick="delete_row(event, '<?=$i; ?>', 'events')"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>