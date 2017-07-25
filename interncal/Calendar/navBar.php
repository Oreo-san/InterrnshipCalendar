<style>
    button{
        padding:0px;
        margin:0px;
        background:none;
        border:none;
    }
    button:focus {outline:0;}
</style>
<!-- 
<script>
$(document).ready(function(){
    $("#post").click(function(){
        $("#box").load("post.php");
    });
	$("#profile").click(function(){
        $("#box").load("profile.php");
    });
	$("#home").click(function(){
        $("#box").load("feeds.php");
    });
});
</script> -->

<div class="container-fluid" style="padding: 0px; margin-top: 0px;background: black">
    <nav class="navbar navbar-inverse" style="padding: 0px; margin: 0px" >  
    <div class="container-fluid" id="gg">
        <div class="navbar-header" >
        <a class="navbar-brand" href="index.php" style="color:aliceblue">Event Calendar</a>
        </div>
        <ul class="nav navbar-nav" >
            <li><a  href="index.php"><button id="home">Home</button></a></li>
            
			
			<?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                    ?>
						<li><a><button id="post">Post</button></a></li>
						<li><a><button id="profile">Profile</button></a></li>
					<?php
                }
            ?>
		</ul>
        <ul class="nav navbar-nav navbar-right" style="margin-top: 6px; margin-right:2px">
            <?php
                require "../Extra/Extra.html";
                require "../Google_OAuth/googleOAuth.html";
            ?>
        </ul>
       <form class="navbar-form navbar-right" method="post" action="index.php">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Event Search" name="query">
            <div class="input-group-addon">                
                <button class="glyphicon glyphicon-search" id="sbtn" type="submit" name="search"></button>               
            </div>
            </div>
        </form>
        
       
        </div>
        </div>  
    </nav>
    </form>
</div>