<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
    
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel='stylesheet' type='text/css' media='screen' href='css/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/master.css'>
    
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

        <h2 class="heading">About me</h2>

        <section class="bigAboutContainer">

            <div class="aboutContainer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum sed arcu non odio euismod lacinia. Vel risus commodo viverra maecenas accumsan. Dui id ornare arcu odio ut sem nulla pharetra diam. Elit duis tristique sollicitudin nibh. Integer malesuada nunc vel risus commodo. Velit euismod in pellentesque massa. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor. Vitae tortor condimentum lacinia quis vel.
                Vitae sapien pellentesque habitant morbi tristique senectus. Morbi tristique senectus et netus et malesuada fames ac turpis. Molestie at elementum eu facilisis sed odio morbi. Eu ultrices vitae auctor eu augue ut lectus arcu. Ac tortor vitae purus faucibus. Morbi quis commodo odio aenean sed. Erat nam at lectus urna duis. Sit amet nisl suscipit adipiscing bibendum. Gravida cum sociis natoque penatibus et magnis dis. Tincidunt praesent semper feugiat nibh sed pulvinar. Sed libero enim sed faucibus. Donec et odio pellentesque diam volutpat commodo sed egestas. Tellus in metus vulputate eu scelerisque. Iaculis urna id volutpat lacus laoreet. In cursus turpis massa tincidunt dui ut ornare lectus sit. Commodo elit at imperdiet dui accumsan sit amet nulla. Scelerisque viverra mauris in aliquam sem fringilla. Sed turpis tincidunt id aliquet risus feugiat in ante metus. Sit amet dictum sit amet justo. Fringilla est ullamcorper eget nulla facilisi etiam dignissim.</p>
            </div>

            <div class="aboutPhoto">
                <img src="images/about.jpg" alt="about image">
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