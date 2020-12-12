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
$id = $_REQUEST['id'];

$sql = "SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($sql);
$row_edit = $result->fetch_assoc();


if (isset($_POST['btn-edit-user'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $department = $_POST['department'];

    try {
        switch ($department) {
            case 'Human-Resources':
                    try {
                        $stmt = $conn->prepare("UPDATE users SET lname='$lname', fname='$fname', email='$email', password='$password', department='$department', level='user' WHERE id= '$id'");
                        $stmt->execute();
                
                        header("Location: ../view/user-settings.php");
                    } catch (PDOException $e) {
                        echo 'ERROR: ' . $e->getMessage();
                    }
                break;
                case 'accounting':
                    try {
                        $stmt = $conn->prepare("UPDATE users SET lname='$lname', fname='$fname', email='$email', password='$password', department='$department', level='user' WHERE id= '$id'");
                        $stmt->execute();
                
                        header("Location: ../view/user-settings.php");
                    } catch (PDOException $e) {
                        echo 'ERROR: ' . $e->getMessage();
                    }
                break;
                case 'marketing':
                    try {
                        $stmt = $conn->prepare("UPDATE users SET lname='$lname', fname='$fname', email='$email', password='$password', department='$department', level='user' WHERE id= '$id'");
                        $stmt->execute();
                
                        header("Location: ../view/user-settings.php");
                    } catch (PDOException $e) {
                        echo 'ERROR: ' . $e->getMessage();
                    }
                break;
                case 'IT-Department':
                    try {
                        $stmt = $conn->prepare("UPDATE users SET fname='$fname', lname='$lname', email='$email', password='$password', department='$department', level='admin' WHERE id= '$id'");
                        $stmt->execute();
                
                        header("Location: ../view/user-settings.php");
                    } catch (PDOException $e) {
                        echo 'ERROR: ' . $e->getMessage();
                    }
                break;
            default:
                # code...
                break;
        }

    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

?>


<body>
    <div class="container">
        <div class="row profile">

            <?php
            include('../view/menu.php');

            ?>

            <div class="col-md-9 mt-2">
                <div class="profile-content text-center">
                <h1 class="col-sm-12">Edit User</h1>

                    <form action="" method="POST">

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input type="text" name="fname" class="form-control" value="<?php echo $row_edit['fname'] ?>"/>
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="lname" class="form-control" type="text" value="<?php echo $row_edit['lname'] ?>" />
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" type="text" value="<?php echo $row_edit['email'] ?>" />
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
                            </div>
                            <input name="password" class="form-control" type="text" value="<?php echo $row_edit['password'] ?>"  />
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">  <i class="fa fa-building"></i> </span>
                            </div>
                            <?php
                                if($row_edit['department'] == 'Human-Resources'){
                                    ?>
                                <select class="form-control" name="department">
                                <option selected="true" value="Human-Resources">HR</option>
                                <option value="accounting">Accounting</option>
                                <option value="marketing">Marketing</option>
                                <option value="IT-Department">IT - Admin</option>
                                </select>
                                    <?php
                                }elseif($row_edit['department'] == 'accounting'){
                                    ?>
                                <select class="form-control" name="department">
                                <option value="Human-Resources">HR</option>
                                <option selected="true" value="accounting">Accounting</option>
                                <option value="marketing">Marketing</option>
                                <option value="IT-Department">IT - Admin</option>
                                </select>
                                    <?php
                                }elseif($row_edit['department'] == 'marketing'){
                                    ?>
                                <select class="form-control" name="department">
                                <option value="Human-Resources">HR</option>
                                <option value="accounting">Accounting</option>
                                <option selected="true" value="marketing">Marketing</option>
                                <option value="IT-Department">IT - Admin</option>
                                </select>
                                    <?php
                                }elseif($row_edit['department'] == 'IT-Department'){
                                    ?>
                                <select class="form-control" name="department">
                                <option value="Human-Resources">HR</option>
                                <option value="accounting">Accounting</option>
                                <option value="marketing">Marketing</option>
                                <option selected="true"  value="IT-Department">IT - Admin</option>
                                </select>
                                    <?php
                                }
                            ?>

                        </div>

                        <input type="submit" class="btn btn-success btn-md" name="btn-edit-user" value="Update Ticket" />
                        <a class="btn btn-danger btn-md" href="../view/user-settings.php">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>