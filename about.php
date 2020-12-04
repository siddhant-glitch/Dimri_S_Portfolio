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
                <p>Hi I'm Siddhant, people call me Sid, and as you can see everywhere on this site, i love design!
                    I would say my expertise lies in following my instinct but i work well with guidelines too. I've been an introvert all my life and a while back i thought of trying to change my outlook. I think i'm more positive, easy to talk to and a nice person overall. So, do use my contact page which really took a lot of time to work just right and send me a msg. Even if you don't wanna hire me or give me work, we can just talk about design itself and I hope I can be use to you.
                </p>
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