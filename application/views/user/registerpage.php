 <div class="container-fluid">
       <div class="row" id="maincontent">
       		<div class="col-md-3"></div>
            <div class="col-md-6 well" id="registerform">
            	<legend> Create your account ! </legend>
                <?php $attributes = array('id' => 'signup');

                    echo form_open('pages/signup_validation',$attributes);
                    echo validation_errors();
                ?>
                <fieldset>
                <div class="col-md-6"> 
                    <p> ID Number : </p>
                    <div class="form-group"> <input name="idnum" type="text" class="form-control" required/></div>
                    <p> First Name : </p>
                    <div class="form-group"> <input name="fname" type="text" class="form-control" required/></div>
                    <p> Last Name : </p>
                    <div class="form-group"> <input name="lname" type="text" class="form-control" required/></div>
                    <p> Email : </p>
                    <div class="form-group"> <input name="email" type="email" class="form-control" required/></div>
                    <p> Password : </p>
                    <div class="form-group"> <input name="password" id="pass" type="password" class="form-control" required/></div>
                    <p> Confirm Password : </p>
                    <div class="form-group"> <input name="cpassword" type="password" class="form-control" required/></div>
                    <p> Course : </p>
                    <div class="form-group"> <input name="course" type="text" class="form-control" required/></div>
                    <p> Year : </p>
                    <select class="form-control" required name="year">
                        <option value="" disabled default selected class="display-none">Select Year</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>                     
                        <option value='3'>3</option>
                        <option value='4'>4</option>                     
                        <option value='5'>5</option>                     
                    </select>
                    <br></br>
                    <?php 
                        echo form_submit('signup_submit','Create Account','class="btn btn-primary btn-lg btn-block"'); 
                        $data = array(
                            'usertype'  => '1'
                        );
                        echo form_hidden($data); ?>
                    <br></br>
                     
                    </fieldset>
                    <?php echo form_close(); ?>
                </div> 
                
                <div class="col-md-6">
                <center> <img src="305693_451724328181701_473205165_n.png" width="1033" height="200" style="max-height:150%; max-width:100%"> </center>
                </div>
            <div class="col-md-3"></div>

       </div>
      </div> 
<?php 
    echo $success;
    echo $notif;
?>
<script type="text/javascript">
$(document).ready(function(){

        $('#signup').validate({
        rules: {
          idum: {
            minlength: 7,
            required: true
          },
          fname: {
            minlength: 2,
            required: true
          },
          lname: {
             minlength: 2,
             required: true
          },
          email: {
            minlength: 2,
            required: true
          },
          password: {
            minlength: 6,
            required: true
          },
          cpassword: {
            minlength: 6,
            required: true,
             equalTo: "#pass"

          },
           course: {
            minlength: 2,
            required: true
          }
          
        },
            highlight: function(element) {
                $(element).closest('.input-control').removeClass('success-state').addClass('error-state');
            },
            success: function(element) {
                element
                    .closest('.input-control').removeClass('error-state').addClass('success-state');
            },
            
            messages: {
              name: "Please specify your name",
              email: {
                  required: "We need your email address to contact you",
                  email: "Your email address must be in the format of name@domain.com"
              },
             cPassword:{equalTo: "Password doesnt match"}
            }
      });

}); // end document.ready

</script> 