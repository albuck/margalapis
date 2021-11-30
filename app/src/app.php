<?php

if(isset($_POST['submit'])) {
   $name = trim($_POST['name']);
   $email = trim($_POST['email']);
   $title = trim($_POST['title']);
   $message = trim($_POST['message']);
   
   if(!empty($name) && !empty($email) && !empty($title) && !empty($message)) {
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
         include 'db.php';
         mysqli_query($mysqli, "INSERT INTO klientai (name, email, title, message)
         VALUES('$_POST[name]', '$_POST[email]', '$_POST[title]', '$_POST[message]')");
         $from = "$email";
         $to = "algirdasbuckus@gmail.com";
         $subject = "Nauja žinutė";
         $autorius = 'Nuo: ' . $name . ', ' . $email . ', ' . $title;
         $zinute = htmlspecialchars($message);
         mail($to, $subject, $autorius, $zinute, $from);
         echo "<script>alert('Sveiki. Jūsų žinutę gavome. Susisieksime su Jumis artimiausiu metu.');</script>";
      }
   }

}

?>