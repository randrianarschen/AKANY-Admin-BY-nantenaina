<section class="content">
  <div class="row">
  <div class="col-md-12">

  <a class="btn   btn-outline-success btn-lg btn-google btn-block text-uppercase btn-outline" href="https://accounts.google.com/AccountChooser/identifier?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&flowName=GlifWebSignIn&flowEntry=AccountChooser"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup and send message Using Google </a>
<!--  <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><i class="fa fa-lock"></i> Signup Now </button> -->
</div>
  </div><br>
      <div class="row">
        <div class="col-md-3">
       
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