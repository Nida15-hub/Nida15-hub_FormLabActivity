<?php
    include_once ("functions.php");
    
    $lastname = $_POST['lname'];
    //echo $lastname, "\n";
    $firstname = $_POST['fname'];
     //echo $firstname, "\n";
    $middlename = $_POST['mname'];
    //echo $middlename, "\n";
    $address = $_POST['address'];
    //echo $address, "\n";
    $date = $_POST['date']; // your date variable in  '2015-10-10 ' formate
    echo "DOB format: ",date('m-d-Y',strtotime($date)), "<br>"; // return 10-10-2015
    $POB = $_POST['place'];
    //echo $POB, "\n";
    $gender = $_POST['gender'];
    //echo $gender, "\n";
    $guardian = $_POST['guardian'];
    //echo $guardian, "\n";
    $number = $_POST['number'];
   
    //echo substr($number, 0, 1), "<br>";
    $status = $_POST['status'];
     //echo $status, "\n";
    $year = $_POST['year'];
    //echo $year, "\n";
    $course = $_POST['course'];
    //echo $course, "\n";
    $sy = $_POST['sy'];
    //echo $sy, "\n";
    $email = $_POST['email'];
    //echo $email, "\n";
    /* 1 */
    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($number) && notEmp($POB) && notEmp($guardian) && notEmp($status) && notEmp($sy) && notEmp($email)){
        echo "All inputs are not null:valid", "<br>";
    }
    else{
        echo "All inputs are null: invalid", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) && shouldnotNum($number) &&shouldnotNum($address) && shouldnotNum($POB) && shouldnotNum($guardian) && shouldnotNum($status) && shouldnotNum($email)){
        echo "All inputs does not start with number:valid", "<br>";
    }
    else{
        echo "inputs start with number: invalid", "<br>";
    }
    /* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($POB) && notSpecialChar($guardian) && notSpecialChar($status) && notSpecialChar($sy) && notSpecialChar($email)){
        echo "Inputs does not start with special character: valid", "<br>";
    }
    else{
        echo "Inputs start with special character: invalid", "<br>";
    }
    /* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "First name and last name has more than 2 characters: valid", "<br>";
    }
    else{
        echo "First name and last name has less than 2 characters:invalid", "<br>";
    }
    /* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($POB) && notags($guardian) && notags($status) && notags($sy) && notags($email) && notags($number)){
       echo "Inputs does not have any html tags: valid", "<br>";
    }
    else{
        echo "Inputs have any html tags: invalid", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo $email," - Correct email format:valid", "<br>";
    }
    else{
        echo $email," - Wrong email format: Invalid", "<br>";
    }
    /* 7 */
    if (philpreffix($number)){
        echo $number, " - Correct number pattern and numeric: valid", "<br>";
    }
    else{
        echo $number, " - Correct number pattern: invalid", "<br>";
    }
    
?>