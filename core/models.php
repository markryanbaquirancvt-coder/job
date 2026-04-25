<?php 
require_once 'dbConfig.php';

function getAllApplicants($pdo) {
    $sql = "SELECT * FROM applicants ORDER BY date_added DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getApplicantByID($pdo, $id) {
    $sql = "SELECT * FROM applicants WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function insertApplicant($pdo, $fName, $lName, $email, $bdate, $age, $spec) {
    $sql = "INSERT INTO applicants (first_name, last_name, email, birth_date, age, specialization) VALUES (?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$fName, $lName, $email, $bdate, $age, $spec]);
}

function updateApplicant($pdo, $fName, $lName, $email, $bdate, $age, $spec, $id) {
    $sql = "UPDATE applicants SET first_name = ?, last_name = ?, email = ?, birth_date = ?, age = ?, specialization = ? WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$fName, $lName, $email, $bdate, $age, $spec, $id]);
}

function deleteApplicant($pdo, $id) {
    $sql = "DELETE FROM applicants WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
?>