<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
    <title>form</title>
</head>

<body>
    <div class="container-fluid mark">
        <div class = "row">
        <div class = "col-md-8 julie">
            <div class = text-center>
                <h1>Registration Guidelines!</h1>
            </div>
            <div class = text-center>
                <h6>Please fill up the form correctly and honestly</h5>
                <h6>1. Please don't leave the box empty.</h6>
                <h6>2. Make sure that your contact number follow the pattern +63</h6>
                <h6>3. First name and last name must not less than 2 length</h6>
                <h6>4. Their should no special character except your email</h6>
                <h6>5. Email should be in correct format</h6>
            </div>
        </div>
        <div class = "col-md-4 card nida">
            <div class = "card card-header text-center  bg-sample"> <h5>Registration Form</h5> </div>
                    <form method= "post"  action="output.php" >
                    <div>
                        <label>Lastname:</label>
                        <input type="text"  name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div>
                        <label>Firstname: </label>
                        <input type="text"  name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div>
                        <label>Middlename:</label>
                        <input type="text"  name="mname" class="form-control" placeholder="Middle Name" required>
                    </div>
                    <div>
                        <label>Address:</label>
                        <input type="text"  name="address" class="form-control" placeholder="Address" required>
                    </div>
                    <div>
                        <label>Date of Birth:</label>
                        <input type="date"  name="date" class="form-control" placeholder="Date of Birth" required>
                    </div>
                    <div>
                        <label>Place of Birth: </label>
                        <input type="text"  name="place" class="form-control" placeholder="Palce of Birth" required></label>
                    </div>
                    <div>
                        <label>Gender:</label>
                         <input type="radio" name="gender" value="male" checked> Male
                         <input type="radio" name="gender" value="Female"> Female
                         <input type="radio" name="gender" value="others"> Others
                    </div>
                    <div>
                        <label>Guardian: <input type="text"  name="guardian" class="form-control" placeholder="Guardian" required></label>
                    </div>
                    <div>
                        <label>Contact Number: <input type="text"  name="number" class="form-control" placeholder="Contact Number" required></label>
                    </div>
                    <div>
                        <label>Civil Status</label>
                        <input type="text" name="status">
                    </div>
                    <div>
                        <label>Year Level</label>
                        <select name="year">
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                        </select>
                    </div>
                    <div>
                        <label>Course</label>
                        <select name="course">
                            <option value="BSIT">BSIT</option>
                            <option value="DATASCIENCE">BS DATA SCIENCE</option>
                            <option value="BSTCM">BSTCM</option>
                            <option value="BS CHEMISTRY">BS CHEMISTRY</option>
                            <option value="BS PHYSICS">BS PHYSICS</option>
                        </select>
                    </div>
                    <div>
                        <label>School Year: <input type="text"  name="sy" class="form-control" placeholder="School Year" required></label>
                    </div>
                    <div>
                        <label>Email: <input type="text"  name="email" class="form-control" placeholder="Email Address" required></label>
                    </div>
                    <div>
                        <a href="output.php" class= "text-center form-control">
                        <input type="submit">
                        </a>
                    </div>
                    
                    </form>            

        </div>
        </div>
    </div>
</body>
</html>