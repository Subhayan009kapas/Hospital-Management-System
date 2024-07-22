<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Update page</title>
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
               td{
                    font-size:20px;
               }

               img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

h1{
     text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; 
}
          </style>
</head>


                             

<body>

<span  class="a" ><img src="https://www.freeiconspng.com/uploads/red-medical-dr-logo-physician-symbol-cartoon-8.png" width="7%" ></span>

<h1 align="center" colspan="2" style="font-size: 50px; font-weight: bold; font-family:monospace; color: beige;">Update Payment  Details</td>
                              </h1>
          
          <table  style="border:9px solid black ; border-radius: 10%;" align="center">
                    
                    <form action="./update_Display.php"  method="post">

                        
                      <tr><td colspan="2" align="center" ><img src="https://e1.pxfuel.com/desktop-wallpaper/339/991/desktop-wallpaper-hospital-logo-hospital.jpg" width="100%"></td></tr>
                              
          <tr>
                    <td style=" font-weight: bold;">Patient Name:</td>
                    <td><input type="text" name="name"placeholder="enter name"  style="font-size:15px;"> </td>
          </tr>
                   

                     

           <tr>
                     <td  style=" font-weight: bold;">Payment:</td>
          
                     <td><input type="text" name="payment"  placeholder="entry payment" style="font-size:15px;"></td>
          

           </tr>

           <tr>
                     <td  style=" font-weight: bold;">Dues:</td>
          
                     <td><input type="text" name="due"  placeholder="entry due"  style="font-size:15px;"></td>
          
           </tr>

           <tr>
                <td    colspan="2"    align="center"> <input type="submit"  value="Update" style="font-size:18px; background-color:#1260CC; color:white;"></td>   
           </tr>

            
                    </form>
          </table>
          
</body>
</html>