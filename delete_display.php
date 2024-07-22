<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Delete Display</title>

          <style>
                    td{
                              font-size:25px;
                    }
                    body{
                              background-image:url('https://img.freepik.com/premium-photo/interior-corridor-hospital-3d-render_103577-7102.jpg');
                              background-size:100%;
                    }

                    table,tr,td{
                      border:3px solid black;
                    }
                    table{
                      background-color:#55E2E9;
                      height:100px;
                      widht:300px;
                      
                    }
                    
          </style>
</head>
<body>
<?php
              $name=$_POST["name"];
      ?>

<h2   align="center"  style="background-color:white;">
<?php
      echo "Deleted Patient :-"
      ?>
</h2>
      
      <table   style="border:5px solid black"  align="center">
         <tr>
      <td  style="font-weight:bold;">

            <?php
              echo "Name:-";
              ?>
      </td>
      <td>
              <?php
              echo $name."<br>";
            ?>

      </td>
         </tr>
          
   </table>

<?php
             $conn=new mysqli("localhost","root","","it_project");
             $result=$conn->query("DELETE FROM  hospital_tbl  WHERE  Patient_Name ='". $name."';" );

          ?>

<h2   align="center"  >
<?php
                 echo "Patient data successfully deleted  !";
          ?>
</h2>
          
</body>
</html>