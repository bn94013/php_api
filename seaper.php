<?php
    ini_set('display_errors','off');
    $city = $_GET['city'];

    // $city = str_replace(" ","-", $city);

    // $city = "london";
    
    $apikey = "0d45086c06b34088a8d460ae72dc3f75";

    $contents =  @file_get_contents("https://api.openweathermap.org/data/2.5/forecast?q=".$city."&appid=".$apikey."&lang=zh_tw");

 
  //天氣的api  
  // https://api.openweathermap.org/data/2.5/forecast?q=London,us&appid=0d45086c06b34088a8d460ae72dc3f75&lang=zh_tw
  

    $contents = json_decode($contents , true);

    $cityName = $contents['city']['name'];
    $description = $contents['list'][7]['weather'][0]['description'];
    $temperature =  $contents['list'][7]['main']['temp'] - 273.15;
    $humidity = $contents['list'][7]['main']['humidity'];

    // print_r ($cityName);
    // print_r ($description);
    // print_r ($temperature);
    // print_r ($humidity);


    $result = '城市:' .$cityName. '<br>天氣狀況:' .$description. '<br>溫度:'.$temperature.'度<br>'.'濕度為:' .$humidity. '%'  ;
  

    if ($cityName != ''){
        echo $result;
    }

    

  

   
?>