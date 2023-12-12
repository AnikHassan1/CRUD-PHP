<?php
$conn = new mysqli("localhost", "Anik1234", "Anik1234@", "anik");
if (isset($_GET['id'])) {
    $getid = $_GET['id'];
    // $sql = "DELETE FROM myGuests WHERE id=$delet";
    $sql = "SELECT  * FROM myGuests WHERE id=$getid";
    $query = $conn->query($sql);#query 
    $data =  $query->fetch_assoc();#array inside data

    $id=$data['id'];
    $fname=$data['Fastname'];
    $lname=$data['Lastname'];
    $Email=$data['Email'];
}
if(isset($_POST['Edit'])){
    $id=$_POST['id'];
    $fname=$_POST['fastname'];
    $lname=$_POST['Lastname'];
    $Email=$_POST['Email'];

  $sqli=  "UPDATE  myGuests
     SET Fastname='$fname',Lastname='$lname',Email='$Email'
     WHERE id='$id'";
    if($conn->query($sqli)===TRUE){
        echo "Update data";
        header('location:view.php');
    }else{
        echo $sqli."Update data Wrong";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- //link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6 pt-4 mt-4 border border-success shadow-lg">
                <h3>Registration From</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    Fastname:<br>
                    <input type="text" name="fastname" id=""value="<?php echo $fname ?>"><br><br>
                    Lastname: <br>
                    <input type="text" name="Lastname" value="<?php echo $lname?>"><br><br>
                    Email : <br>
                    <input type="email" name="Email" value="<?php echo $Email?>"><br><br>
                    <input type="text" name="id" value="<?php echo $id?>" hidden>
                    <input class="btn btn-success mb-2" type="submit" value="submit" name="Edit">
                </form>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
    <!-- link bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>