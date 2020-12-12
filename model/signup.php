<?php 
    if (isset($_POST['btn-singup'])) {
        require("../controller/db.php");
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $password = $_POST['password'];



        $sql = "SELECT * FROM users ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $count = 0;
    
        if($row['email'] == $email){
                echo "<h6 class='text-danger mt-2'>Email alredy in the Data Base!</h6>";
        }else{

        //switch to get the selected value from the dropdown options
            switch ($department) {
                case 'Human-Resources':
                        try {
                            $stmt = $conn->prepare("INSERT INTO users SET fname='$fname', lname='$lname', department='$department', level='user', email='$email', password='$password'");
                            $stmt->execute();
                        //header('Location: ../view/dashboard-admin.php');
                        echo "<h6 class='text-danger mt-2'>User Added!</h6>";
                        } catch (PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                        }
                    break;
                    case 'accounting':
                        try {
                            $stmt = $conn->prepare("INSERT INTO users SET fname='$fname', lname='$lname', department='$department', level='user', email='$email', password='$password'");
                            $stmt->execute();
                        //header('Location: ../view/dashboard-admin.php');
                        echo "<h6 class='text-danger mt-2'>User Added!</h6>";
                        } catch (PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                        }
                    break;
                    case 'marketing':
                        try {
                            $stmt = $conn->prepare("INSERT INTO users SET fname='$fname', lname='$lname', department='$department', level='user', email='$email', password='$password'");
                            $stmt->execute();
                        //header('Location: ../view/dashboard-admin-admin');
                        echo "<h6 class='text-danger mt-2'>User Added!</h6>";
                        } catch (PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                        }
                    break;
                    case 'IT-Department':
                        try {
                            $stmt = $conn->prepare("INSERT INTO users SET fname='$fname', lname='$lname', department='$department', level='admin', email='$email', password='$password'");
                            $stmt->execute();
                        //header('Location: ../view/dashboard-admin.php');
                        echo "<h6 class='text-danger mt-2'>User Added!</h6>";
                        } catch (PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                        }
                    break;
                default:
                    # code...
                    break;
            }
        }

    }
?>