<?php

function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from user where email = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    
    //header("Location: sign_in.php");
    //die;
}

function check_merchant($con)
{
    if(isset($_SESSION['merchant_id']))
    {
        $merch_id = $_SESSION['merchant_id'];
        $merch_query = "select * from merchant where storename = '$merch_id' limit 1";

        $merch_result = mysqli_query($con, $merch_query);
        if($merch_result && mysqli_num_rows($merch_result) > 0)
        {
            $merchant_data = mysqli_fetch_assoc($merch_result);
            return $merchant_data;
        }
    }
 //   header("Location: merchant_sign_in.php");
    //die;
}


function check_store($con)
{
    if(isset($_SESSION['merchant_id']))
    {
        $merch_id = $_SESSION['merchant_id'];
        $merch_query = "select * from merchants where username = '$merch_id' limit 1";

        $merch_result = mysqli_query($con, $merch_query);
        if($merch_result && mysqli_num_rows($merch_result) > 0)
        {
            $merchant_data = mysqli_fetch_assoc($merch_result);
            return $merchant_data;
        }
    }
}