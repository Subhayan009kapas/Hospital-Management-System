<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Display Registration  Details</title>

          <style>
                    td{
                              font-size:25px;
                    }

                    body{
                              background-image:url('https://aihms.in/blog/wp-content/uploads/2020/04/healthcare1-1200x900.jpg');
                              background-size:100%;
                    }

                    table{
                      background-color:#55E2E9;
                    }
                    table,tr,td{
                      border:3px solid black;
                      text-align:center;
                    
                    }
          </style>

          
                  
                   
</head>
<body>
          <?php

           $name=$_POST["name"];
           $age=$_POST["age"];
           $sex=$_POST["sex"];
           $dob=$_POST["dob"];
           $address=$_POST["address"];
           $ph=$_POST["ph"];
           $payment=$_POST["payment"];
           $due=$_POST["due"];

           ?>
           <h2 align="center"   style="background-color:white;">
           <?php
           echo "Patient Details :-"
           ?>
           </h2>
           
           <table  style="border:5px solid black" align="center">
                    <tr>
                              <td   style="font-weight:bold;">
                                         <?php
                                         echo "Name :";
                                         ?>
                              </td>
                              <td>
                                         <?php
                                echo $name."<br>";
                                         ?>
                              </td>
                   </tr>
                   <tr>
                              <td   style="font-weight:bold;">
                                         <?php
                                         echo "Age:";
                                         ?>
                             </td>
                             <td>
                                <?php
                                echo $age."<br>";
                                         ?>
                              </td>
                   </tr>
                   <tr>
                              <td   style="font-weight:bold;">
                                         <?php
                                         echo "Sex:";
                                         ?>
                                </td>
                                
                                
                            <td>
                                <?php
                                echo $sex."<br>";
                                         ?>
                              </td>
                   </tr>
                   <tr>
                              <td  style="font-weight:bold;">
                                         <?php
                                         echo "DOB :";
                                         ?>
                              </td>
                              <td>
                                       <?php
                               echo $dob."<br>";
                                         ?>
                              </td>
                   </tr>
                   <tr>
                              <td  style="font-weight:bold;">
                                         <?php
                                         echo "Address :";
                                         ?>
                              </td>
                              <td>
                                      <?php
                                  echo $address."<br>";
                                         ?>
                              </td>
                   </tr>
                   <tr>
                              <td  style="font-weight:bold;">
                                         <?php
                                         echo "Ph_No:";
                                         ?>
                              </td>
                              <td>
                              <?php
                             echo  $ph."<br>";
                                         ?>
                              </td>
                   </tr>
                   <tr>
                              <td  style="font-weight:bold;">
                                         <?php
                                         echo "Payment :";
                                         ?>
                              </td>
                              <td>
                              <?php
                                     echo  $payment."<br>";
                                         ?>
                              </td>
                   </tr>
                   <tr>
                              <td  style="font-weight:bold;">
                                         <?php
                                         echo "Dues :";
                                         ?>
                              </td>
                              <td>
                              <?php
                                    echo  $due."<br>";
                                         ?>
                              </td>
                   </tr>
          
         
          
           
        
           
          
           
           

<table>
 <?php

           $conn=new mysqli("localhost","root","","it_project");
           $result=$conn->query("INSERT INTO  hospital_tbl  VALUES('". $name."', '". $age."','". $sex."','". $dob."','".$address."','". $ph."','". $payment."','". $due."')");

         
          ?>

          <h2   align="center">
           

          <?php
            echo " Patient Registration Successfull !";

          ?>
          </h2>
         

          
        
</body>
</html>