<div class="col-md-6" align="center" style="padding-top:30px">
<?php
 include "DBConn.php";
 $query = $_POST['query'];

 $sql= mysqli_real_escape_string($conn,$query);
 $sql= htmlspecialchars($sql);

 $results = mysqli_query($conn, "select * from register where (`EventName` like '%".$sql."%') or (`EventHead` like '%".$sql."%') or (`EventVenue` like '%".$sql."%')") or die(mysqli_error());
 if(mysqli_num_rows($results) > 0){
     ?>
     <table class="table table-striped table-bordered">
     
     <tr>
            <th>Event Head</th>
            <th>Event Name</th>
            <th>Event Details</th>
            <th>Event Venue</th>
            <th>Event Date</th>
            <th>Event Start</th>
            <th>Event End</th>
        </tr>
     <?php
			while ($var = mysqli_fetch_array($results) ){
                echo "<tr><td>". $var['EventHead']."</td><td>" .  $var['EventName'] ."</td><td>".   $var['EventDetails']."</td><td>" . $var['EventVenue']."</td><td>" . $var['EventDate']."</td><td>" . $var['EventStart']."</td><td>" . $var['EventEnd'];
				echo "</td></tr>";
            }
     echo "</table>";
 }
 else{
     echo "<h1>No Result</h1>";
 }
?>
</div>