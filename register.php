
              <h4 class="form-title"><b>REGISTER</b></h4>
            </div>
            <div class="form-body">
              <form class="form-horizontal" method="POST" action="formaction.php">
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="varchar" class="form-control" id="email" name="email" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>

              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="form"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>