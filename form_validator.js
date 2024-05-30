function form_validation(){

    // Retrieving values from form inputs
    let validate_first_name = document.getElementById("first_name").value;
    let validate_second_name = document.getElementById("second_name").value;
    let validate_sur_name = document.getElementById("sur_name").value;
    let validate_email = document.getElementById("email").value;
    let validate_alternative_email = document.getElementById("alternative_email").value;
    let validate_student_password = document.getElementById("student_password").value;
    let validate_confirm_password = document.getElementById("confirm_password").value;
    let validate_adm_number = document.getElementById("adm_number").value;
    let validate_country = document.getElementById("country").value;
    let validate_country_province = document.getElementById("country_province").value;
    let validate_estate = document.getElementById("estate").value;
    let validate_native_language = document.getElementById("native_language").value;
    let validate_former_high_school = document.getElementById("former_high_school").value;
    let validate_exam_grade = document.getElementById("exam_grade").value;
    let validate_disability = document.getElementById("disability").value;
    let validate_number_of_brothers = document.getElementById("number_of_brothers").value;
    let validate_number_of_sisters = document.getElementById("number_of_sisters").value;
    let validate_gender = document.getElementById("gender").value;
    let validate_date_of_birth = document.getElementById("date_of_birth").value;
    let validate_prog_language = document.getElementById("prog_language").value;
    
    // Constructing data string for AJAX request
    let data_string = 'first_name=' + validate_first_name +
        '&second_name=' + validate_second_name +
        '&sur_name=' + validate_sur_name +
        '&email=' + validate_email +
        '&alternative_email=' + validate_alternative_email +
        '&student_password=' + validate_student_password +
        '&confirm_password=' + validate_confirm_password +
        '&adm_number=' + validate_adm_number +
        '&country=' + validate_country +
        '&country_province=' + validate_country_province +
        '&estate=' + validate_estate +
        '&native_language=' + validate_native_language +
        '&former_high_school=' + validate_former_high_school +
        '&exam_grade=' + validate_exam_grade +
        '&disability=' + validate_disability +
        '&number_of_brothers=' + validate_number_of_brothers +
        '&number_of_sisters=' + validate_number_of_sisters +
        '&gender=' + validate_gender +
        '&date_of_birth=' + validate_date_of_birth +
        '&prog_language=' + validate_prog_language;
    

    // Validation checks
    if (validate_first_name.length < 1 || validate_first_name == 1234 || validate_first_name.includes("1234") || validate_first_name == ""){
        window.alert("Type first name correctly!");
        return false;
    }
    if (validate_second_name.length < 1 || validate_second_name == 1234 || validate_second_name.includes("1234")){
        window.alert("Type second name correctly!");
        return false;
    }
    if (validate_sur_name.length < 1 || validate_sur_name == 1234 || validate_sur_name.includes("1234")){
        window.alert("Type surname correctly!");
        return false;
    }
    if (validate_student_password.length < 8 || validate_student_password == 12345678 || validate_student_password == "abcdefgh"){
        window.alert("Type password correctly!");
        return false;
    }
    if (validate_confirm_password !== validate_student_password){
        window.alert("Type confirmation password correctly!");
        return false;
    }
    if (validate_adm_number.length > 5 || validate_adm_number.length < 2){
        window.alert("Type the admission number correctly!");
        return false;
    }
    if (!validate_country_province){
        window.alert("Select your province!");
        return false;
    }

    // AJAX request to submit form data
    else{
        $.ajax({
            type: "POST",
            url: "submit_form.php",
            data: data_string,
            cache: false,
            success: function(html){
                alert(html);
            }
        });
    }
}
