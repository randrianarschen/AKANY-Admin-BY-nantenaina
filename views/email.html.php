<section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="" class="btn btn-primary btn-block mb-3"><i class="fa-solid fa-pen-clip"></i> &nbsp;  &nbsp; Nouveau message</a>
          <a href="" class="btn btn-primary btn-block mb-3"><i class="fa-solid fa-angle-left"></i>&nbsp;  &nbsp; retourner à la boite</a>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dossier</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="#" class="nav-link">
                    <i class="fas fa-inbox"></i> Boîte-Email
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-envelope"></i> Message envoyés
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-file-alt"></i> Brouillons
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-filter"></i> Message indésirable
                    <span class="badge bg-warning float-right">65</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-trash-alt"></i> Corbeille
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <?=$content;?>
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>