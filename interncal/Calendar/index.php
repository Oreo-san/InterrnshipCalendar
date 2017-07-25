<!DOCTYPE HTML>

<html>

<head>
  <title></title>

</head>

<body style="background: #ECEFF1">

<?php    
    include ("datepicker.html");
    require ("navBar.php"); 
    include ("calendar.php");
    if(isset($_POST["search"]))
      include ("search.php");
    else if(isset($_GET["day"]))
    {      
      include ("ShowEvent.php");
    }
    else
    {
      include ("ShowUpcomingEvents.php");
    }
    include ("header.php");
?>

</body>

</html>