<?php

$room = $_POST['room'];

if(strlen($room)>20 or strlen($room)<2)
{    
    $message = "Please choose a name between 2 to 20 ";
    echo '<script language = "javascript">';
    echo 'alert (" Please choose a name between 2 to 20 ");';
    echo 'window.location="http://localhost/chatroom/home.php";';
    echo '</script>';

}
else{
   include 'db_connect.php';
}

$sql =" SELECT * FROM `rooms` WHERE roomname = '$room' ";
$result = mysqli_query($conn,$sql);

if($result)
{
    if(mysqli_num_rows($result)>0)
    {
        $message = "please select another name 0";
        echo '<script language = "javascript">';
        echo 'alert ("please select another name ");';
        echo 'window.location="http://localhost/chatroom/home.php";';
        echo '</script>';

    }
    else 
    {
        $sql = "INSERT INTO `rooms` ( `roomname`, `stime`) VALUES ( '$room', current_timestamp());";
        if(mysqli_query($conn,$sql))
        {
           
            echo '<script language = "javascript">';
            echo 'alert ("Room sucessfully created ");';
            echo 'window.location="http://localhost/chatroom/rooms.php?roomname=' .$room. '";';
            echo '</script>';


        }
    }
}
else{
    echo $error;
}

?>