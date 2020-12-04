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

$sql = "SELECT name, box_img_url, wide_img_url FROM portfolio_details";
$result = $conn->query($sql);
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
	<link rel='stylesheet' type='text/css' media='screen' href='css/lightbox.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
  
</head>
<body>
    <section class="fixed_bg">
        
        <nav class="fixed_nav">
            <ul id="vueapp">
                <li v-on:click="navigation('index.php')"><a href="javascript:void(0);">Home</a></li><span class="sep_bar">|</span>
                <li v-on:click="navigation('work.php')"><a href="javascript:void(0);">Work</a></li><span class="sep_bar">|</span>
                <li v-on:click="navigation('contact.php')"><a href="javascript:void(0);">Contact</a></li><span class="sep_bar">|</span>
                <li v-on:click="navigation('about.php')"><a href="javascript:void(0);">About</a></li>
            </ul>
        </nav>      
	 <section class="align"> 
	<h1 class="fixed_hello">This is my work page,</h1> 
	<p class="scrollInstr">Psst, Scroll</p>
</section>
    </section>

    <script src='js/main.js'></script>
	
	<h2 style="text-align: center;padding: 10px; background: dimgrey;color: white;font-size: 22px;">My Works</h2>
	<div class="row" style="padding: 10px;margin-bottom: 20px;background:black;">
	<?php
	if ($result->num_rows > 0) {	
		 $loop_count = 1;
	  while($row = $result->fetch_assoc()) {
	?>  
		<div class="column">
			<img src="images/lightbox/<?php echo $row["box_img_url"];?>" style="width:100%" onclick="openModal();currentSlide(<?php echo $loop_count;?>)" class="hover-shadow cursor">
		</div>		
	<?php $loop_count++;} }?>	 
	</div>
	
	<div id="myModal" class="modal">
	  <span class="close cursor" onclick="closeModal()">&times;</span>
	  <div class="modal-content">
		<?php				
			$result = $conn->query($sql);			
			if ($result->num_rows > 0) {
			  $loop_count = 1;			
			  while($row = $result->fetch_assoc()) {						
			?>  
				<div class="mySlides">
				  <div class="numbertext"><?php echo $loop_count;?> / <?php echo $result->num_rows;?></div>
				  <img src="images/lightbox/<?php echo $row["wide_img_url"];?>" style="width:100%">
				</div>	
		<?php $loop_count++;} }?>	
		
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		<div class="caption-container">
		  <p id="caption"></p>
		</div>
		
		<?php			
			$result = $conn->query($sql);	
			if ($result->num_rows > 0) {
			  $loop_count = 1;			
			  while($row = $result->fetch_assoc()) {
			?>  
			<div class="column">
			  <img class="demo cursor" src="images/lightbox/<?php echo $row["wide_img_url"];?>" style="width:100%" onclick="currentSlide(<?php echo $loop_count;?>)" alt="<?php echo $row["name"];?>">
			</div>
		<?php $loop_count++;} }?>	
		
	  </div>
	</div>
<script src='js/lightbox.js'></script>
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