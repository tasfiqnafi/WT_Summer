<?php
include("../Control/process.php");
?>

<html>

<body>
<h1>Registration From</h1>

<form action="" method="POST"  enctype="multipart/form-data">

<table>
            <tr> <td>First Name: </td>
            <td><input type= "text" name="fname">
            </tr></td>

        <tr><td>Last Name: </td>
        <td><input type="text"  name="lname">
        
        
    </tr></td>

        <tr><td>Age: </td>  
        <td><input type="text" name="age"></tr></td>

        <tr><td>Designation:</td>

        <td><input type="radio" name="designation" value="Junior Programmer" >Junior Programmer

        <input type="radio" name="designation" value="Senior Programmer" >Senior Programmer

        <input type="radio" name="designation" value="Project_Lead" >Project Lead</td>
    </tr>

        <tr><td>Preferred language</td>

        <td><input type="checkbox" name="P_Language" value="java">Java

        <input type="checkbox" name="P_Language" value="php">PHP

        <input type="checkbox" name="P_Language" value="c++">C++
     
    </td></tr>

        <tr><td>E-mail: </td>
            
        <td><input type="text" name="Email">
        
    </tr></td>

        <tr><td>Password: </td>

        <td><input type="password" name="pass"> 
       
    
    </tr></td>
       
        

        <tr><td> <input type="file" name="myfile"> </td></tr>
       <tr><td> <input type="submit" name="Submission"value="Submit"> <input type= "reset" name="Res" value = Reset></td></tr>
</table>


</form>


    
</body>
</html>