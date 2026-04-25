CREATE TABLE applicants (
    applicant_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    birth_date DATE,
    age INT,
    specialization VARCHAR(100),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
