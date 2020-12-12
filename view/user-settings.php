<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a2ee341a31.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>user history</title>
</head>

<body>
    <div class="">
        <div class="row profile">

            <?php
            include('menu.php');
            //only admin users have access to this page, otherwise redirected to dashboard.php
            if($row['level'] == 'admin'){

            ?>

            <div class="col-md-9 mt-2">
                <div class="profile-content text-center">
                    <h1 class="col-sm-12">User Settings</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Password</th>
                                <th scope="col">User Level</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <?php
                        require("../controller/db.php");
                        //using the current seccion variable from the user that is currently only this way we only show the tickets of the user that have the same email
                        $curent_user = $_SESSION['id'];

                        $sql = "SELECT * FROM users ";
                        $result = $conn->query($sql);

                        while ($rows = $result->fetch_assoc()) {
                            $id = $rows['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <?php 
                                        if($curent_user == $rows['id']){
                                            ?>
                                            <td class="font-weight-bold bg-info"><?php echo $rows['id']; ?></td>
                                            <td class="font-weight-bold bg-info"><?php echo $rows['fname']; ?></td>
                                            <td class="font-weight-bold bg-info"><?php echo $rows['lname']; ?></td>
                                            <td class="font-weight-bold bg-info"><?php echo $rows['email']; ?></td>
                                            <td class="font-weight-bold bg-info"><?php echo $rows['department']; ?></td>
                                            <td class="font-weight-bold bg-info"><?php echo $rows['password']; ?></td>
                                            <td class="font-weight-bold bg-info"><?php echo $rows['level']; ?></td>
                                            <td class="font-weight-bold bg-info"><?php echo "<a class='btn btn-warning btn-sm' href='../model/edit-user.php?id=$id' >Edit</a>
                                            <a onClick=\"javascript: return confirm('Please confirm deletion');\" href='../model/delete-user.php?id=$id' class='btn btn-danger disabled btn-sm' href=''>Delete</a>"; ?></td><?php
                                        }else{
                                            ?>
                                            <td><?php echo $rows['id']; ?></td>
                                            <td><?php echo $rows['fname']; ?></td>
                                            <td><?php echo $rows['lname']; ?></td>
                                            <td><?php echo $rows['email']; ?></td>
                                            <td><?php echo $rows['department']; ?></td>
                                            <td><?php echo $rows['password']; ?></td>
                                            <td><?php echo $rows['level']; ?></td>
                                            <td><?php echo "<a class='btn btn-warning btn-sm' href='../model/edit-user.php?id=$id' >Edit</a>
                                            <a onClick=\"javascript: return confirm('Please confirm deletion');\" href='../model/delete-user.php?id=$id' class='btn btn-danger btn-sm' href=''>Delete</a>"; ?></td><?php
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                    <a class="btn btn-primary btn-md" href="../view/dashboard.php">Dashboard</a>
                    <a class="btn btn-info btn-md" href="../view/signup.php">Add New User</a>
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