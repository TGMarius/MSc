<!DOCTYPE html>
<html>
<head>
    <title>
        The Movie Temple
    </title>
</head>
<body>

<?php
    include 'includes/header.php';
?>

<div class="container">

    <div class="alert alert-success" role="alert" id="registered-success" style="display:none"></div>
    <div class="alert alert-danger" role="alert" id="registered-fail" style="display:none"></div>
    <form class="form-horizontal" role="form" method="POST" action='processes/register.php' id="registration-form">
        <h2>Register</h2>

        <!--First name-->
        <div class="form-group" >
            <label for="firstName" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="First Name" class="form-control" name="first_name" autofocus >
            </div>
        </div>

        <!--Last Name-->
         <div class="form-group">
            <label for="lasttName" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" id="lastName" placeholder="Last Name" class="form-control" name="last_name" >
            </div>
        </div>

        <!--Email-->
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name="email" >
            </div>
        </div>

        <!--Password-->
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control" name="password" >
            </div>
        </div>

        <div class="form-group">
            <label for="repeatPassword" class="col-sm-3 control-label">Repeat Password</label>
            <div class="col-sm-9">
                <input type="Password" id="repeatPassword" placeholder="Repeat Password" class="form-control" name="confirm_password" >
            </div>
        </div>

        <!--Gender-->
        <div class="form-group">
            <label for="gender" class="col-sm-3 control-label">Gender</label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" id="gender" name="gender" value="male" checked>Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="female">Female
                </label>
            </div>
        </div>

        <!--T & C's ToDo
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="register_t_and_c" value="1">I accept <a  id="hipelink-like" data-toggle="modal" data-target="#register-t-and-c">terms</a>
                    </label>
                </div>
            </div>
        </div>-->

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form> 
</div> 

<!--t&c Modal-->
<div class="modal fade" id="register-t-and-c" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="float:right">&times;</span>
          </button>
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem 
          ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
        </div>
        
      </div>
    </div>
</div>

<script type="text/javascript">

    $("#registration-form").submit(function(e) {
    var show_fail = $("#registered-fail").show().delay(3000).fadeOut();
    
    $.ajax({
           type: "POST",
           url: "processes/register.php",
           data: $("#registration-form").serialize(), 
           success: function(data)
           {

                if(data == 1){
                    $("#registered-fail").text('Password must be more than 7 characters long.');    
                    show_fail;
                }
                else if (data == 2){
                    $("#registered-fail").text('Passwords do not match.');    
                    show_fail

                }
                else if (data == 3){
                    $("#registered-fail").text('One or more fields are empty.');    
                    show_fail
                }
                else if (data == 5){
                    $("#registered-fail").text('Email already in use.');    
                    show_fail
                }
                else{
                    $("#registered-success").text('You have been registered! please Login.');    
                    $("#registered-success").show().delay(3000).fadeOut();;   
                    $("#registration-form")[0].reset(); //clear form
                }


                //$("#registered-success").show(); //show alert message
                //$("#registration-form")[0].reset(); //clear form
                //alert(data); // show response from the php script.

           },
           error: function()
           {
                alert("Woops! Something went wrong. Please Try again later");
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});


</script>

<!--Footter-->
<?php
    include 'includes/footer.php';
?>


</body>
</html>