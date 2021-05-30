<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <link href="form.css" rel="stylesheet">
    

</head>
<body>
    <form action="regitiondata.php" method="POST">
            
      <table align = "center" border="0" height="700px" width="50%">
        <tr>
            <th colspan ="2"><h1> Registration Form</h1> </th>
            
        </tr>
        <tr>
            <th>Name :</th>
            <th><input type ="text" placeholder="Enter Your Full Name" name="tex1" required></th>
        </tr>
        <tr>
            <th>Gender :</th>
            <th><input type ="radio" name ="Gender">Male<input type ="radio"name ="Gender"  >Female</th>
        </tr>
        <tr>
            <th>Date Of Birth :</th>
            <th><input type ="date" name="tex2" required></th>
        </tr>
        <tr>
            <th>Email ID :</th>
            <th><input type ="email" placeholder="Enter Your Email" name="tex3"required></th>
        </tr>
        <tr>
            <th>Contact Number :</th>
            <th><input type ="number" placeholder="Enter Your Contact Number" name="tex4"required></th>
        </tr>
        <tr>
            <th>Address :</th>
            <th> <textarea rows="6" cols="20"  placeholder="Enter Your Address"name="tex5" > </textarea></th>
        </tr>
        <tr>
            <th>Stream :</th>
            <th><input type ="radio" name ="Stream" >B.E<input type ="radio"name ="Stream">Diploma<input type ="radio"name ="Stream">BCA<input type ="radio"name ="Stream">BSC</th>
        </tr>
        <tr>
            <th>Branch :</th>
            <th><input type ="text" placeholder="Enter Your Branch"name="tex7" required></th>
        </tr>
        <tr>
            <th>Semester :</th>
            <th><input type ="radio" name ="Semester"  >3<input type ="radio"name ="Semester">4<input type ="radio"name ="Semester">5<input type ="radio"name ="Semester">6</th>
        </tr>
        <tr>
            <th>Institute Name :</th>
            <th><input type ="text" placeholder="Enter Your Institute Name" name="tex9"required></th>
        </tr>
        
        <tr>
            <th colspan ="2">
                <input type ="submit">
                <input type ="reset">
            </th>
            
        </tr>
    </table>
    </form>>
</body>
</html>