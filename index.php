<?php
$conn = new mysqli("localhost", "Anik1234", "Anik1234@", "anik");

if (isset($_POST['submit'])) {
    $fname = $_POST['fastname'];
    $lname = $_POST['Lastname'];
    $email = $_POST['Email'];

    $sql = "INSERT INTO myGuests (Fastname,Lastname,Email)
VALUES('$fname','$lname','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data Inserted";
        header('location:index.php');
    } else {
        echo "Data not inserted";
    }
} else {
    echo "fail";
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
                <form action="index.php" method="POST">
                    Fastname:<br>
                    <input type="text" name="fastname" id=""><br><br>
                    Lastname: <br>
                    <input type="text" name="Lastname" id=""><br><br>
                    Email : <br>
                    <input type="email" name="Email" id=""><br><br>
                    <input class="btn btn-success" type="submit" value="submit" name="submit">
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