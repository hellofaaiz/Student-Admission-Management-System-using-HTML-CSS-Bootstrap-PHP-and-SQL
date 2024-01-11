
<?php
session_start();
$conn = mysqli_connect('localhost','root','','admission_system');

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];


    $user_select = "SELECT * FROM registration_details WHERE Email = '$email' AND Password = '$password'";
    $user = mysqli_query($conn,$user_select);
    $user_info = mysqli_fetch_all($user,MYSQLI_ASSOC);

    // print_r($user_info[0]['Acc_Type']);
    // exit();
    // die();

    if(mysqli_num_rows($user) > 0){
        $_SESSION['login'] = 'login';
        $_SESSION['ID'] = $user_info[0]['ID'];
        if ($user_info[0]['Acc_Type'] == 'student') {
            header('Location: userhome.php');
        } elseif ($user_info[0]['Acc_Type'] == 'admin') {
            header('Location: adminhome.php');
        }
    
     
        
    }
else{
    header('location:login.php');
}
}


  
?>



