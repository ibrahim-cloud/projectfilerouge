<?php 
// if(session_status()== PHP_SESSION_NONE){
// session_start();
// }
session_start();
 
$username = "";
$username_1 = "";
$email = '';
$Adminname="";
$pp="";
$namehouse="";
$adresshouse="";
$address="";
$Bed="";
$id="";
$Nschool="";
$user="";
$prix="";
$description="";
$bath="";
$name="";
$phone="";
$passwordM="";
$errors = array();
$edit_state = false;
$db =mysqli_connect ('localhost','root','','house');

if(isset($_POST['Register'])) {
    $username_1 = mysqli_real_escape_string($db,$_POST['username_1']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

    if (empty($username_1)){
        array_push ($errors,"Username is required");
    }
   
    if (empty($password_1)){
        array_push ($errors,"password is required");
    }
    if ($password_1 != $password_2){
        array_push ($errors,"password is not match");
    } if (empty($email)){
        array_push ($errors,"email is required");
    }
    if (count($errors) == 0){
        $password = md5($password_1);
        $sql = "INSERT INTO `client` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `PASSWORD`) VALUES ('','$username_1','','$email','$password')";
              
              mysqli_query($db,$sql);
              $_SESSION ['username'] = $username_1;
              

              $_SESSION ['success'] = "you are logged in";
              header ('location:index.php');

    }

}


//login user 
if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if (empty($username)){ 
        array_push ($errors,"Username is required");
    }
    if (empty($password)){
        array_push ($errors,"password is required");
    }
    if(count($errors)== 0){
        $password = md5 ($password);
        $query = "SELECT * FROM client WHERE NOM='$username' AND PASSWORD='$password'";
        $result = mysqli_query ($db,$query);
        if (mysqli_num_rows ($result) == 1){
            ///log user in
            $_SESSION ['username'] = $username;
            $_SESSION ['success'] = "you are logged in";
            header ('location:index.php');
        }else{
            array_push($errors, "That user doesn't exist in our system  ");
        }
    }

}



if (isset($_POST['admin'])){
    $Adminname = mysqli_real_escape_string($db,$_POST['Adminname']);
    $passwordAdmin = mysqli_real_escape_string($db,$_POST['passwordAdmin']);

    if (empty($Adminname)){
        array_push ($errors,"AdminName is required");
    }
    if (empty($passwordAdmin)){
        array_push ($errors,"password is required");
    }
    if(count($errors)== 0){
        //  $Adminname = md5 ($passwordAdmin);
        $fas = "SELECT * FROM admin WHERE name='$Adminname' AND password='$passwordAdmin'";
        $res = mysqli_query ($db,$fas);
        if (mysqli_num_rows ($res) == 1){
            $_SESSION ['Adminname'] = $Adminname;
            $_SESSION ['success'] = "you are logged in";
            header ('location:index.php');
        }else{
            array_push($errors, "That user doesn't exist in our system  ");
        }
    }

}

//////////////////////////////////////////////////////////////ADD houses

if (isset($_POST['add_house'])) {
    $namehouse = $_POST['namehouse'];
    $adresshouse= $_POST['adresshouse'];
    $description=$_POST['description'];
    $bed = $_POST['bed'];
    $bath = $_POST['bath'];
    $id = $_POST['id'];
    $Nschool = $_POST['Nschool'];
    $user=$_POST['user'];
    $img=$_POST['img'];
    $prix = $_POST['prix'];
    $phone=$_POST['phone'];
//   $queryM = "INSERT INTO `client` (name, age,des,im) VALUES ('$nameM', '$ageM','$desM','$imM')"; 
$queryR = "INSERT INTO `add_house`(`id`, `name`,`address`, `Bed`,`bath`,`prix`,`description`,`landlord`,`Nschool`,`img`,`phone` ) VALUES ('','$namehouse','$adresshouse','$bed','$bath','$prix','$description','$user','$Nschool','$img',$phone)";
    mysqli_query($db, $queryR);
    $_SESSION['msg'] = "house ajouter" ;
  
    header('location: index.php');
}



if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM `add_house` WHERE id=$id");
    $_SESSION['msg'] = "product delete" ;
    header('location: addproperty.php');
}
if (isset($_POST['update'])) {
    $namehouse = $_POST['namehouse'];
    $adresshouse= $_POST['adresshouse'];
    $description=$_POST['description'];
    $bed = $_POST['bed'];
    $bath = $_POST['bath'];
    $id = $_POST['id'];
    $user=$_POST['user'];
    $prix = $_POST['prix'];
    $Nschool = $_POST['Nschool'];
    $img=$_POST['img'];
    $phone=$_POST['phone'];

    mysqli_query($db, "  UPDATE `add_house` SET name='$namehouse',address='$adresshouse',Bed='$bed',bath='$bath',prix='$prix',description='$description',Nschool='$Nschool',img='$img',phone='$phone' WHERE id=$id");
   
   
    header('location: addproperty.php');
}

$resultsN = mysqli_query($db, "SELECT * FROM add_house WHERE Nschool= '$Nschool' ");
    $resultsZ = mysqli_query($db, "SELECT * FROM add_house  ");
    $queryD = mysqli_query($db,"SELECT * FROM  add_house WHERE id=$id" );
	
   
    if (isset($_GET['id'])) {
		$id = $_GET['id'];
		mysqli_query($db, "SELECT * FROM add_house WHERE id=$id");
		$_SESSION['msg'] = "product delete" ;
		header('location: property_details.php');
	}







    
// function confirm($result){
//     global $db;
//     if(!$result){
//         die("Query Failed".mysqli_error($db));
//     }
// }

// function escape_string($string){
//     global $db;
//     return mysqli_real_escape_string($db, $string);
// }

// function fetch_array($query){
//     return mysqli_fetch_array($query);
// }

//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}
//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['Adminname']);
    header('location:index.php');
}?>