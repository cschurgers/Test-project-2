<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prototyping Lab - People</title>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/nav.css" />
	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/nav.js"></script>
	<script type="text/javascript" src="http://use.typekit.net/dre7ync.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script>
	  $( document ).ready(function() {
		$( "#aboutLink" ).addClass( "active" );
		
		//show clicked on link data and hide all other data
		$(".bio").click(function() { 
		  var id = $(this).attr("id").split("_").pop();
	  
		  $(".profile").fadeOut(0); 
		  $("#prof_" + id).fadeIn(0);
		  return false;
		});
	  });
	</script>
  </head>

  <body>
    <header id="header">
<?php include('header.php'); ?>
    </header>
    <main id="main" class="bg">
      <div class="wrapper">
        <section class="leftColumn">
          <h3>Staff</h3>
          <p>
            <a class="bio" id="bio_1" href="#">Curt Schurgers</a><br />
            Manager
          </p>
          <p>
            <a class="bio" id="bio_2" href="#">Frank Cardone</a><br />
            Electronics Design Engineer
          </p>
          <p>
            <a class="bio" id="bio_3" href="#">Isaiah Freerksen</a><br />
            Mechanical Design Engineer
          </p>
          <p>
            <a class="bio" id="bio_4" href="#">Justyn Bell</a><br />
            Programmer
          </p>
  <!--        
		<h3>Students</h3>
          <p>
            <a class="bio" id="bio_5" href="#">Dominique Meyer</a><br />
            Lab Intern
          </p>
          <p>
            <a class="bio" id="bio_6" href="#">Dimitri Schreiber</a><br />
            Lab Intern
          </p>
-->

        </section>

        <article class="centerColumnFull">
          <section id="prof_1" class="profile" style="display:block">
            <div class="rightImage">
              <img src="img/people-schurgers.jpg" alt="Photo of Curt Schurgers" width="200" />
            </div>
            <h2>Curt Schurgers</h2>
            <p>Curt Schurgers oversees the prototyping lab, in addition to managing the wireless and circuits functional areas in QI. He also is a co-director of the Engineers for Exploration program at UCSD, and heads a research group in underwater systems.</p>
          </section>
          <section id="prof_2" class="profile">
            <div class="rightImage">
              <img src="img/people-cardone.jpg" alt="Photo of Frank Cardone" width="200" />
            </div>
            <h2>Frank Cardone</h2>
            <p>Frank has recently joined UCSD after working in industry for 25 years.  He has been designing custom, handheld, battery operated data acquisition systems for industry for 20 years.  Examples include nuclear instruments using photomultipliers and photo-diodes, switching power supplies and embedded systems for tracking and information gathering.
Frank's personal interests are cycling, hiking and swimming.</p>
          </section>
          <section id="prof_3" class="profile">
            <div class="rightImage">
              <img src="img/people-freerksen.jpg" alt="Photo of Isaiah Freerksen" width="200" />
            </div>
            <h2>Isaiah Freerksen</h2>
            <p>Isaiah joined the prototyping lab in April 2014.  He is an Alumni of UCSD and his last position was as a development engineer in the Mechanical and Aerospace Engineering department -- before this, he was working in industry. His focus is in machine design and fabrication. When not at the Prototyping lab Isaiah enjoys spending time with his family and doing anything that gets him outdoors.</p>
          </section>
          <section id="prof_4" class="profile">
            <div class="rightImage">
              <img src="img/people-bell.jpg" alt="Photo of Justyn Bell" width="200" />
            </div>
            <h2>Justyn Bell</h2>
            <p>Justyn Bell is a software developer for QI specializing in embedded *nix systems and software defined radio.  His projects have taken him through a breadth of platforms and devices ranging from FPGAs and embedded wireless systems to web based applications.  He is also a lab technician who helps support the software defined radio ECE191 projects and is available for setting up and maintaining group servers.</p>
          </section>
          <section id="prof_5" class="profile">
            <div class="rightImage">
              <img src="img/people-meyer.jpg" alt="Photo of Dominique Meyer" width="200" />
            </div>
            <h2>Dominique Meyer</h2>
            <p>Dominique is a freshman at UCSD, in the Physics department and interns here at the lab. He is knowledgeable at optimizing components or structures, and making them given the resources available. The material he is most comfortable with is wood, as he has been working with it for many years. He is comfortable operating the mills, laser cutter and 3D printers of the lab and will be happy to help you with whatever you bring to be done.</p>
            <p>His personal passions include the construction and flying of drones (multirotors, and planes); as well as the climbing of mountains in the outdoors. He is also a member of E4E and CISA 3.</p>
          </section>
          <section id="prof_6" class="profile">
            <div class="rightImage">
              <img src="img/people-schreiber.jpg" alt="Photo of Dimitri Schreiber" width="200" />
            </div>
            <h2>Dimitri Schreiber</h2>
            <p>Dimitri is an undergraduate electrical engineering student here at UCSD. Dimitri is interested in power electronics, control systems, and machine design. In his freetime he enjoys machining and working on projects, flying RC planes, and hanging out with friends. </p>
          </section>
        </article>
      </div>
    </main>
    <footer id="footer">
<?php include('footer.php'); ?>
    </footer>
  </body>
</html>
