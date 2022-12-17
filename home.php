<html>
  <title>Welcome!</title>
  <body bgcolor ="yellow"> 
   <?php
    $lastname = $_POST["lname"];
    $name = $_POST["fname"];  
    $email = $_POST["email"];
    $text= $_POST["description"];
    $filer = fopen("date.txt", "r");
    $num = fread($filer, 1);
    fclose($filer); 
    $file = fopen("$num.txt","w");
    fwrite($file,$name."\n".$lastname."\n".$email."\n".$text."\n");
    fclose($file);
    $num = $num+1;
    $filew = fopen("date.txt", "w");
    fwrite($filew, $num);
    fclose($filew);    
    echo "پیام شما ارسال شد ";
    echo ($name) ;
    echo " ";
    echo ($lastname);
    echo " ";
    echo "عزیز";
    echo "<br>";
    echo " ";
    echo "با تشکر";

  ?>
  </body>
 </html>
