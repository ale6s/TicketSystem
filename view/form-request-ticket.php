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

<?php 
    require("../controller/db.php");
    
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>


<body>
    <div class="container">
        <div class="row profile">

            <?php 
                include('menu.php');
                if($row['level'] == 'user'){
                    ?>

            <div class="col-md-9 mt-2">
                <div class="profile-content text-center">
                    <h1 class="col-sm-12">Create a New Ticket</h1>
                    <form action="" method="POST">

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input type="text" name="fname"  class="form-control" value="<?php echo $row['fname'] ?>" readonly="readonly" /> 
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="lname" class="form-control" type="text" value="<?php echo $row['lname'] ?>" readonly="readonly" />
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" type="text" value="<?php echo $row['email'] ?>" readonly="readonly" />
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            </div>
                            <input name="departmnet" class="form-control" type="text" value="<?php echo $row['department'] ?>" readonly="readonly" />
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-heading"></i> </span>
                            </div>
                            <input name="title" class="form-control" type="text" placeholder="Title" required />
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-exclamation-triangle"></i> </span>
                            </div>
                            <select name="priority" class="form-control">
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-comments"></i> </span>
                            </div>
                            <textarea name="comments" class="form-control" rows="5" placeholder="Commnets..."></textarea>
                        </div>

                        <input type="submit" class="btn btn-success btn-md" name="btn-new-ticket" value="Add Ticket" />
                        <a class="btn btn-primary btn-md" href="../view/dashboard.php">Dashboard</a>

                    </form>
                    <?php include('../model/request_ticket.php'); ?>
                </div>
            </div>
        </div>
    </div>
<?php
}else{
		header("Location: dashboard-admin.php");
	}
?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>