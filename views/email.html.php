<section class="content">
      <div class="row">
        <div class="col-md-3">
        <a href="index.php?controller=Mailbox&task=newMessage" class=" btn btn-danger btn-block mb-3"><i class="fa-solid fa-pen-clip"></i> &nbsp;  &nbsp; Nouveau message</a>
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
                  <a href="index.php?controller=Mailbox&task=index" class="nav-link">
                    <i class="fas fa-inbox"></i> Boîte-Email
                    <span class="badge bg-danger float-right">12</span>
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