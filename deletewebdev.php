<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Delete Confirmation</title></head>
<body>
    <?php $user = getApplicantByID($pdo, $_GET['id']); ?>
    <h1>Delete application for <?php echo $user['first_name']; ?>?</h1>
    <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <input type="submit" name="deleteBtn" value="Yes, Delete">
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>