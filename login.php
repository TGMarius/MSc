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
    <form class="form-horizontal" role="form" type="POST" action='processes/login.php' id="login-form">
        <h2>Login</h2>

        <!--Email-->
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" name="email" class="form-control">
            </div>
        </div>

        <!--Password-->
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" name="password" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    </form> 
</div> 

<script type="text/javascript">

    $("#login-form").submit(function(e) {
    //var show_fail = $("#registered-fail").show().delay(3000).fadeOut();
    
    $.ajax({
           type: "POST",
           url: "processes/login.php",
           data: $("#login-form").serialize(), 
           success: function(data)
           {

                /*if(data == 1){
                    $("#registered-fail").text('Password must be more than 7 characters long.');    
                    show_fail;
                }*/

                //$("#registered-success").show(); //show alert message
                //$("#registration-form")[0].reset(); //clear form
                alert(data); // show response from the php script.

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