<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sanchez Ticketing System</title>
</head>


<body id="bg-color-login">
    <div id="login-wrapper">
        <div class="text-center">
            <img src="https://asanchez.site/images/logo.png" class="mb-2" id="icon" alt="sanchez" />
            <h2 class="text-white mb-3">Help-Desk Ticketing System</h2>
        </div>
        <form method="POST" class="form-group">
            <input type="email" class="form-control mt-3" name="email" placeholder="Email" required>
            <input type="password" class="form-control mt-3" name="password" placeholder="Password" required>
            <input type="submit" class="btn btn-primary mt-3 btn-lg btn-block" name="btn-login" value="Sign In" />
        </form>
        <?php 
        //calling the login form to be displayed on the index page
        include('model/login.php'); ?>
    </div>

</body>

</html>