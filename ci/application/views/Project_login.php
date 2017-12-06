<!DOCTYPE html>
<html>
<head>
	<title>Branded Login/signup</title>
	<meta name="viewport" content="width= device-width, initial-state=1">

<script src="../assets/css/js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="../assests/css/bootstrap.css"/>
</head>
<body>

<div class="container">
<?php echo form_open('Branded_Watches/Login',['class'=>'form-horizontal']); ?>
  <fieldset style="margin-top: 5%;">
    <legend>Login form</legend>
    <div class="form-group">
      
      <label for="Username" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      <?php  echo form_input(['name'=>'username',set_value('username'),'class'=>'form-control','placeholder'=>'username']);  ?>
      <div >
       <?php echo form_error('username'); ?>
      </div>
      </div>
      

      
    </div>

    <div class="form-group">
      <label for="Password" class="col-lg-2 control-label">password</label>
      <div class="col-lg-10">
      <?php  echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']);  ?>
        
        
        <div>
        <?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>
      </div>
        </div>
       
        <br><br><br><br>
         
        

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <?php  echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-success']); ?>
        
        <br><hr>
        <p>if u dont have id have one</p>
        <a href="signup_page" class="btn btn-primary">Sign up</a>


      </div>
    </div>
  </fieldset>
  <?php echo form_close(); ?>
</form>
</div>





</body>
</html>