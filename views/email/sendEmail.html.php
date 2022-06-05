<div class="col-md-9">
            <div class="card  card-outline">
              <div class="card-header bg-dark">
                <h3 class="card-title"> Ecrivez un nouveau message</h3>
              </div>
              <!-- /.card-header -->
              <form method="POST" action = ""  enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <input class="form-control" placeholder="À:" name="to">
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Sujet:" name="subject">
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 100px;"> 
                    </textarea>
                </div>
                <div class="row">
                  <div class="col-2">
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Attachement
                    <input type="file" name="attachment" onchange="detectFileExt(event);">
                  </div>
                 <p class="help-block">Max. 32MO</p></div></div>
                 <div class="col-1"></div>
                 <div class="col-2">
                 <div class="form-group">
                  <div class="btn btn-default btn-file">
                  <i class="fa-solid fa-image"></i> image
                    <input type="file" name="image" onchange="showPreview(event, undefined);"> 
                    <img id="blah" width="75" height="60" style="display:none;">
                  </div>
                  </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Brouillon</button>
               <a href="index.php?controller=mailbox&task=newMessage">   <button type="submit" name="sendEmail" class="btn btn-primary"><i class="far fa-envelope"></i>Envoyer</button></a>
                </div>
                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i>Abandonner</button>
              </div>
              </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>