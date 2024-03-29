<!DOCTYPE html>
<html>
<head>
	<title>Personal Profile</title>
	
	<link rel="apple-touch-icon" href="img/hmm.png">
	<link rel="icon" type="image/png" href="img/hmm.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">




</head>

  <meta charset="utf-8">
<script> // Click Me JS. Output CHange 
	function myFunction() {
	document.getElementById("demo").innerHTML = "Kathryn has an ENFP (Extraverted-Intuitive-Feeling-Perceiving) personality type. She likes spontaneity, new ideas and adventures and struggles being organized and sticking to a routine. She loves Jesus, helping and encouraging people, music and her two mini-poodles. She lives by the verse Isaiah 26:3. <br> <br> ~ Life is good, eternal life is better~ ";
	}
	
</script>
  

<body>

	<script>
	//  Alert box
	alert("The website is still under construction. Please be patient and don't judge the shabby design.");
	</script>


	<div class="header">
		<nav>
			<!--<h2 class="logo">About<span><i>Kath</i></span></h2>-->
			<img src="img/logo00.png" class="logo" width="225px" height="100px">
			<ul>
				<li><a href="#">Home</a></li>
				<!--<li><a href="#">Background</a></li>-->
				<li><a href="#">Profile</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Me</a></li>
			</ul>
			<ul>
				<li><a href="https://github.com/kathrynicuspit" class="btn" target="_blank"><img src="img/gitbtn.png" width="40px" height="40px"></a>
				<li><a href="https://www.facebook.com/kathryn.chaaan/" class="btn" target="_blank"><img src="img/fbbtn.png" width="40px" height="40px"></a>
				<li><a href="https://www.linkedin.com/in/kathryn-ann-icuspit-75659121a/" class="btn" target="_blank"><img src="img/lkdinbtn.png" width="40px" height="40px"></a>
			</ul>
		</nav>
	</div>

	<div class="content">
		<h4>Hello, my name is </h4>
		<h1>Kathryn Ann</h1>
		<h3>A student at Asia Pacific College enrolled in Web Programming</h3>
		<div class ="newslatter">
			<form>
				<input type="email" name="email" id="mail" placeholder="Enter Your Email ">
				<input type="submit" name="submit" value="Let's Start">
			</form>
		</div>

	<video id="videoplayer" controls width="490" height="370">
		<source 
			src="media/videos/vidintro.mp4"
			type="video/mp4"
		/>
	</video>
	
	</div>
		
	<!--About Section start-->
	
	<section class="about">
		<div class ="main">
			<img src="img/aboutpic2.jpg" height="600" width="400">
			
			<div class="about-text">
			<h2>About Me</h2>
			<h5>Isang Jumbo Hatdog</h5>
			<p id="demo">A 20-year old College student at APC pursuing the course Bachelor of Science in Information
				Technology specializing in Mobile and Internet Technologies. Now on her 2nd year and 2nd term in school, 
				she strives to be an excellent web designer and programmer as she is enrolled in Web Programming Class under 
				Prof. Jose Eugenio Quesada. On her free time, she likes to eat, watch anime, read manhwas and play with her dog.</p>
			<button type="button"  onclick="myFunction()">Click me</button>
			</div>
		</div>
	
	

	</section>
<div>
	

	<!--Service Section Start-->
	<div class="service">
	
		<div class="title">
			<h2>Trying JavaScript Here</h2>
		</div>
	
	
	<div class ="box">
		<div class="card">
			<i class="fas fa-bars"></i>
			<h5>Function Call</h5>
			<div class="pra">
			
			<!--
				<p>When you see love, leave a mark, heallin' broken hearts. You see chains fall apart, you see hope rise from the darkIt's so much more than ordinary, it's nothing less than extraordinary.It's the fingerprints of God.</p>
				
				<p style ="text-align: center;">
					<a class="button href="#">Read More</a>
			-->
			</div>
		</div>

	<<div class="card">
				<i class="far fa-user"></i>
				<h5>Maps</h5>
				<div class="pra">
				<p id="demo"></p>

			
			</div>
		</div>
				
	<div class="card">
				<i class="far fa-bell"></i>
				<h5>Modules</h5>
				<div class="pra">
				
				<p id="demo"></p>


					<!--
				<p>When you see love, leave a mark, heallin' broken hearts. You see chains fall apart, you see hope rise from the darkIt's so much more than ordinary, it's nothing less than extraordinary.It's the fingerprints of God.</p>
				
				<p style ="text-align: center;">
					<a class="button href="#">Read More</a>
			-->
				</div>	
		</div>	
	
	</div>

		</div>	
		
		<section class="forms">
		<div class="input">
		<?php
					$name = $email = $gender = $comment = $website = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$website = test_input($_POST["website"]);
		$comment = test_input($_POST["comment"]);
		$gender = test_input($_POST["gender"]);
		}
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		 return $data;
		}
		?><h2>Contact Me!</h2><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		Name: <input type="text" name="name"><br><br>
		E-mail: <input type="text" name="email"><br><br>
		Website: <input type="text" name="website"><br><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
		Gender:<input type="radio" name="gender" value="female">Female<input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="other">Other<br><br><input type="submit" name="submit" value="Submit">  </form><?php
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $website;
		echo "<br>";
		echo $comment;
		echo "<br>";
		echo $gender;
		?>

		</div>
		</section>
		
		
<div id="disqus_thread"></div>
	<script>

	/**
	*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

	var disqus_config = function () {
	this.page.url = "https://kattuwin-chan.disqus.com";  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = "kattuwin-chan"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};

	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://kattuwin-chan.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
							
  
  
  </div>


</body>

</html>
