<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a2ee341a31.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>SignUp</title>
</head>

<body>
    <div class="container">
        <div class="row profile">
            <?php
            include('menu.php');
            //only admin have access to this file
            if($row['level'] == 'admin'){

            ?>
            <div class="col-md-9 mt-2">
                <div class="profile-content text-center">
                <h1 class="col-sm-12">Register a New User</h1>
                    <form method="POST">
                        <div class="form-group input-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-exclamation-triangle"></i> </span>
                            </div>
                            <select class="form-control" name="department">
                                <option selected="true" disabled="disabled">Department</option>
                                <option value="Human-Resources">HR</option>
                                <option value="accounting">Accounting</option>
                                <option value="marketing">Marketing</option>
                                <option value="IT-Department">IT - Admin</option>
                            </select>
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>

                        <input type="submit" class="btn btn-success btn-md" name="btn-singup" value="Sign Up" />
                        <a class="btn btn-primary btn-md" href="../view/user-settings.php">Users Settings</a>

                    </form>
                    <?php include("../model/signup.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
	}else{
		header("Location: dashboard.php");
	}
?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>