<?php


  //Host
  $host ="localhost";

  //dbname

  $dbname ="bookstore1";


  //username

  $user ="root";

  //password

  $pass ="";

  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $secret_key = "sk_test_51Q0Q6p2Mu3rz4WCwYubsJbN4ZAb8GpL617SIUoWm88rKwBmnHWn1NFrvox7bUjCbhU0mOaImGGsDRX197vwtz7RI00d4ZUTdLA";
  // if($conn) {
  //   echo "Worked SuccessfulLy";
  //  } else {
  //   echo "Error in db connection";
  // }
