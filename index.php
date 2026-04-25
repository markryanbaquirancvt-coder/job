<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Software Engineer Job Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Software Engineer Job Applications</h1>
        <form action="core/handleForms.php" method="POST">
            <p>First Name: <input type="text" name="fName" required></p>
            <p>Last Name: <input type="text" name="lName" required></p>
            <p>Email: <input type="email" name="email" required></p>
            <p>Birth Date: <input type="date" name="bdate" required></p>
            <p>Age: <input type="number" name="age" required></p>
            <p>Specialization: <input type="text" name="specialization" required></p>
            <input type="submit" name="insertBtn" value="Submit Application">
        </form>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Birth Date</th>
            <th>Age</th>
            <th>Specialization</th>
            <th>Action</th>
        </tr>
        <?php $applicants = getAllApplicants($pdo); foreach ($applicants as $row) { ?>
        <tr>
            <td><?php echo $row['applicant_id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['birth_date']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['specialization']; ?></td>
            <td>
                <a href="editwebdev.php?id=<?php echo $row['applicant_id']; ?>">Edit</a>
                <a href="deletewebdev.php?id=<?php echo $row['applicant_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>