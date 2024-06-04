<?php
// Retrieving form data from POST method
$student_first_name = $_POST['first_name'];
$student_second_name = $_POST['second_name'];
$student_sur_name = $_POST['sur_name'];
$student_email = $_POST['email'];
$student_alternative_email = $_POST['alternative_email'];
$student_password_set = $_POST['student_password'];
$student_confirm_password_set = $_POST['confirm_password'];
$student_adm_number = $_POST['adm_number'];
$student_country = $_POST['country'];
$student_country_province = $_POST['country_province'];
$student_estate = $_POST['estate'];
$student_native_language = $_POST['native_language'];
$student_former_highschool = $_POST['former_high_school'];
$student_exam_grade = $_POST['exam_grade'];
$student_disability= $_POST['disability'];
$student_number_of_brothers = $_POST['number_of_brothers'];
$student_number_of_sisters = $_POST['number_of_sisters'];
$student_gender = $_POST['gender'];
$student_date_of_birth = $_POST['date_of_birth'];
$student_prog_language = $_POST['prog_language'];

// Database connection details
$server_name="localhost";
$db_user_name="root";
$db_password="";
$db_name ="registration";

// Establishing connection to database
$conn = new mysqli($server_name, $db_user_name, $db_password, $db_name);

// Checking connection
if(!$conn) {
    die("Not Connected!". mysqli_error($conn));
}

/*
else {
    // Connection successful message
    echo "Connected successfully(`-`)";
}
*/


// Check if the email already exists
$sql_check = "SELECT * FROM registration_details  WHERE email='$student_email'";
$result_check = mysqli_query($conn, $sql_check);

// If there is a result, it means the email already exists
if (mysqli_num_rows($result_check) > 0) {
    echo "Error: Email address already exists";
    // Close the database connection
    mysqli_close($conn);
    exit(); // Exit the script to prevent further execution
}


// SQL query to insert form data into database
$sql = "INSERT INTO registration_details (first_name,second_name,sur_name,email,alternative_email,student_password,confirmation_password,adm_number,country,country_province,estate,native_language,former_high_school,exam_grade,disability,number_of_brothers,number_of_sisters,gender,date_of_birth,prog_language)
VALUES ('$student_first_name','$student_second_name','$student_sur_name','$student_email','$student_alternative_email','$student_password_set','$student_confirm_password_set','$student_adm_number','$student_country','$student_country_province','$student_estate','$student_native_language','$student_former_highschool','$student_exam_grade','$student_disability','$student_number_of_brothers','$student_number_of_sisters','$student_gender','$student_date_of_birth','$student_prog_language')";

// Executing SQL query
if(mysqli_query($conn, $sql)) {
    // Success message displayed using JavaScript alert
    echo 'Thank you for providing your details';
    
}
else {
    // Error message displayed if query execution fails
    echo "Snap! Please try again". $sql. "<br>". mysqli_error($conn);
}

?>
