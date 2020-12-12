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
                if($row['level'] == 'admin'){
            ?>

            <div class="col-md-9 mt-2">
                <div class="profile-content text-center">
                    <div class="row">
                        <input type="text" class="form-control ml-5 mt-2 col-sm-3" id="search" placeholder="Search Record..." >
                        <h1 class="col-sm-5">Tickets History</h1>
                    </div>
                    <table class="table table-hover" id="printableArea">
                        <thead>
                            <tr>
                                <th scope="col">Status</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Title</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Requested date</th>
                                <th scope="col">Finished date</th>
                                <th scope="col">Completed By</th>
                            </tr>
                        </thead>
                        <?php
                        require("../controller/db.php");

                        $sql = "SELECT * FROM request_ticket";
                        $result = $conn->query($sql);

                        while ($rows = $result->fetch_assoc()) {
                            $id = $rows['id'];
                        ?>
                            <tbody id="all-tickets">
                                <tr>
                                    <!-- if to chnage color of statis -->
                                    <?php
                                    if ($rows['status'] == 'done') { ?>
                                        <th scope="row" class="text-success text-capitalize"><?php echo $rows['status']; ?></th>
                                        <td><?php echo $rows['fname']." ". $rows['lname']; ?></td>
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
                                    <td><?php echo $rows['finished_date']; ?></td>
                                    <td class="text-info"><?php echo $rows['completed_by']; ?></td>
                                    <?php
                                    } 
                                    ?>
                                    <!-- end of if to chnage color of status-->
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                    <a class="btn btn-primary btn-md" href="../view/dashboard-admin.php">Dashboard</a>
                    <button class="btn btn-info btn-md" onclick="myApp.printTable()" >Print Table</button>
                </div>
            </div>
        </div>
    </div>
    <?php 
	}else{
		header("Location: dashboard.php");
	}
?>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>