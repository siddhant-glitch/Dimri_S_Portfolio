<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$isInserted = false;
$isError = false;
if(isset($_POST["submit"])){	
	$sql = "INSERT INTO contact_details (firstname, lastname, subject) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[subject]')";
	if ($conn->query($sql) === TRUE) {
	  $isInserted = true;
	} else {
	  $isError = true;
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel='stylesheet' type='text/css' media='screen' href='css/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/master.css'>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>

        
        <nav class="fixed_nav">
           <ul id="vueapp">
                <li v-on:click="navigation('index.php')"><a href="javascript:void(0);">Home</a></li><span class="sep_bar">|</span>
                <li v-on:click="navigation('work.php')"><a href="javascript:void(0);">Work</a></li><span class="sep_bar">|</span>
                <li v-on:click="navigation('contact.php')"><a href="javascript:void(0);">Contact</a></li><span class="sep_bar">|</span>
                <li v-on:click="navigation('about.php')"><a href="javascript:void(0);">About</a></li>
            </ul>
        </nav>
        <h2 class="heading">Contact</h2>
        <section class="bigContactContainer">			
			
            <div class="contactContainer">
			<?php
			if($isInserted){
				echo "<center><label style='color:green;'>Data has been saved successfully</label></center>";
			} elseif($isError){
				echo "<center><label style='color:red;'>Something went wrong</label></center>";
			}
			?>
                <form method="post">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
            
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            
                <input type="submit" value="Submit" name="submit">
                </form>
            </div>

            <div class="extraInfo">
                <div class="ContactNo"></div>
                <div class="email"></div>
                <div class="address"></div>
                <div class="links">
                    <h2>Links</h2>
                    <div class="linkImages">
                        <a href="#">eeenshta</a>
                        <a href="#">behance</a>
                        <a href="#">github</a>
                    </div>
                </div>
                
            </div>

        </section>
  


    <script src='js/main.js'></script>
	<script>
	var app = new Vue({
	  el: '#vueapp',
	  data: {},
	  mounted: function () {
	  },

	  methods: {
		navigation: function(redirect_val){
			window.location.href = redirect_val;
		}
	  }
	})    
	</script>
</body>
</html>