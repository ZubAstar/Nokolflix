<?php
require_once('DBconnect.php');

if(isset($_POST['subscription_id'])){
    $sub_id = $_POST['subscription_id'];
    $amount = $_POST['amount'];
    $start_date = $_POST['start_date'];

    if ($start_date == ""){
        $sql = "UPDATE subscription SET amount = '$amount' WHERE sub_id = '$sub_id'";
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "<script>
            alert('Update Subscription Successfully');
            window.location.href = 'adminSubscriptionControl.php';
            </script>";
        }
        else{
            echo "<script>
            alert('Error updaing subscription');
            window.location.href = 'adminSubscriptionControl.php';
            </script>";
        }
    }
    else{
        $end_date = date('Y-m-d', strtotime($start_date. ' + 30 days'));
        $sql = "UPDATE subscription SET amount = '$amount', start_date = '$start_date', end_date = '$end_date' WHERE sub_id = '$sub_id'";
        $result = mysqli_query($conn, $sql);

        if ($result){
            echo "<script>
            alert('Update Subscription Successfully');
            window.location.href = 'adminSubscriptionControl.php';
            </script>";
        }
        else{
            echo "<script>
            alert('Error updaing subscription');
            window.location.href = 'adminSubscriptionControl.php';
            </script>";
        }
    }

}
