 

<!DOCTYPE html>
<html>
<style>

input[type=text], select {
    width: 20%;
    padding: 20px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {

    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 20px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=date], select {
    width: 20%;
    padding: 20px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
body {  
  
   background-size: 100%;
}
p{
    font-size: 40px;
    
}
::-moz-placeholder {
  font-size: 20px;
} 
</style>
<head>
<title>Cheap Booking</title>
</head>
<body>
<div class="name" align="center"><p style="color:gray">cheapbook</p></div>
<?php 
session_start();

    if(isset($_POST['submit']))
    {
         $city = $_POST['1'];

         $check_in = $_POST['check-in'];

         $check_out = $_POST['check-out'];
         
         //Here must validate the date using javascript
         
         //header("Location: action.php? city=".$_POST['1']);
         

         header("Location: action.php? city=$city&check_in=$check_in&check_out=$check_out");
    }
 ?>
<!-- search form 6 -->
<?php include 'slideShow.php'; ?>
<div  style="width: 100%; position:absolute; top: 400px; left:50px; ">

   <form action="myProject.php" method="post" >


   <p align="center" style="color:gray">Search Your Destination</p>

   <input type="text" placeholder="Search City..." id ="1" required name="1" style="font-size: 20px;">

   <input id="date" type="date" name="check-in" value="<?php echo date('Y-m-d'); ?>" style="font-size: 20px;">


   <input id="date2" type="date" name="check-out" value="<?php echo date('Y-m-d'); ?>" style="font-size: 20px;">

   <input type="submit" value = "search" name="submit" style="font-size: 20px;">

   </form>
   <p align="center" style="color:gray;">Popular Destinations</p>
   

</div>

<div style="background-image: url('28167287_10215676933937750_1248965951039433600_n.jpg');position: absolute;border: solid black;top: 800px;width: 500px;height: 300px; left: 100px;" >
     <h4>Cox's Bazar</h4>
   </div>

   <div style="background-image: url('29595507_2082751708432070_6699978256074156631_n.jpg'); position: absolute; border: solid black;left: 700px; top: 800px; height: 300px; width: 500px;" >
     <h4>Sylhet</h4>
     </div>

    <div style="position: absolute;border: solid black;top: 1150px;width: 500px;height: 300px; background-image: url('27657200_793652314153820_803490895922688274_n.jpg'); left:100px;" >
     <h4>Chittagong</h4>
   </div>

   <div style=" position: absolute; border: solid black;left: 700px; top: 1150px; height: 300px; width: 500px;background-image: url('29133214_144302306391192_6302689173430075392_n.jpg');" >
     <h4>saint-martin</h4>
     </div>

     <div style="position: absolute;border: solid black;top: 1500px;width: 500px;height: 300px; background-image: url('30689267_385539268593363_7117540887202103296_n.jpg'); background-size: 100%px; left:100px;" >
     <h4>Sreemangal</h4>
   </div>

   <div style=" position: absolute; border: solid black;left: 700px; top: 1500px; height: 300px; width: 500px;background-image: url('19396673_1454527761294786_5480033559924989842_n.jpg');" >
     <h4>Dhaka</h4>
     </div>

     <div style="top: 1800px; position: absolute; left: 550px;">
       <?php include 'profile.php'; ?>
     </div>
</body>

</html>

