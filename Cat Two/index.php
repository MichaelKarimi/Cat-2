<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Details Form</title>
</head>
<body>

<h2>Author Details Form</h2>

<form action="processes/AuthRegistration.php" method="post">
    <label for="authorFullName">Author Full Name:</label>
    <input type="text" name="authorFullName" required>

    <label for="authorEmail">Author Email:</label>
    <input type="email" name="authorEmail" required>

    <label for="authorAddress">Author Address:</label>
    <input type="text" name="authorAddress" required>

    <label for="authorBiography">Author Biography:</label>
    <textarea name="authorBiography" rows="5" required></textarea>

    <label for="authorDateOfBirth">Author Date of Birth:</label>
    <input type="date" name="authorDateOfBirth" required>

    <label for="authorSuspended">Author Suspended:</label>
    <input type="checkbox" name="authorSuspended">

    <br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
