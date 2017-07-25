<?php
	include("DBConn.php");
?>
<?php
    session_start();
    //$EventHead=$_SESSION["UserId"];
    date_default_timezone_set("Asia/Kolkata");
    $EventHead="Om";
    $date=date("Y-m-d", strtotime($_GET['year']."-".$_GET['month']."-".$_GET['day']));
    $query="SELECT * FROM register where EventDate='$date'";
    $results = $conn->query($query);
    if($results->num_rows>0)
    {
        ?>
        <table class="table table-striped table-bordered">
        	<tr>
        		<th>Event Name</th>
        		<th>Event Details</th>
        		<th>Event Venue</th>
        		<th>Event Start</th>
        		<th>Event End</th>
    		</tr>
        <?php
        while ($row = $results->fetch_assoc()) 
        {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row["EventName"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["EventDetails"]) . '</td>';
            //echo '<td>' . htmlspecialchars($row["EventDate"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["EventVenue"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["EventStart"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["EventEnd"]) . '</td>';
            $id=$row["EventID"];
            echo '</tr>';
        }
        echo "</table>";
    }
    
?><br>