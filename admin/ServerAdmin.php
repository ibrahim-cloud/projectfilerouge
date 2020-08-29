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
$nameS="";
$Nschool="";
$adressS="";
$address="";
$Bed="";
$id="";
$user="";
$prix="";
$description="";
$descriptionS="";
$bath="";
$name="";
$passwordM="";
$errors = array();
$edit_state = false;
$db =mysqli_connect ('localhost','root','','house');

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
            header ('location:adminM.php');
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
  
    header('location: ../admin/adminP.php');
}



if (isset($_GET['delA'])) {
    $id = $_GET['delA'];
    mysqli_query($db, "DELETE FROM `add_house` WHERE id=$id");
    $_SESSION['msg'] = "product delete" ;
    header('location: ../admin/adminP.php');
}
if (isset($_POST['update'])) {
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

    mysqli_query($db, "  UPDATE `add_house` SET name='$namehouse',address='$adresshouse',Bed='$bed',bath='$bath',prix='$prix',description='$description',Nschool='$Nschool',img='$img',phone='$phone' WHERE id=$id");
   
   
    header('location: ../admin/adminP.php');
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




///add school
if (isset($_POST['add_school'])) {
    $nameS = $_POST['nameS'];
    $adressS= $_POST['adressS'];
    $descriptionS=$_POST['descriptionS'];
    
//   $queryM = "INSERT INTO `client` (name, age,des,im) VALUES ('$nameM', '$ageM','$desM','$imM')"; 
$queryR = "INSERT INTO `school`(`id`, `name`,`des`,`img`,`address`) VALUES ('','$nameS','$descriptionS','','$adressS')";
    mysqli_query($db, $queryR);
    $_SESSION['msg'] = "house ajouter" ;
  
    header('location: ../admin/adminS.php');
}



if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM `school` WHERE id=$id");
    $_SESSION['msg'] = "product delete" ;
    header('location: ../admin/adminS.php');
}
if (isset($_POST['updateS'])) {
    $nameS = $_POST['nameS'];
    $adressS= $_POST['adressS'];
    $descriptionS=$_POST['descriptionS'];
  
    $id = $_POST['id'];
  

    mysqli_query($db, "  UPDATE `school` SET name='$nameS',address='$adressS',des='$descriptionS' WHERE id=$id");
   
   
    header('location: ../admin/adminS.php');
}


    $resultsF = mysqli_query($db, "SELECT * FROM add_house WHERE nn= '$user' ");
    $queryD = mysqli_query($db,"SELECT * FROM  add_house WHERE id=$id" );
    $resultsS = mysqli_query($db, "SELECT * FROM school  ");
	

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
    header('location:Ladmin.php');
}?>