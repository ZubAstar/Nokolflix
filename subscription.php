<?php
require_once 'DBconnect.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $sub_email = $_POST['sub_email'];
    $sub_password = $_POST['sub_password'];
    $current_date = date("Y-m-d");

    //checking if he is a admin
    $sql_admin = "SELECT * FROM admin WHERE email = '$sub_email' AND password = '$sub_password'";
    $result_admin = mysqli_query($conn, $sql_admin);

    if (mysqli_num_rows($result_admin) > 0){
        header("Location: adminSubscriptionControl.php");
    }
    else{
        // echo "not admin";
        $sql_date = " SELECT * FROM subscription WHERE sub_email = '$sub_email' AND end_date >= '$current_date' "; //checkding date for subcription
        $result_date = mysqli_query($conn, $sql_date);
    
        if(mysqli_num_rows($result_date) > 0){
            $sql_password = "SELECT u.username FROM user u, subscription s WHERE u.email = s.sub_email AND s.sub_email = '$sub_email' AND u.password = '$sub_password'";
            $result_password = mysqli_query($conn, $sql_password);
            if (mysqli_num_rows($result_password) > 0){
                //echo "connection is builded bro";//header add later
                header("Location: premiumPage.php");
            }
            else{
                echo "<script>
            alert('Wrong Passwords !');
            window.location.href = 'signIn.php';
        </script>";
            }
        }
        else{
            echo "<script>
            alert('Your Subscription has Ended !');
            window.location.href = 'signIn.php';
        </script>"; //add some feature
        }
    }
}
?>
