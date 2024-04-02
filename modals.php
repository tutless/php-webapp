      <!-- /.example-modal -->

      <div class="example-modal">
        <div class="modal modal-info" id="mdDate">
          <div class="modal-dialog" >
            <div class="modal-content">
                <form class="form-horizontal" method="post" action="update-Date.php">

              <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>-->
                <h4 class="modal-title">Input Date</h4>
              </div>
              <div class="modal-body">
                  <input type="hidden" name="transid" id="transid" value="">
                  <input type="hidden" name="updatefield" id="updatefield" value="">
                  <input type="hidden" name="formMode" id="formMode" value="">


                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Select Date</label>
                    <div class="col-sm-10">
                      <input name="datevalue" type="text" class="form-control" id="txtunitbrand" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask required="required">
                    </div>
                  </div>


                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" id="closeDate">Close</button>
                <button type="submit" class="btn btn-outline" id="addDate" > Add </button>
              </div>
                </form>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
      <!-- /.example-modal -->
