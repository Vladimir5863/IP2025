<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Nedelja4</title>
    <link rel="stylesheet" href="style.css">

    <?php
    $first_name = "";
    $last_name = "";
    $email = "";
    $age = "";
    $website = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST["Submit"])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["Submit"]) && empty($_POST["first_name"])) {
                $first_nameErr = "First name is required";
            } else {
                $first_name = test_input($_POST["first_name"]);
            }
            if (isset($_POST["Submit"]) && empty($_POST["last_name"])) {
                $last_nameErr = "Last name is required";
            } else {
                $last_name = test_input($_POST["last_name"]);
            }
            if (isset($_POST["Submit"]) && empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }
            if (isset($_POST["Submit"]) && empty($_POST["age"]) || !is_numeric($_POST["age"])) {
                $ageErr = "Age name is required";
            } else {
                $age = test_input($_POST["age"]);
            }
            if (isset($_POST["Submit"]) && empty($_POST["website"])) {
                $websiteErr = "Website is required";
            } else {
                $website = test_input($_POST["website"]);
            }
        }
    }

    ?>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        First Name: <input type="text" name="first_name">
        <?php if (isset($first_nameErr)) {
            echo $first_nameErr;
        } ?>
        <br>
        Last Name: <input type="text" name="last_name">
        <?php if (isset($last_nameErr)) {
            echo $last_nameErr;
        } ?>
        <br>
        Email: <input type="email" name="email">
        <?php if (isset($emailErr)) {
            echo $emailErr;
        } ?>
        <br>
        Age: <input type="number" name="age">
        <?php if (isset($ageErr)) {
            echo $ageErr;
        } ?>
        <br>
        Website: <input type="text" name="website">
        <?php if (isset($websiteErr)) {
            echo $websiteErr;
        } ?>
        <br>
        <input type="submit" name="Submit" , value="Submit"> <br>
    </form>
    <?php
    echo $first_name;
    echo " <br>";
    echo $last_name;
    echo "<br>";
    echo "$email";
    echo "<br>";
    echo "$age";
    echo "<br>";
    echo "$website";
    echo "<br>";


    ?>

</body>

</html>