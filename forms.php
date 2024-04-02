
		              <form class="form-horizontal" action="update-admin-profile.php" method="post">
		                    <div class="form-group">
		                      <label for="username" class="col-sm-2 control-label">Username</label>
		                      <div class="col-sm-10">
		                        <input name="username" type="text" class="form-control" id="username" ">
		                      </div>
		                    </div>
		
		                    <div class="form-group">
		                      <label for="password" class="col-sm-2 control-label">Password</label>
		                      <div class="col-sm-10">
		                        <input name="password" type="text" class="form-control" id="password" value="<?php echo $row['password']; ?>">
		                      </div>
		                    </div>
		              	
		              	
		                    <div class="form-group">
		                      <label for="school" class="col-sm-2 control-label">School</label>
		                      <div class="col-sm-10">
		                        <input name="school" type="text" class="form-control" id="school" value="<?php echo $row['school']; ?>">
		                      </div>
		                    </div>
		
		                    <div class="form-group">
		                      <label for="schoolhead" class="col-sm-2 control-label">School Head</label>
		                      <div class="col-sm-10">
		                        <input name="schoolhead" type="text" class="form-control" id="schoolhead" value="<?php echo $row['schoolhead']; ?>">
		                      </div>
		                    </div>
		
		                    <div class="form-group">
		                      <label for="schoolfocal" class="col-sm-2 control-label">School LR Focal Person</label>
		                      <div class="col-sm-10">
		                        <input name="schoolfocal" type="text" class="form-control" id="schoolfocal" value="<?php echo $row['schoolfocal']; ?>">
		                      </div>
		                    </div>
		
		                    <div class="form-group">
		                      <label for="schoolcode" class="col-sm-2 control-label">School ID</label>
		                      <div class="col-sm-10">
		                        <input name="schoolcode" type="text" class="form-control" id="schoolcode" value="<?php echo $row['schoolcode']; ?>">
		                      </div>
		                    </div>
		
		                    <div class="form-group">
		                      <label for="dlc" class="col-sm-2 control-label">DLC</label>
		                      <div class="col-sm-10">
		                        <input name="dlc" type="text" class="form-control" id="dlc" value="<?php echo $row['dlc']; ?>">
		                      </div>
		                    </div>
		
							<input type="hidden" name="userid" value="<?php echo $_SESSION['MM_adminid']; ?>">
							<input type="hidden" name="subj_tchid" value="<?php echo $_SESSION['MM_adminid'] ;?>" >

		                    <div class="form-group">
		                      <label for="dlc" class="col-sm-2 control-label"></label>
		                      <div class="col-sm-10" style="text-align:center;">
				                <a href="schoolprofile.php" class="btn btn-danger" >Cancel</a>
				                <button type="submit" class="btn btn-success" >Proceed</button>
		                      </div>
		                    </div>
		
					  </form>
