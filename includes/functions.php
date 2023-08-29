<?php

        $servername="127.0.0.1:4000";
        $username="root";
        $password = "";
        $db = "rent";

    $connection = mysqli_connect($servername, $username, $password, $db);

    function post_redirect($url)
    {
        ob_start();
        header('Location: '. $url);
        ob_end_flush();
        die();
    }

    function query($query)
    {
        global $connection;
        $run = mysqli_query($connection, $query);

        if($run) {
            while ($row = $run->fetch_assoc()) {
                $data[] = $row;
            }
            if (!empty($data)) {
                return $data;
            } else {
                return "";
            } 
        }
            else {
                return 0;
            }
        
    }

    function single_query($query)
    {
        global $connection;
        if (mysqli_query($connection, $query)) {
            return "done";
        } else {
            die("no data". mysqli_connect_error($connection));
        }
    }
    function login()
    {
        if (isset($_POST['login']))
        {
            $user_name = trim(strtolower($_POST['user_name']));
            $user_password = trim($_POST['user_password']);
            $_SESSION['user_name'] = $_POST['user_name'];

            if (empty($user_name) or empty($user_password))
            {
                $_SESSION['message'] = "empty_err";
                post_redirect("login.php");
            }
            $query = "SELECT user_name, user_id, user_password FROM user WHERE user_name = '$user_name'";
            $data = query($query);
            if (empty($data))
            {
                $_SESSION['message'] = "loginErr";
                post_redirect("login.php");
            } elseif ($user_password == $data[0]['user_password'] and $user_name == $data[0]['user_name'])
            {
                $_SESSION['user_id'] = $data[0]['user_id'];
                post_redirect("user.php");
            } else
            {
                $_SESSION['message'] = "loginErr";
                post_redirect("login.php");
            }
        }
    }

    function signup()
    {
        if (isset($_POST['signup'])) {
            $user_name = trim(strtolower($_POST['user_name']));
            $user_nagrita = addslashes(file_get_contents($_FILES["user_nagrita"]["tmp_name"]));
            $user_address = trim($_POST['user_address']);
            $user_phone = $_POST['user_phone'];
            $room_no = $_POST['room_no'];
            $user_mail = $_POST['user_mail'];
            $family_member = $_POST['family_member'];
            $user_password = $_POST['user_password'];

            $query = "INSERT INTO user (user_name, user_nagrita, user_address, user_phone, room_no, user_mail, family_member, user_password) Values ('$user_name', '$user_nagrita', '$user_address', '$user_phone','$room_no', '$user_mail','$family_member', '$user_password')";
            $queryStatus = single_query($query);
            $query = "SELECT user_id FROM user WHERE user_mail = '$user_mail' ";
            $data = query($query);
            $_SESSION['user_id'] = $data[0]['user_id'];
            if ($queryStatus == "done") {
                post_redirect("index.php");
            } else {
                $_SESSION['message'] = "went wrong";
                post_redirect("signup.php");
            }
        }
    }

    function payment()
    {
        if (isset($_POST['total'])) {
            $room_id = $_POST['room_id'];
            $user_name =$_POST['user_name'];
            $rent = $_POST['rent'];
            $electricity = $_POST['electricity'];
            $waste = $_POST['waste'];
            $water = $_POST['water'];
            $total = $_POST['total'];

            $query = "INSERT INTO total (room_id, user_name, rent, electricity, waste, water, total) Values ('$room_id', '$user_name', '$rent', '$electricity', '$waste','$water', '$total')";
            $queryStatus = single_query($query);
            $query = "SELECT room_id FROM total WHERE user_name = '$user_name' ";
            $data = query($query);
            $_SESSION['room_id'] = $data[0]['room_id'];
            if ($queryStatus == "done") {
                post_redirect("payment.php");
            } else {
                $_SESSION['message'] = "went wrong";
                post_redirect("user.php");
            }
        }
    }

    function get_electricity()
  {
    $query = "SELECT unit_price fROM electricity";
    $data = query($query);
    return $data;
  }


  function get_water()
 {
        $query = "SELECT water_amount FROM water";
        $data = query($query);
        return $data;
    
 }

 
 function all_users()
{
    $query = "SELECT user_id, user_name, room_no, family_member FROM user";
    $data = query($query);
    return $data;
}
?>