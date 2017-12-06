<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Sign up</title>

<meta name="viewport" content="width= device-width, initial-state=1">
<script src="../assets/css/js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="../assests/css/bootstrap.css"/>
</head>
<body>
    <div class="container">
         <?php echo form_open('Branded_Watches/formRegister',['class'=>'well form-horizontal','id'=>'contact_form']); ?>
    <!-- <form class="well form-horizontal" action=" " method="post"  id="contact_form"> -->
<fieldset>


<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <?php echo form_input('First_name',set_value('First_name',''),['class'=>'form-control','placeholder'=>'First name']);
      ?>

    </div>
    <?php echo form_error('First_name'); ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <?php echo form_input('Last_name',set_value('Last_name',''),['class'=>'form-control','placeholder'=>'Last name']);  
      
  ?>
    </div>
    <?php echo form_error('Last_name'); ?>
  </div>
</div>
  
<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <?php  echo form_input('user_name',set_value('user_name',''),['class'=>'form-control','placeholder'=>'Username']); ?>
    </div>
    <?php echo form_error('user_name'); ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <?php  echo form_password('user_password',set_value('user_password',''),['class'=>'form-control','placeholder'=>'Password']); ?> 
    </div>
    <?php echo form_error('user_password'); ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <?php  echo form_password('confirm_password',set_value('confirm_password',''),['class'=>'form-control','placeholder'=>'confirm_password']); ?>
    </div>
    <?php echo form_error('confirm_password'); ?>
  </div>
</div>

       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <?php  echo form_input('email',set_value('email',''),['class'=>'form-control','placeholder'=>'E-Mail']); ?>
    </div>
    <?php echo form_error('email');?>
  </div>

</div>


<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    <!-- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp SUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button> -->
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <?php  echo form_submit('submit','create account',['class'=>'btn btn-warning','spanclass'=>'glyphicon glyphicon-send']); ?>
    <span class="glyphicon glyphicon-send"></span>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
</body>
</html>