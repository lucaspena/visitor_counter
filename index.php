<html>
  <head>
    <title>Lucas's Webpage</title>
  </head>
  <body>
    <?php 
       system("python counter.py");
       echo("<br />");
       $t=time();
       echo("You are visiting my website on ");
       echo(date("D F d Y", $t));
       echo(" at ");
       $h = date("H", $t);
       echo($h);
       echo(":");
       echo(date("i", $t)); 
       echo(":");
       echo(date("s" ,$t));
       echo("<br />");
       echo("<br />");
       
       $check = 0;
       if ($h < 8) $check = 0;
       else if ($h >= 16) $check = 2;
       else $check = 1;

       $command1 = "python morning.py \"$check\"";
       $command2 = "python afternoon.py \"$check\"";
       $command3 = "python evening.py \"$check\"";

       echo("Number of visitors by time of day");
       echo("<br />");
       echo("&nbsp; &nbsp; &nbsp; Morning visitors (midnight to 8am): ");
       system("$command1");
       echo("<br>");
       echo("&nbsp; &nbsp; &nbsp; Afternoon visitors (8am to 4pm): ");
       system("$command2");
       echo("<br />");
       echo("&nbsp; &nbsp; &nbsp; Evening visitors (4pm to midnight): ");
       system("$command3");
    ?>
  </body>
</html>
