<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Display page</title>
          <style>
                    body{
                              background-image: url('https://images.pexels.com/photos/2847648/pexels-photo-2847648.jpeg?auto=compress&cs=tinysrgb&w=600');
                              background-size: 100%;
                    }
          </style>
</head>
<body>
          <?php
             $name=$_POST["txt_name"];
             $password=$_POST["txt_pass"];
             echo $name."<BR>";
             echo  $password."<BR>";

             $conn=new mysqli("localhost","root","","it_project");
             $result=$conn->query("INSERT INTO project_tbl  VALUES('". $name."', '". $password."')");
  


           

          ?>

          
</body>
</html>