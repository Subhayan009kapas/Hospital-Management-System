<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Update Display</title>

          <style>
                    td{
                              font-size:25px;
                    }

                    
                    body{
                              background-image:url('https://t4.ftcdn.net/jpg/05/51/71/17/360_F_551711787_Daoyh7mSO4dXB5cp4z3n6u0qMHgNT4K3.jpg');
                              background-size:100%;
                    }

                    table,tr,td{
                      border:3px solid black;
                      text-align:center;
                    }
                    table{
                      background-color:#55E2E9;
                      height:200px;
                    }
          </style>
</head>
<body>
            <?php
             $name=$_POST["name"];
             $payment=$_POST["payment"];
             $due=$_POST["due"];
             ?>


<h1   align="center"  style="background-color:white;">
<?php
                 echo "Updated Payment  Details ";
             ?>
</h1>
            
             <table   style="border:5px solid black;"  align="center">
               <tr>
                  <td  style="font-weight:bold;">
                     <?php
                                   echo "Name :";
                                   ?>
                  </td>
                  <td>
                         <?php
                                    echo $name."<BR>";

                     ?>
                  </td>
               </tr>

               <tr>
               <td    style="font-weight:bold;">
                     <?php
                                 echo "Payment :";
                                 ?>
                  </td>
                  <td   >
                  <?php
                                 echo  $payment."<BR>";

                     ?>
                  </td>
               </tr>

               <tr>
                  <td   style="font-weight:bold;">
                     <?php
                                      echo "Dues :";
                        ?>
                  </td>
               <td>
                  <?php
                                      echo   $due."<BR>";

                     ?>
               </td>
               </tr>

             </table>
             
             
            
            
            


             
             
<?php         
$conn=new mysqli("localhost","root","","it_project");
$result=$conn->query("UPDATE hospital_tbl SET  Payment='".$payment."',due='".$due."' WHERE  Patient_Name='".$name."';");
?>
<h2   align="center">
<?php
echo "Patient:-"  ,$name ."<br>";
echo "  Payment  Details Successfully  Updated !";    
          ?>

</h2>

</body>
</html>