<?php
require_once('DBconnect.php');

if(isset($_POST['subscription_id']) && isset($_POST['email']) && isset($_POST['amount']) && isset($_POST['start_date'])){
	$sub_id = $_POST['subscription_id'];
	$sub_email = $_POST['email'];
	$amount = $_POST['amount'];
	$start_date = $_POST['start_date'];
    $end_date = date('Y-m-d', strtotime($start_date. ' + 30 days'));

    $sql = "SELECT name FROM user WHERE email = '$sub_email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $sql_add = " INSERT INTO subscription VALUES( '$sub_id', '$amount','$sub_email', '$start_date', '$end_date' ) ";
        
        $result_add = mysqli_query($conn, $sql_add);
        // echo "ran successfully";
        if(mysqli_affected_rows($conn)){
            //echo "Inserted Successfully";
            // header("Location: admin_dashboard.php");
            echo "<script>
            alert('Add Subscription Successfully');
            window.location.href = 'adminSubscriptionControl.php';
        </script>";
        }
        else{
            echo "<script>
            alert('Some thing went wrong !!!');
            window.location.href = 'adminSubscriptionControl.php';
        </script>";
        }
    }
    else{
        echo "<script>
            alert('user does not exists or has not loged in wet !!');
            window.location.href = 'adminSubscriptionControl.php';
        </script>";
    }
	
	
}
?>