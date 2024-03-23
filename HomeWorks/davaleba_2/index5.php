<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation Example</title>
    <style>
        .error {
            color: red;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Define variables and initialize with empty values
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
$name = $email = $website = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Website validation (optional)
    if (!empty($_POST["website"])) {
        $website = test_input($_POST["website"]);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid website URL";
        }
    }

    // Comment validation (optional)
    if (isset($_POST["comment"])) {
        $comment = test_input($_POST["comment"]);
    }

    // Gender validation
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h1>PHP Form Validation Example</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <label for="name">Name: </label>
    <input type="text" id="name" name="name" required value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br>

    <label for="email">E-mail: </label>
    <input type="email" id="email" name="email" required value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br>

    <label for="website">Website:</label>
    <input type="url" id="website" name="website" value="<?php echo $website; ?>">
    <span class="error"><?php echo $websiteErr; ?></span>
    <br>

    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment" rows="5" cols="30"><?php echo $comment; ?></textarea>
    <br>

    <label for="gender">Gender:</label>
    <input type="radio" id="female" name="gender" value="female" <?php if ($gender === 'female') echo 'checked'; ?>>
    <label for="female">Female</label>
    <input type="radio" id="male" name="gender" value="male" <?php if ($gender === 'male') echo 'checked'; ?>>
    <label for="male">Male</label>
    <input type="radio" id="other" name="gender" value="other" <?php if ($gender === 'other') echo 'checked'; ?>>
    <label for="other">Other</label>
    <span class="error">* <?php echo $genderErr; ?></span>
    <br>

    <button type="submit">Submit</button>
</form>

<?php
// If all fields are valid, display entered information in a table
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["gender"]) &&
    empty($nameErr) && empty($emailErr) && empty($genderErr)) {
    echo "<h2>Entered Information:</h2>";
    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Website</td><td>$website</td></tr>";
    echo "<tr><td>Comment</td><td>$comment</td></tr>";
    echo "<tr><td>Gender</td><td>$gender</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
