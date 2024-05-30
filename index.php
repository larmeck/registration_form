
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student details</title>

         <!-- jQuery and Bootstrap JavaScript -->
        <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="bootstrap5/js/bootstrap.min.js" ></script>
        
    </head>
    <body>

    
    
        <h1>Entry Form</h1>
<div>
    <p>Registration Form</p>
</div>
<div class="container p-5 my-5 bg-dark text-white">
        <form   id="the_form" action="" method="" >

            <label for="first_name" >First Name: </label>
            <input type="text"  name="first_name" id="first_name" required><br><br><br>

            <label for="second_name" >Second Name: </label>
            <input type="text"  name="second_name" id="second_name"  required><br><br><br>

            <label for="sur_name" >Surname: </label>
            <input type="text"  name="sur_name" id="sur_name" required><br><br><br>


            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required><br><br><br>


            <label for="alternative_email" >Alternative Email: </label>
            <input type="email"  name="alternative_email" id="alternative_email" required><br><br><br>


            <label for="student_password">Password: </label>
            <input type="text" name="student_password" id="student_password"  required><br><br><br>


            <label for="confirm_password"> Confirm Password: </label>
            <input type="text" name="confirm_password" id="confirm_password" required><br><br><br>

            <label  for="adm_number" > Admission Number: </label>
            <input type="number"   name ="adm_number" id ="adm_number"  required><br><br><br>

            <label   for="country" >Country </label>
            <input type="text"  name="country" id="country" required placeholder="Kenya"><br><br><br>


            <label for="country_province">Province</label>
                <select name="country_province" id="country_province">
                    <option></option>
                    <option>Rift Valley</option>
                    <option>Nyanza</option>
                    <option>Central</option>
                    <option>Eastern</option>
                    <option>North Eastern</option>
                    <option>Nairobi</option>
                    <option>Coast</option>
                </select><br><br>

                <label   for="estate" >Estate: </label>
            <input type="text"  name="estate" id="estate"  required><br><br><br>


            <label   for="native_language" >Native Language: </label>
            <input type="text"  name="native_language" id="native_language"  required><br><br><br>


            <label   for="former_high_school" >Former Highschool </label>
            <input type="text"  name="former_high_school" id="former_high_school"  required><br><br><br>


            <label   for="exam_grade" >Exam Grade: </label>
            <input type="text"  name="exam_grade" id="exam_grade" required><br><br><br>



            <label   for="disability" >Any disability: </label>
            <input type="text" name="disability" id="disability" required placeholder="YES or NO"><br><br><br>



            <label   for="brothers" >Number of Brothers: </label>
            <input type="number" name="number_of_brothers" id="number_of_brothers" required><br><br><br>

            <label   for="sisters" >Number of Sisters: </label>
            <input type="number" name="number_of_sisters" id="number_of_sisters" required><br><br><br>



            <label name="gender_label" for="gender" >Gender</label>
                <select name="gender" id="gender">
                    <option></option>
                    <option>Male</option>
                    <option>Female</option>
                </select><br><br>


            
                <label   for="date_of_birth" >Date Of Birth: </label>
            <input type="date"  name="date_of_birth" id="date_of_birth"  required><br><br><br>


            <label for="pro_language">Programming Language</label>
            <select name="prog_language" id="prog_language">
                    <option></option>
                    <option>Java</option>
                    <option>Python</option>
                    <option>Web Design</option>
                    <option>JavaScript</option>
                </select><br><br>


                <div class="d-grid">
                <button id="my_button" type="submit" onclick="return form_validation()" class="btn btn-primary btn-block">Register</button>
                </div>


        </form>

        </div>

         <!-- JavaScript for Form Validation -->
        <script src="form_validator.js"></script>
    </body>
    </html>
