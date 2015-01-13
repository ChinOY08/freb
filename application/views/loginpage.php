<br>
       <br>
       <div class="container-fluid">
       <div class="row" id="maincontent" style="margin-top:-40px">
       		<div class="col-md-7"> <p style=" font-size:70px;padding-top:150px; padding-left:50px; color:#FFF; font-family:'Arial Black', Gadget, sans-serif"> WELCOME! </h1>
            	<p style=" font-size:30px; padding-left: 50px; color:#FFF; font-family:'Arial Black', Gadget, sans-serif"> Facility Reservation and Equipment Borrowing Now Made                Easier <br> LOG IN NOW ! </p>
            </div>
            <div class="col-md-3 well" id="loginform" style="margin-top:150px">
                <br>
                <form action="<?php echo base_url('pages/login_validation') ?>" method="post">
                 <?php
                   // echo form_open('main/login_validation'); 
                    echo validation_errors();
                   ?>  
                 </fieldset>
                  </br>
  					         <input type="text" class="form-control" value="<?php echo $this->input->post('idnum');?>" placeholder="ID Number" name="idnum" required>
                    <br>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <br>
                    <?php echo form_submit('login_submit','Sign In','class="btn btn-primary btn-lg btn-block"'); ?>
               </fieldset>
                
				</form>
                <br>
                <h4 id="registerhere" style="font-family:'Georgia', 'Times New Roman', 'Times, serif'"> <a href="<?php echo base_url('pages/registerpage') ?>">Register here </a> for non-CS. </h4>
                
                
                
             </div>
             
            <div class="col-md-3"> </div>
       </div>
      </div>  