
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="fetch.css">
    <title>featch-Data-list</title>
</head>
<?php

$hostname = "localhost";
$dbname = "inserdata";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
$query = "SELECT * FROM register";
$result = mysqli_query($conn,$query);

// echo "$Gender=$_POST['Gender']";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['button'])) {
    $firstName = $_POST['firstName'];
    $lastName=$_POST['lastName'];
    $password = $_POST['password'];
    $encode=password_hash($password,PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $Gender=$_POST['Gender'];
    $Mobile=$_POST['Mobile'];
    $address = $_POST['address'];
    $DOB = $_POST['DOB'];
    $Country=$_POST['Country'];
    $Hobby =$_POST['Hobby'];
    $allHobby=implode(',',$Hobby);//convert array into string


    
    

    // Use prepared statement to prevent SQL injection
   
    $sql= "INSERT INTO register(firstName,lastName, password, email, Gender, Mobile, address, DOB,Country,Hobby) VALUES ('$firstName', '$lastName', '$encode', '$email', '$Gender', '$Mobile', '$address', '$DOB', '$Country', '$allHobby')";
    // $stmt->bind_param("ssssssssss", $firstName,$lastName, $encode, $email, $Gender, $Mobile, $address, $DOB,$Country,$allHobby);


    if ($conn->query($sql)) {
        header("Location:fetch_data_list.php");
        exit();
    } else {
        echo "Failed to insert the record: " . $conn->error;
    }
}

// Close connection
$conn->close();




?>
<body>
    <div class="container mt-3 rounded">
    <div class="title">
                    <a href="input-types.php" class="btn1">Previous</a>
                    <strong class="display-6">Fetch data from database</strong>
</div>
                    <table class="table table-bordered text-center ">
                        
                        <tr>
                            <td class="bg-dark text-white ">user-Id</td>
                            <td class="bg-dark text-white">firstName</td>
                            <td class="bg-dark text-white">lastName</td>
                            <td class="bg-dark text-white">Password</td>
                            <td class="bg-dark text-white">Mobile-No</td>
                            <td class="bg-dark text-white">Email</td>
                            <td class="bg-dark text-white">Gender</td>
                            <td class="bg-dark text-white">Address</td>
                            <td class="bg-dark text-white">DOB</td>
                            <td class="bg-dark text-white">Country</td>
                            <td class="bg-dark text-white">Hobby</td>
                            <td class="bg-dark text-white">Edit</td>
                            <td class="bg-dark text-white">Delete</td> 


                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['firstName']}</td>";
                        echo "<td>{$row['lastName']}</td>";
                        echo "<td>{$row['password']}</td>";
                        echo "<td>{$row['Mobile']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['Gender']}</td>";
                        echo "<td>{$row['address']}</td>";
                        echo "<td>{$row['DOB']}</td>";
                        echo "<td>{$row['Country']}</td>";
                        echo "<td>{$row['Hobby']}</td>";
                        echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-primary' name='update'>Edit</a></td>";
                        echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>"; 
                        echo "</tr>";
                        }
                        ?>
                        </tr>
                    </table>
                    </div>
                </div> 
    </div>
</body>
</html>