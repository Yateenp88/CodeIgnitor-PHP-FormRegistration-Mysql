<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
</head>
<body>
 <?php  $msg=$this->session->set_flashdata('msg'); 
        if($msg !="")
        {
            echo "<div class='alert alert-success'>'.$msg.'</div>";
        }
     
 ?>
    <div class="col-md-7">
    <div class="card">
        <div class="card-header">
        Registration Form
        </div>
        <div class="card-body">
          <h7 class="card-title" style="color:brown;float:right">all field are mandatory* </h7>
          <form action="<?php echo base_url().'index.php/Auth/register' ?>" name="registerForm" id="registerForm" method="post">  
          <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo set_value('fname'); ?>" class="form-control <?php echo (form_error('fname') !="") ? 'is-valid' : '';?>" placeholder="First Name">
                <p  class="invalid-feedback" ><?php echo form_error('fname')?></p>
            </div>  
            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo set_value('lname'); ?>" class="form-control <?php echo (form_error('lname') !="") ? 'is-valid' : '';?>" placeholder="Last Name">
                <p class="invalid-feedback"><?php echo form_error('lname')?></p>
            </div>  
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control <?php echo (form_error('email') !="") ? 'is-valid' : '';?>" placeholder="Email">
                <p class="invalid-feedback"><?php echo form_error('email')?></p>
            </div>  
            <div class="form-group">
                <label for="name">Phone</label>
                <input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>" class="form-control <?php echo (form_error('phone') !="") ? 'is-valid' : '';?>" placeholder="Phone">
                <p class="invalid-feedback"><?php echo form_error('phone')?></p>
            </div>  
            <div class="form-group">
                <label for="name">Password</label>
                <input type="text" name="pwd" id="pwd" value="<?php echo set_value('pwd'); ?>" class="form-control <?php echo (form_error('pwd') !="") ? 'is-valid' : '';?>" placeholder="Password">
                <p class="invalid-feedback"><?php echo form_error('pwd')?></p>
            </div>  
             
            <div class="form-group"> 
          <input type="submit" class="btn btn-block btn-primary" value="Submit"></input>
          </div>  
        </form>
        </div>
        </div>
    </div>
</body>
</html>