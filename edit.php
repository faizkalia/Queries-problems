
<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'inserdata');

// Get the data from the record that someone is editing on the form page
$id = $_GET['id'];
$query = "SELECT * FROM register WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



// echo $row['id'];
// die;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $decode = $row['password'];
// $decode = hex2bin('password');

// Hey1234
// $str="Welcome12";
// if(bin2hex($str)== "57656c636f6d653132"){
//     echo "correct password";
// }else{
//     echo "incorrect password";
// }
// $str = "Hey1234";
// $hexRepresentation = bin2hex($str);

// if ($hexRepresentation == "48657931323334") {
//     echo "correct password";
// } else {
//     echo "incorrect password";
// }


// die;
$firstName = $row['firstName'];
$lastName = $row['lastName'];
$password = $row['password'];
$email = $row['email'];
$Gender = $row['Gender'];
$Mobile = $row['Mobile'];
$address = $row['address'];
$DOB = $row['DOB'];
$Country = $row['Country'];
$Hobby = $row['Hobby'];
$allHobby=explode(',',$Hobby);     //convert string to array
// if(isset($_POST['update'])){
// $firstName=$_POST['firstName'];
// $lastName=$_POST['lastName'];
// $password=$_POST['password'];
// $email=$_POST['email'];
// $Gender=$_POST['Gender'];
// $Mobile=$_POST['Mobile'];
// $address=$_POST['address'];
// $DOB=$_POST['DOB'];
// $Country=$_POST['Country'];
// $Hobby=$_POST['Hobby'];
// $allHobby=explode(',',$Hobby);


$stmt = $conn->query("UPDATE register SET 'firstName'=`$firstName`, 'lastName'=`$lastName`, 'password'=`$password`, 'email'=`$email`, 'Gender'=`$Gender`, 'Mobile'=`$Mobile`, 'address'=`$address`, 'DOB'=`$DOB`, 'Country'=`$Country`, 'Hobby'=`$allHobby` WHERE 'id'=`$id`");
// $stmt = $conn->query("UPDATE register SET firstName=`$firstName`, lastName=?, password=?, email=?, Gender=?, Mobile=?, address=?, DOB=?, Country=?, Hobby=? WHERE id=?");
// $stmt->bind_param($firstName,$lastName, $password, $email, $Gender, $Mobile, $address, $DOB,$Country,$allHobby,$id);

// echo ("$id,$firstName,$lastName");
// die;


    // Redirect after successful update with the id parameter
    header("Location: input-types.php?id=$id&firstName=$firstName&lastName=$lastName&password=$password&email=$email&Gender=$Gender&Mobile=$Mobile&address=$address&DOB=$DOB&Country=$Country&Hobby=$Hobby");
    exit();

?>

