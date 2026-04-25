<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertBtn'])) {
    if (insertApplicant($pdo, $_POST['fName'], $_POST['lName'], $_POST['email'], $_POST['bdate'], $_POST['age'], $_POST['specialization'])) {
        header("Location: ../index.php");
        exit();
    }
}

if (isset($_POST['editBtn'])) {
    if (updateApplicant($pdo, $_POST['fName'], $_POST['lName'], $_POST['email'], $_POST['bdate'], $_POST['age'], $_POST['specialization'], $_GET['id'])) {
        header("Location: ../index.php");
        exit();
    }
}

if (isset($_POST['deleteBtn'])) {
    if (deleteApplicant($pdo, $_GET['id'])) {
        header("Location: ../index.php");
        exit();
    }
}
?>