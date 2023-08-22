<?php


// Check if the form was submitted
if (isset($_POST['submitfile'])) {
    // Get the form data
    $name = $_POST['productname'];
    $price = $_POST['productprice'];
    $Cat = $_POST['productCategory'];
    $image = $_FILES['file1']['name'];
    $imagePath = 'upload/' . $image;
    // Validate the form data
    if (empty($name) || empty($price) || empty($image)) {
        // Display an error message
        echo "Please fill out all the fields.";
    } else {
        // Upload the image to the server
        move_uploaded_file($_FILES['file1']['tmp_name'], "upload/$image");

        // Connect to the database
        $db = new mysqli("localhost", "root", "", "e-market", "3306");

        // Prepare the SQL statement
        $stmt = $db->prepare("INSERT INTO products ( id,p_name, p_price, p_img,category) VALUES ('',?, ?, ?,?)");

        // Bind the values to the statement
        $stmt->bind_param("siss", $name, $price, $imagePath, $Cat);

        // Execute the statement
        $stmt->execute();

        // Close the statement and connection
        $stmt->close();
        $db->close();

        // Redirect the user to the confirmation page
        header("Location: admin.php");
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles1.css"/>
    <link rel="stylesheet" href="css/admin.css"/>


    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
    />
    <title>Admin</title>


</head>
<body>
<!-- NavBar-->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">

    <div class="container ">
        <a href="#" class="navbar-brand">E-Market</a>
        <div class="d-flex">

           <h4 style="color: red; margin-left: 390px;">ADMIN PAN</h4>
        </div>

        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="home.html" class="nav-link">Logout</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<div class="container d-flex flex-column">

    <div class="container d-flex flex-column ">

        <form action="admin.php" method="POST" ENCTYPE="multipart/form-data">
            <div class="card" style="width: 18rem; margin-left: 450px; margin-bottom: 40px;">
                <h3 style=" margin-left: 58px;" >ADD Product</h3>
                <div style=" margin-left: 40px;" class="card-body">
                    <input type="text" placeholder="Name" name="productname">
                    <input type="text" placeholder="Price" name="productprice">
                    <input type="text" placeholder="Category" name="productCategory">
                    <input type="file" name="file1" style="display: block">
                    <div class="container d-flex justify-content-between">
                        <button class="btn btn-info ml-3" type="submit" name="submitfile"> Submit</button>
                    </div>
                </div>
            </div>
    </div>
    <button class="btn btn-danger" name="showUsers">Show Users</button>

    <?php
    if(isset($_POST['showUsers']))
    {


// Check if the user is logged in and has admin privileges

        // Connect to the database
        $db = mysqli_connect("localhost", "root", "", "e-market", "3306");

        // Retrieve the user data from the database
        $query = "SELECT * FROM log";
        $result = mysqli_query($db, $query);

        // Create a table to display the user data
        echo "<table>";
        echo "<tr><th>ID</th><th>Username</th><th>Email</th></tr>";

        // Loop through the user data and add a row to the table for each user
        while ($user = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['username'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "</tr>";
        }

        // Close the table
        echo "</table>";

    }
    ?>
    <button class="btn btn-danger mt-3" name="HideUsers">Hide Users</button>
    <button class="btn btn-danger mt-3" name="feedBack">Show Feedback</button>
<?php
if(isset($_POST['HideUsers']))
{
    unset($_POST['showUsers']);
}
if(isset($_POST['feedBack']))
{
    $db = new mysqli("localhost", "root", "", "e-market", "3306");
    $result = $db->query('SELECT * FROM feedback ORDER BY feedback_id DESC');

// Check if there are any results
    if ($result->num_rows > 0) {
        // Create the table
        echo '<table>';
        echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Feedback</th></tr>';

        // Loop through each row in the result set
        while($row = $result->fetch_assoc()) {
            // Display the feedback in the table
            echo '<tr>';
            echo '<td>' . $row['feedback_id'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['feedback'] . '</td>';
            echo '</tr>';
        }

        // Close the table
        echo '</table>';
    } else {
        // If there are no results, display a message
        echo '<p>No feedback to display.</p>';
    }

// Close the database connection
    $db->close();

}

?>

</body>
</html>


    </form>

</div>


<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"
></script>
</body>
</html>