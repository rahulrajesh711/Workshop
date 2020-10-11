<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback Form</title>
  </head>
  <body>
    <h1>FEEDBACK PLEASE</h1>
    <form  action="q2_send_mail.php" method="post">
      <label for="name">Name</label>
      <input type="text" name="name"> <br>
    <br>  <label for="name">Email</label>
      <input type="text" name="email"><br>
    <br>  <label for="name">Feedback</label> <br>
      <textarea name="feedback" rows="8" cols="80"></textarea>
    <br>  <input type="submit" name="submit" >
    </form>
  </body>
</html>
<?php

if($_POST["submit"])
{
 echo "Thanks for giving feedback.";
 $name = $_POST["name"];
 $mailto = $_POST["email"];
 $adminmail= "rahulrajesh711@gmail.com";
 $feedback = $_POST["feedback"];
 $subject = "Feedback";
 $msg = "Hey $name thanks for filling feedback. Here is what we got from you: \n";
 $finalmsg = $msg . $feedback;
 $finalmsg = wordwrap($finalmsg, 70);
 $headers = "From: rahulrajesh711@gmail.com";
 $headers1 = "From: $mailto";

 $msg1 = "Here is what we got from $name ($mailto): \n";
 $finalmsg1 = $msg1 . $feedback;
 $finalmsg1 = wordwrap($finalmsg1,70);
 $headers1 = "From: $mailto";

 mail($mailto,$subject,$finalmsg,$headers);
 mail($adminmail,$subject,$finalmsg1,$headers1);

}

?>