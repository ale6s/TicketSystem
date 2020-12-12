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
            //only users with user level can have access to this file
            if($row['level'] == 'user'){

            ?>

            <div class="col-md-9 mt-2">
                <div class="profile-content text-center">
                    <h1 class="col-sm-12">Tickets History</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Status</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Title</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Requested Date</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <?php
                        require("../controller/db.php");
                        //using the current seccion variable from the user that is currently only this way we only show the tickets of the user that have the same email
                        $curent_user = $_SESSION['id'];

                        $sql = "SELECT * FROM users WHERE id='$curent_user'";
                        $result = $conn->query($sql);
                        $row_users = $result->fetch_assoc();
                        $email = $row_users['email'];

                        $sql = "SELECT * FROM request_ticket WHERE email = '$email' ORDER BY FIELD(status, 'pending..', 'done')";
                        $result = $conn->query($sql);

                        while ($rows = $result->fetch_assoc()) {
                            $id = $rows['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <!-- if to chnage color of status -->
                                    <?php
                                    if ($rows['status'] == 'pending..') { ?>
                                        <th scope="row" class="text-warning text-capitalize"><?php echo $rows['status']; ?></th>
                                    <?php
                                    } elseif ($rows['status'] == 'done') {
                                    ?>
                                        <th scope="row" class="text-success text-capitalize"><?php echo $rows['status']; ?></th>
                                    <?php
                                    }
                                    ?>
                                    <!-- end of if to chnage color of status-->

                                    <td><?php echo $rows['fname'] . " " . $rows['lname']; ?></td>
                                    <td><?php echo $rows['email']; ?></td>
                                    <td><?php echo $rows['department']; ?></td>
                                    <td><?php echo $rows['title']; ?></td>

                                    <!-- if to chnage color of priority -->
                                    <?php
                                    if ($rows['priority'] == 'low') { ?>
                                        <td class="bg-success font-weight-bold text-capitalize"><?php echo $rows['priority']; ?></td>
                                    <?php
                                    } elseif ($rows['priority'] == 'medium') {
                                    ?>
                                        <td class="bg-warning font-weight-bold text-capitalize"><?php echo $rows['priority']; ?></td>
                                    <?php

                                    } elseif ($rows['priority'] == 'high') {
                                    ?>
                                        <td class="bg-danger font-weight-bold text-capitalize"><?php echo $rows['priority']; ?></td>
                                    <?php } ?>
                                    <!-- end of if to chnage color of priority -->

                                    <td><?php echo $rows['comments']; ?></td>
                                    <td><?php echo $rows['request_date']; ?></td>
                                    <?php
                                    if ($rows['status'] == 'pending..') {
                                    ?>
                                        <td><?php echo "<a class='btn btn-warning btn-sm' href='../model/edit_ticket.php?id=$id' >Edit</a>
                                                    <a onClick=\"javascript: return confirm('Please confirm deletion');\" href='../model/delete_request.php?id=$id' class='btn btn-danger btn-sm' href=''>Delete</a>"; ?></td>
                                    <?php
                                    }else{
                                        ?>
                                        <td><?php echo "<a class='btn btn-warning btn-sm disabled' href='../model/edit_ticket.php?id=$id' >Edit</a>
                                        <a onClick=\"javascript: return confirm('Please confirm deletion');\" href='../model/delete_request.php?id=$id' class='btn btn-danger btn-sm disabled' href=''>Delete</a>"; ?></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                    <a class="btn btn-primary btn-md" href="../view/dashboard.php">Dashboard</a>
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