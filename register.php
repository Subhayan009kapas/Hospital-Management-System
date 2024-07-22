<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Registration page</title>
          <style>
                    table{
                         /* background-color:cadetblue; */
                         background-image: url('https://rare-gallery.com/uploads/posts/514530-blue-blur-abstract.jpg');
                         height:500px;
                         width:400px;
                    }
                    body{
                         background-image: url('https://img.freepik.com/premium-photo/abstract-background-images-wallpaper-ai-generated_643360-29176.jpg');
                      background-size: 100%;
                    }
                    
                         img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
a{
     font-size:15px;
}
td{
     font-size:17px;
}
h1{
     text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; 
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}


                    
                   
               </style>
</head>
<body>
     <span  class="a" ><img src="https://www.freeiconspng.com/uploads/red-medical-dr-logo-physician-symbol-cartoon-8.png" width="7%" ></span>
<h1 align="center"  style="font-size: 50px; font-weight: bold; font-family:Lucida Console; color:white;"> HOSPITAL  MANAGEMENT</h1>
          <table  style="border:9px solid black ; border-radius: 10%;" align="center">
                    
                    <form action="./register_display.php"  method="post">

                    <tr>
                         <td  colspan="2"align="center" style="font-size:25px; font-weight:bold;">Fill up the following Details</td>
                    </tr>

                   

                        
                      <tr><td colspan="2" align="center"   style="padding:11px 9px; "><img src="https://wallpaperaccess.com/full/958470.jpg" width="100%"></td></tr>
                              
          <tr>
                    <td style=" font-weight: bold;">Patient Name:</td>
                    <td><input type="text" name="name"placeholder="enter name" style="font-size:15px;"> </td>
          </tr>
          
                   
           <tr>
                     <td  style=" font-weight: bold;">Age:</td>
          
                     <td><input type="text" name="age"  placeholder="enter age" style="font-size:15px;"></td>
          
           </tr>

           <tr>
                     <td  style=" font-weight: bold;">Sex:</td>
          
                     <td> <input type="radio" id="male" name="sex" value="male" >
                      <label for="html" >Male</label><br>
                  <input type="radio" id="female" name="sex" value="female" >
                      <label for="html" >Female</label>
                     
                  </td>

           </tr>

           <tr>
                     <td  style=" font-weight: bold;">Date of Birth:</td>
          
                     <td><input type="date" name="dob"  placeholder="enter DOB" style="font-size:15px;"></td>
          

           </tr>

           <tr>
                    <td  style=" font-weight: bold;">Address:</td>
         
                    <td><input type="text" name="address"  placeholder="enter address." style="font-size:15px;"></td>
         

          </tr>


           <tr>
                    <td  style=" font-weight: bold;">Ph NO:</td>
         
                    <td><input type="text" name="ph"  placeholder="enter  ph no." style="font-size:15px;"></td>
         

          </tr>
          <tr>
                    <td  style=" font-weight: bold;">Payment:</td>
         
                    <td><input type="text" name="payment"  placeholder="entry Payment." style="font-size:15px;"></td>
         

          </tr>

           <tr>
                    <td  style=" font-weight: bold;">Dues:</td>
         
                    <td><input type="text" name="due"  placeholder="entry due"  style="font-size:15px;"></td>
         

          </tr>

          <tr>

                    <td    colspan="2"  align="center"  style="font-size:40px;"> <input type="submit"  value="Register now" style="font-size:18px; background-color:#1260CC; color:white;"></td>   

                   
               </tr>
               <td     colspan="2"   align="center"> <input type="reset"  value="Reset"  style="font-size:18px; background-color:#29C5F6"></td>   
              

              
               

                    </form>
</table>
<div  align="center">
<a href="http://localhost/it_project/update.php" class="button"  style="background-color:#1260CC; color:white;">Go To Update</a>

</div>


                    
</body>
</html>