<div class="inner-block">
    <div class="cols-grids panel-widget">
    <div class="chute chute-center text-center">
    	<h2>Admin's Profile</h2>
    </div>
    	<div class="row mb40">
    		<div class="chute chute-center text-center">
    		<div class="col-md-4 mb5">
				<div class="demo-grid">
					<code></code>
					<img height=250px width=250px src="<?php echo base_url()?>assets/image/icon.png"/><br />
					<a href="#generalprofile">General Profile</a><br />
					<a href="#changepassword">Change Password</a><br />
				</div>
			</div>
			</div>
			<div class="col-md-8 mb5">
				<div class="demo-grid">
                <?php
                            if ($this->session->flashdata('error')) {
                                echo '<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Oops!</strong> '.$this->session->flashdata('error').'
</div>';
                             }elseif($this->session->flashdata('success')){
                                echo '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> '.$this->session->flashdata('success').'.
</div>';
                                } ?>
					<code></code>
                    <a class="hiddenanchor" id="generalprofile"></a>
                    <a class="hiddenanchor" id="changepassword"></a>
                    <a class="hiddenanchor" id="changegeneral"></a>
                    <div id="wrapper">
                        <div id="general" class="animate form">
                            <table>
                            	<tr>
                            		<td>Username</td>
                            		<td><?php echo $username; ?></td>
                            	</tr>
                            	<tr>
                            		<td>Nama</td>
                            		<td><?php echo $nama; ?></td>
                            	</tr>
                            	<tr>
                            		<td>Date Created</td>
                            		<td><?php echo $date; ?></td>
                            	</tr>
                            	<tr>
                            		<td></td>
                            		<td><a class="btn btn-primary" href="#changegeneral" />Edit Profile</a></td>
                            	</tr>
                            </table>
                        </div>

                        <div id="change" class="animate form">
                            <form action="<?php echo base_url() ?>admin/Auth/chgpass/<?php echo $username;?>" method="POST">
                            <table>
                            	<tr>
                            		<td>Username</td>
                            		<td><input class="form-control" type="text" value="<?php echo $username;?>" name="usern" disabled="" /></td>
                            	</tr>
                            	<tr>
                            		<td>Old Password</td>
                            		<td><input class="form-control" type="password" name="opassword"/></td>
                            	</tr>
                            	<tr>
                            		<td>New Password</td>
                            		<td><input class="form-control" type="password" name="npassword"  /></td>
                            	</tr>
                            	<tr>
                            		<td>Confirm New Password</td>
                            		<td><input class="form-control" type="password" name="cpassword"  /></td>
                            	</tr>
                            	<tr>
                            		<td></td>
                            		<td><input class="btn btn-primary" type="submit" name="submitchange" value="Submit" /> <a href="#generalprofile" type="button" class="btn btn-danger">Cancel</a></td>
                            	</tr>
                            </table>
                            </form>
                            
                        </div>

                        <div id="ganti" class="animate form">
                        	<form action="<?php echo base_url() ?>admin/Auth/chgProfile" method="POST">
                            <table>
                            	<tr>
                            		<td>Username</td>
                            		<td><input class="form-control" type="text" value="<?php echo $username;?>" name="uname" disabled="" /></td>
                            	</tr>
                            	<tr>
                            		<td>Nama</td>
                            		<td><input class="form-control" type="text" name="nama" value="<?php echo $nama; ?>" /></td>
                            	</tr>
                            	<tr>
                            		<td></td>
                            		<td><input class="btn btn-primary" type="submit" name="submitedit" value="Submit Edit" /> <a href="#generalprofile" type="button" class="btn btn-danger">Cancel</a></td>
                            	</tr>
                            </table>
                            </form>
                        </div>

                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
