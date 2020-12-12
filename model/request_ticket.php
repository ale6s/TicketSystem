<?php 
    if (isset($_POST['btn-new-ticket'])) {
        require("../controller/db.php");
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $department = $_POST['departmnet'];
        @$priority = $_POST['priority'];
        $comments = $_POST['comments'];
        $title = $_POST['title'];

        

        //switch to get the selected value from the dropdown options
        
            switch ($priority) {
                case 'low':
                        try {
                            $stmt = $conn->prepare("INSERT INTO request_ticket SET fname='$fname', lname='$lname', department='$department', email='$email', title='$title', priority='$priority', comments='$comments', status='pending..'");
                            $stmt->execute();
                        echo "<h6 class='mt-2 text-danger'>Ticket added!</h6>";
                        } catch (PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                        }
                    break;
                    case 'medium':
                        try {
                            $stmt = $conn->prepare("INSERT INTO request_ticket SET fname='$fname', lname='$lname', department='$department', email='$email', title='$title', priority='$priority', comments='$comments', status='pending..'");
                            $stmt->execute();
                            echo "<h6 class='mt-2 text-danger'>Ticket added!</h6>";
                        } catch (PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                        }
                    break;
                    case 'high':
                        try {
                            $stmt = $conn->prepare("INSERT INTO request_ticket SET fname='$fname', lname='$lname', department='$department', email='$email', title='$title', priority='$priority', comments='$comments', status='pending..'");
                            $stmt->execute();
                            echo "<h6 class='mt-2 text-danger'>Ticket added!</h6>";
                        } catch (PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                        }
                    break;
                default:
                    echo "<h6 class='mt-2 text-danger'>please select priority!</h6>";
                    break;
            }
    

    }
    
?>