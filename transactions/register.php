<?php 
    include_once('../utilities/validation.php');
    include("../includes/template/header.php");
    include("../includes/template/footer.php");

         $firstname = $lastname = $middlename = $birthdate = $email = $gender = $course = $birthplace = $guardian = $contacts = $status = $yearlevel = $address = $schoolyear = $myArr = array();         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $firstname = test_input($_POST["firstname"]);
            $lastname = test_input($_POST["lastname"]);
            $middlename = test_input($_POST["middlename"]);
            $address = test_input($_POST["address"]);
            $birthdate = test_input($_POST["birthdate"]);
            $newDate = date("m-d-Y", strtotime($birthdate));
            $birthplace = test_input($_POST["birthplace"]);
            $gender = test_input($_POST["gender"]);
            $guardian = test_input($_POST["guardian"]);
            $contacts = test_input($_POST["contact"]);
            $status = test_input($_POST["status"]);
            $yearlevel = test_input($_POST["level"]);
            $course = test_input($_POST["course"]);
            $schoolyear = test_input($_POST["schoolyear"]);
            $email = test_input($_POST["email"]);


            // Contact Number should only be a number a not a string
            if (!preg_match('/^\+?\d+$/', $contacts)){
               $contacts = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }

            // Contact Number should follow the ff. pattern +63 prefix e.g. +639057622381
            if (!preg_match('/(^(\+63)(\d){10}$)/',$contacts)){
               $contacts = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }

            // First name & Last name should not be less 2 length of a string
            if (!preg_match('/[a-zA-Z]{2,}/', $firstname)){
               $firstname = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }

            if (!preg_match('/[a-zA-Z]{2,}/', $lastname)){
               $lastname = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }

            // Should not contain any html tags
            // Inputs should not start with special character
            if (!preg_match('/^[a-zA-Z0-9](.*[a-zA-Z0-9])?$/', $firstname)){
               $firstname = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^[a-zA-Z0-9](.*[a-zA-Z0-9])?$/', $lastname)){
               $lastname = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^[a-zA-Z0-9](.*[a-zA-Z0-9])?$/', $middlename)){
               $middlename = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^[a-zA-Z0-9](.*[a-zA-Z0-9])?$/', $address)){
               $address = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^[a-zA-Z0-9](.*[a-zA-Z0-9])?$/', $birthplace)){
               $birthplace = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^[a-zA-Z0-9](.*[a-zA-Z0-9])?$/', $guardian)){
               $guardian = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^[a-zA-Z0-9](.*[a-zA-Z0-9])?$/', $status)){
               $status = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^[a-zA-Z0-9](.*[a-zA-Z0-9])?$/', $schoolyear)){
               $schoolyear= '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }

            // Inputs should not start with a number 
            if (!preg_match('/^([^0-9]+)$/', $firstname)){
               $firstname = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^([^0-9]+)$/', $lastname)){
               $lastname = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^([^0-9]+)$/', $middlename)){
               $middlename = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^([^0-9]+)$/', $guardian)){
               $guardian = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^([^0-9]+)$/', $status)){
               $status = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            if (!preg_match('/^([^0-9]+)$/', $email)){
               $email = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }

            // Email should be correct format
            if (!preg_match_all('/^([a-zA-Z\d\.-]+)@([a-zA-Z\d-]+)\.([a-zA-Z]{2,4})$/',$email)){
               $email = '<span style="color:#FF5733;text-align:center;">Invalid</span>';
            }
            
            echo ("<h4>Congratulation! Successfully Registered</h4>");
            echo ("<p>First Name:   $firstname</p>");
            echo ("<p>Last Name:    $lastname</p>");
            echo ("<p>Middle Name:  $middlename</p>");
            echo ("<p>Address:  $address</p>");
            $newDate = date("m-d-Y", strtotime($birthdate));
            echo ("<p>Birthday:  $newDate</p>");
            echo ("<p>Birth Place:  $birthplace</p>");
            echo ("<p>Gender:  $gender</p>");
            echo ("<p>Guardian:  $guardian</p>");
            echo ("<p>Contact:  $contacts</p>");
            echo ("<p>Status:  $status</p>");
            echo ("<p>Year Level:  $yearlevel</p>");
            echo ("<p>Course:  $course</p>");
            echo ("<p>School Year:  $schoolyear</p>");
            echo ("<p>Email:  $email</p>");
         }
       
?>