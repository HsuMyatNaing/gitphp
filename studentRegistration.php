<!DOCTYPE html>
<html>
    <head>
    <title>Student Registration</title>
    </head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Name: <input type="text" name="name"> <br><br>
    Email: <input type="email" name="email"> <br><br>
    Phone: <input type="phone" name="phone"> <br><br>
    
    Township:
    <select name="township">
        <option value="">Select</option>
        <option value="dawei">Dawei</option>
        <option value="lounglone">LoungLone</option>
        <option value="yephyu">Yephyu</option>
        <option value="thayetChaung">Thayet Chaung</option>
    </select> <br><br>

    Grade:
    <input type="radio" name="grade" value="third year">Third year
    <input type="radio" name="grade" value="fourth year">Fourth year
    <input type="radio" name="grade" value="fifth year">Fifth year
    <br><br>


    Subject:
    <input type="checkbox" name="subject[]" value="501">501
    <input type="checkbox" name="subject[]" value="502">502
    <input type="checkbox" name="subject[]" value="503">503
    <input type="checkbox" name="subject[]" value="501">504
    <br><br>
    <input type="submit" name="submit" value="Submit"> <br><br>

   </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $township=$_POST['township'];
            $grade=$_POST['grade'];
            $subject=$_POST['subject'];

            if (empty($name)) {
              echo "Name is required <br>";
            } else {
              echo "Name : ".$name."<br>";
            }

            if (empty($email)) {
                echo "Email is required<br>";
              } else {
                echo "Email : ".$email."<br>";
              }
            
            if (empty($phone)) {
                echo "Phone is required<br>";
            } else {
                echo "Phone No : ".$phone."<br>";
            }

            if (empty($township)) {
                echo "Township is required<br>";
            } else {
                echo "Township : ".$township."<br>";
            }

            if (empty($grade)) {
                echo "Grade is required<br>";
            } else {
                echo "Grade : ".$grade."<br>";
            }

            echo "Subject :";
            if(empty($subject)) 
                {
                    echo("please choice your subjects");
                } 
                else 
                {
                    foreach($subject as $value){
                        
                        echo(" ".$value);
                    }
                    
            }


          }
    ?>

</body>
</html>