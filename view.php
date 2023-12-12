<?php
$conn = new mysqli("localhost", "Anik1234", "Anik1234@", "anik");

if (isset($_GET['deleteid'])) {
    $delet =  $_GET['deleteid'];
    $sql = "DELETE FROM myGuests WHERE id=$delet";
    if($conn->query($sql)===TRUE){
     echo "Delete Data";
     header('location:view.php');
    }else{
        echo"Not Delete Data";
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
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8 pt-4 mt-4 border border-success shadow-lg">
                <h3 class="text-center p-2 m-2 bg-success text-white">User information</h3>
                <?php
                $sql = "SELECT * FROM myGuests";
                $query = $conn->query($sql);
                echo "<table class='table table-success'>
                <tr>
                <th>ID</th>
                <th>FastName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Action</th>
                </tr>";

                while ($data = $query->fetch_assoc()) {
                    $id = $data['id'];
                    $fname = $data['Fastname'];
                    $lname = $data['Lastname'];
                    $Email = $data['Email'];

                    echo "<tr>
                <td>$id</td>
                <td>$fname</td>
                <td>$lname</td>
                <td>$Email</td>
                <td><span class='btn btn-success'>
                <a class='text-white text-decoration-none' href='Edit.php?id=$id'>
                Edit</a></span>

                <span class='btn btn-danger'>
                <a class='text-white text-decoration-none' href='view.php?deleteid=$id'>
                Delete
                </a></span></td>
                </tr>";
                }

                ?>

            </div>
            <div class="col-sm-2">

            </div>
        </div>
    </div>
    <!-- link bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>