<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prototyping Lab</title>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/nav.css" />
	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/nav.js"></script>
	<script type="text/javascript" src="http://use.typekit.net/dre7ync.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script>
	  $( document ).ready(function() {
		$( "#homeLink" ).addClass( "active" );
		$( "#leftTitleBox" ).hover(function() {
		  $( "#image-left-blurb" ).toggle("500");
		});
		$( "#rightTitleBox" ).hover(function() {
		  $( "#image-right-blurb" ).toggle("500");
		});
	  });
    </script>
    <script>
	  $(function(){
		$('.multipleslides').each(function(){
		  // scope everything for each slideshow
		  var $this = this;
		  $('> :gt(0)', $this).hide();
		  setInterval(function(){$('> :first-child',$this).fadeOut().next().fadeIn().end().appendTo($this);}, 5000);
		})
	  });
	</script>
  </head>

  <body>



    <header id="header">
<?php include('header.php'); ?>
    </header>
    <main id="main">



      <section id="jumbotron">
        <div id="imageContain">
          <div id="leftTitleBox"><a href="design.php" style="text-decoration:none;color:#FFFFFF;">DESIGN CONSULTING</a></div>
          <div id="imageLeftBox">
            <div class="multipleslides">
              <img src="img/slide-left01.jpg" class="image-left" alt="Design Services" />
              <img src="img/slide-left02.jpg" class="image-left" alt="Design Services" />
              <img src="img/slide-left03.jpg" class="image-left" alt="Design v" />
            </div>
            <div id="image-left-blurb" style="display:none">
              <p class="blurb"><span class="cyan"><strong>WE BUILD THINGS FOR YOU:</strong></span> Our team consists of staff engineers and programmers, who are experts in electrical, mechanical and software design. We provide prototyping and engineering support for UCSD researchers, research programs, departments, as well as external collaborators. Our expertise spans a wide range of technologies and application domains, from bio-medical and embedded systems to robotics, mechatronics and wireless systems. Our time is available both on a project-by-project basis, as well as for part-time longer-term commitments.</p>
              <p class="cyan"><strong>(click title to read more)</strong></p>
            </div>
          </div>
	     <div id="rightTitleBox"><a href="collaborative.php" style="text-decoration:none;color:#FFFFFF;">COLLABORATIVE DESIGN</a></div>
          <div id="imageRightBox">
            <div class="multipleslides">
              <img src="img/slide-right01.jpg" class="image-right" alt="The Workspace" />
              <img src="img/slide-right02.jpg" class="image-right" alt="The Workspace" />
              <img src="img/slide-right03.jpg" class="image-right" alt="The Workspace" />
            </div>
            <div id="image-right-blurb" style="display:none">
              <p class="blurb"><span class="cyan"><strong>WORK WITH US IN OUR SPACE:</strong></span> We are not only a design consulting service that can build things for you. We can also work collaboratively with you on a prototyping design, offering you space in our lab. This way, we can collaborate effiently on joint projects, with you having direct access to our tools, equipment and machines (with appropriate training).</p>
              <p class="cyan"><strong>(click title to read more)</strong></p>
            </div>
          </div>
        </div>
      </section>
      <section id="textarea">
        <article class="mission">
          <p><div class="dropCap"><span class="blue">W</span></div><span class="blue"><strong>e are here to help you build things.</strong></span> If you need to create embedded electronics, mechanical devices, robotic contraptions, real-time/networking software, 3D printed structures, or for general systems engineering support; look no further, we are here for you.</p>
<p> Our goal is to provide prototyping/engineering services to UCSD researchers. We can help with individual projects, but also be involved in more extensive institutional support. We are equally a dedicated engineering service in electrical and mechanical systems (i.e. we can design, prototype, program and build/machine systems for you) and a shared project space to work with you directly.


          
        </article>
        <blockquote style="font-size:18px">
          <p style="font-size: large"><b>Announcements:</b><br><br>The prototyping lab was featured in <a href="https://www.asee.org/public/conferences/56/papers/13209/view">"A Review of University Maker Spaces"</a>, 2015 ASEE Annual Conference & Exposition.</p>
        </blockquote>
      </section>
    </main>
    <footer id="footer">
<?php include('footer.php'); ?>
    </footer>
  </body>
</html>
