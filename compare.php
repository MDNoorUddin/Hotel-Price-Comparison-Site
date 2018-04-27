<!DOCTYPE html>
<html>
<head>
    <title>Hotel Details</title>
    <style>
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
        .sidenav {
    width: 300px;
    height: 400px;
    position: fixed;
    z-index: 1;
    top: 100px;
    left: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
    background-image: url("30706553_187157408587877_6455268977542168576_n.jpg");
}
media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.name
{
    background-color: #4CAF50;
}
h1{
    font-style: italic;
    font-size: 40px;
}
h1{
    font-style: italic;
    font-size: 40px;
}
body{
    background-image: url("pexels-photo-490466.jpeg");
    background-size: 100%;
  }
  div.t
  {
    top: 580px;
    background: #eee;
    border: 3px black;
    position: absolute;
    left: 450px ;
    width: 500px;
    height: 200px;
  }
</style>
</head>
<body>
      <div class="name" align="center"><h1 style="color: white font">cheapbook</h1></div>
      <div class="sidenav">
  <input type="text" placeholder="Search City..." id ="1" required name="1" width="450" height="120" >
   <br>
   <input id="date" type="date" name="check-in">
   <br>

   <input id="date2" type="date" name="check-out">
   <br>
   <input type="submit" value = "search" name="submit">
  </div>
     

      <?php
    if($_GET){

      $top=180;

        $city = $_GET ['city']; 
        
        $check_in = $_GET ['check_in'];    // yy/mm/dd format
        
        $check_out =  $_GET ['check_out'];    

        $timestamp = strtotime($check_out);
 
        $dup_check_out = date("d-m-Y", $timestamp); // for dd/mm/yy format

        $timestamp = strtotime($check_in);
 
        $dup_check_in = date("d-m-Y", $timestamp); //for dd/mm/yy format


    }


    else{
      echo "Url has no user";
    }
    ?>
    <?php
    //first test the touriffy.com
    // now modifying the city name for the url
    for( $i = 0; $i < strlen ( $city ); $i++ )
    {
        if( $city[$i]==' ') $city[$i] = '-';
    }
   



    $url_touriffy = file_get_contents("http://www.touriffy.com/index.php/hotel/hotelsearch/$city/all/$check_in/$check_out/score_desc/USD/pricepernight-/stars-/facility-/10");

    $touriffy_hotel_name_with_price = array(20);

    $touriffy_hotel_name_with_deal_link = array(20);

    $touriffy_counter=0;

    // from line 39 I am going to extract touriffy.com

    $first_partition = explode('<div class="wide_gray_box">', $url_touriffy);

    // first partition

    for( $i = 1;  $i < count ( $first_partition ); $i++)
   {
    //echo $first_partition[$i]; // contains all information of every hotel

    // at first pick hotel name and booking room
    $div = explode('<div class="wide_gray_box_mid_left">', $first_partition[$i]); // picking up link and name
    $link1=explode('<a href="', $div[1]);
    $link=explode('"', $link1[1]);
    //echo $link[0]; // this is the booking link

    //now the hotel name

    $hotel_name1=explode('title="',$div[1]);

    $hotel_name=explode('"', $hotel_name1[1]);

    //now the last work to picking up the price
    $price2=explode('<div class="wide_gray_box_mid_right_right">', $first_partition[$i]);

    $price1=explode('<p class="pay_per_night">', $price2[1]);

    $price=explode('<', $price1[1]);

    $without_usd_price = explode('USD ', $price[0]);

    $without_usd_price1 = explode(' with', $without_usd_price[1]);

    $without_usd_price1[0]=$without_usd_price1[0]*84;

     $touriffy_hotel_name_with_price["$hotel_name[0]"] = $without_usd_price1[0];

    $touriffy_hotel_name_with_deal_link["$hotel_name[0]"] = $link[0];

    $touriffy_counter++;
   }

   //echo "<h1> $touriffy_counter number of hotels in $city at touriffy.com</h1>";

   //-----------------------------------touriffy.com done--------------------------------


    //now testing amarroom.com

    //these variables will store all the datas from amarroom.com

    $amarroom_hotel_name_with_price = array(20);

    $amarroom_hotel_name_with_deal_link = array(20);  

    $amarroom_counter=0;
 

    if( $city == "Coxs-Bazar" )
    {
        $url_amarRoom = "https://amarroom.com/hotels-in-coxs-bazar-bangladesh-2/?&checkin=";
    }

    else if( $city == "Sylhet" )
    {
        $url_amarRoom = "https://amarroom.com/hotels-in-sylhet-bangladesh-3/?&checkin=";
    }

    else if( $city == "Bandarban")
    {
        $url_amarRoom = "https://amarroom.com/hotels-in-bandarban-bangladesh-15/?&checkin=";
    }

    else if( $city == "Chittagong" )
    {
       $url_amarRoom = "https://amarroom.com/hotels-in-chittagong-12/?&checkin=";
    }

    else if( $city == "Saint Martin" )
    {
        $url_amarRoom = "https://amarroom.com/hotels-in-saint-martin-48/?&checkin=";
    }
    else if( $city == "Srimangal")
    {
        $url_amarRoom = "https://amarroom.com/hotels-in-sreemangal-moulavi-bazar-22/?&checkin=";
    }
    else if( $city == "Dhaka")
    {
        $url_amarRoom = "https://amarroom.com//hotels-in-dhaka-bangladesh-1/?&checkin=";
    }
    //now making the final url
     
    $url_amarRoom =  $url_amarRoom.$dup_check_in;  // adding check-in date

    $url_amarRoom = $url_amarRoom."&check_out".$dup_check_out;

    // making url for amarroom.com is done

    //now picking up the html
    //echo $url_amarRoom;

    $url_amarRoom = file_get_contents( $url_amarRoom );

    // now I am going to extract amarroom.com

    $onlyHotel = explode( '<div class="column col-4 col-sm-12 col-md-6">', $url_amarRoom );

    $creating_view_deal_Url = "?&checkin=$check_in&checkout=$check_out";

    for( $i = 1; $i < count($onlyHotel); $i++)
     {
        //echo $onlyHotel[$i];

        // now picking the hotel name

        $div = explode('<span class="title">', $onlyHotel[$i]);

        $name1 = explode('<', $div[1]);



        //now picking price

        $pDiv = explode( "<span>",$onlyHotel[$i]);

        $price1 = explode("<", $pDiv[1]);

        $without_BDT = explode("BDT", $price1[0]);

        //now picking and making link

        $lDiv = explode('<a class="dated-url" href="', $onlyHotel[$i]);

        $baseLink = explode('"', $lDiv[1]);


        $myLink = $baseLink[0].$creating_view_deal_Url;

        $myLink = "https://amarroom.com" . $myLink;


        //$amarroom_hotel_name_with_price["$name1[0]"] = $price1[0];

        $amarroom_hotel_name_with_price["$name1[0]"] = $without_BDT[1];

        $amarroom_hotel_name_with_deal_link["$name1[0]"] = $myLink;

        $amarroom_counter++;

     }

     //echo " <h1>$amarroom_counter number of hotels in $city at amarroom.com</h1>";


     // NOW THIS THE FINAL TASK. COMPARING HOTELS.

     //----------------------------------COMPARING--------------------------------------------

     // At first for every hotel in touriffy.com I will search for that hotel in amarroom.com.

     //If I encounter one than compare price of the hotel in both websites and take the best one.

     //and make the hotel in amarroom.com to be false

     //else just print the hotel in touriffy.com

     //After finishing this I will work with amarroom.com with those  hotels that are still true

     // So lets go

     //make all the hotels in amarroom.com to unvisited

     $amarroom_room_visit = array(20);

     foreach($amarroom_hotel_name_with_price as $key => $value) 
     {
        $amarroom_room_visit[$key] = 0;
     }
     foreach($touriffy_hotel_name_with_price as $key => $value) {
        if($key!="0")
         if (array_key_exists($key, $amarroom_hotel_name_with_price))
         {
            //echo "$key is found in both website<br>";

            //echo "touriffy = $touriffy_hotel_name_with_price[$key]<br>";
            //echo "amarroom = $amarroom_hotel_name_with_price[$key]<br>";
            
            $amarroom_room_visit[$key] = 1;  //make it visited
            
            if($touriffy_hotel_name_with_price[$key] < $amarroom_hotel_name_with_price[$key])
            {
                
                
             echo "<div class='t' style='position: absolute; top: " .$top."px; '>";
              ?>
              <?php
            $top+=300;
            
                echo "'<h3 align='center'>$key <br>best price = $touriffy_hotel_name_with_price[$key] <br>worst price = $amarroom_hotel_name_with_price[$key]</h3>";
                echo "<br>";

                echo '<h3 align="center"><a href=" ' . $touriffy_hotel_name_with_deal_link[$key] . ' ">view best deal at touriffy.com</a></h3>';
                echo "<br>";
                echo "<br>";echo "<br>";
            }
            ?>
            </div>
            <?php
         }
         else
         {
          echo "<div class='t' style='position: absolute; top: " .$top."px; '>";
            ?>
        
            <?php
            $top+=300;
                echo "<h3 align='center'>$key <br>best price = $touriffy_hotel_name_with_price[$key]</h3>";

                echo "<br>";

                echo '<h3 align="center"><a href=" ' . $touriffy_hotel_name_with_deal_link[$key] . ' ">view best deal at touriffy.com</a></h3>';

                echo "<br>";
                echo "<br>";
                echo "<br>";
                ?>
            </div>
            <?php
         }
      }

      foreach($amarroom_hotel_name_with_price as $key => $value) 
     {
        if( $amarroom_room_visit[$key] == 0 &$key!="0" )
        {
          echo "<div class='t' style='position: absolute; top: " .$top."px; '>";
            ?>
            <?php
            $top+=300;
               echo "<h3 align='center'>$key <br>best price = $amarroom_hotel_name_with_price[$key]</h3>";

                echo "<br>";

                echo '<h3 align="center"><a href=" ' . $amarroom_hotel_name_with_deal_link[$key] . ' ">view best deal at amarroom.com</a></h3>';

                echo "<br>";
                echo "<br>";
                echo "<br>";
                ?>
            </div>
            <?php
        }
     }
?>
</body>
</html>
