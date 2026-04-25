<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php $user = getApplicantByID($pdo, $_GET['id']); ?>
        <h1>Edit Application</h1>
        <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <p>First Name: <input type="text" name="fName" value="<?php echo $user['first_name']; ?>"></p>
            <p>Last Name: <input type="text" name="lName" value="<?php echo $user['last_name']; ?>"></p>
            <p>Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"></p>
            <p>Birth Date: <input type="date" name="bdate" value="<?php echo $user['birth_date']; ?>"></p>
            <p>Age: <input type="number" name="age" value="<?php echo $user['age']; ?>"></p>
            <p>Specialization: <input type="text" name="specialization" value="<?php echo $user['specialization']; ?>"></p>
            <input type="submit" name="editBtn" value="Update Record">
        </form>
    </div>
</body>
</html>