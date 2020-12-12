<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a2ee341a31.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="container">
    <div class="row profile">
        <?php 
            include('menu.php');
            //check if the user change the name of the url to be a regular user. only admin user have access to this dashboard
            if($row['level'] == 'admin'){
        ?>
		<div class="col-md-9 mt-2">
				<div class="profile-content text-center">
                        <a href="../view/proccess-tickets.php" class="btn btn-warning pl-5 pr-5 pt-5 pb-5 mt-4 ml-2 col-sm-4 text-white font-weight-bold"><i class="fas fa-spinner col-sm-12"></i>Ticket in proccess</a>
                        <a href="../view/all-tickets.php" class="btn btn-primary pl-5 pr-5 pt-5 pb-5 mt-4 ml-2 col-sm-4 text-white font-weight-bold"><i class="fas fa-history col-sm-12"></i>Ticket History</a>  

                        <a href="../view/form-request-admin.php" class="btn btn-success pl-5 pr-5 pt-5 pb-5 mt-4 ml-2 col-sm-4 text-white font-weight-bold"><i class="fas fa-plus col-sm-12"></i>New Ticket</a>
                        <a href="../view/user-settings.php" class="btn btn-info pl-5 pr-5 pt-5 pb-5 mt-4 ml-2 col-sm-4 text-white font-weight-bold"><i class="fas fa-user-cog col-sm-12"></i>User Settings</a>                     					
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