<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Vedran Preradović</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico.png">
    
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script><!-- povlacenje koda sa stranice https://code.jquery.com/ -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script><!-- kod sa animirani tekst https://cdnjs.com/libraries/typed.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script><!-- povlacenje koda sa stranice https://cdnjs.com/libraries/waypoints -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script><!-- povlacenje koda sa stranice https://cdnjs.com/libraries/OwlCarousel2 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" /><!-- povlacenje koda sa stranice https://cdnjs.com/libraries/waypoints -->
</head>
    
<body>
    
    <div class="scroll-up-btn"><!-- strelica koja vodi na vrh stranice -->
		<i class="fa fa-angle-up"></i>
	</div>
    
    <nav class="navbar">
        <div class="wrapper">
            <div class="logo"><h1><a href="index.php">Portfo<span>lio.</span></a></h1></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Početna</a></li>
                <li><a href="#about" class="menu-btn">O meni</a></li>
                <li><a href="#services" class="menu-btn">Usluge</a></li>
                <li><a href="#skills" class="menu-btn">Skilovi</a></li>
                <li><a href="#teams" class="menu-btn">Moj tim</a></li>
                <li><a href="#contact" class="menu-btn">Kontakt</a></li>
            </ul>
            
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
            
        </div>
    </nav>
    
    <section class="home" id="home">
        <div class="wrapper">
            <div class="home-content">
                <div class="text-1">Bok, moje ime je</div>
                <div class="text-2">Vedran Preradović</div>
                <div class="text-3">I ja sam <span class="typing"></span></div>
                <a href="mailto:vedranpreradovic@gmail.com">Zaposli me</a>
            </div>
        </div>
    </section>
    
    
    <section class="about" id="about">
        <div class="wrapper">
            <h2 class="title">O meni</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="img/profile-1.jpg" alt="Vedran Preradović">
                </div>
                
                <div class="column right">
                    <div class="text">Zovem se Vedran i ja sam  <span class="typing-2"></span></div>
					<p>Kreativni sam front-end developer trenutno smješten u Koprivnici. Fokusiran sam na razvoj interaktivnih web stranica koristeći HTML, CSS, JavaScript i PHP. Imam <i>Bachelor</i> diplomu iz Multimedije, oblikovanja i primjene sa Sveučilišta Sjever. Pohađao sam i završio usavršavanje za web programera. Od dosadašnjeg radnog iskustva istaknuo bih rad u Gradskoj upravi kao informatičar i kao Tehnolog/konstruktor u ambalažnoj industriji Bilokalnik IPA. Slobodno vrijeme volim provoditi svirajući gitaru i bavljenjem sportom</p>
					<a href="img/VedranPreradovic.pdf" download target="_blank">Preuzmi CV</a>
                    <a href="img/diploma.jpg" download target="_blank">Preuzmi Diplomu</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="services" id="services">
        <div class="wrapper">
            <h2 class="title">Moje usluge</h2>
            <div class="services-content">
            
                <div class="card">
                    <div class="box">
                        <i class="fa fa-html5"></i>  
                        <div class="text">HTML 5</div>
                        <p>Praćenje novih web tehnologija i njihova uporaba na svakom projektu moj su glavni prioritet.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="box">
                        <i class="fa fa-css3"></i>  
                        <div class="text">CSS 3</div>
                        <p>Dizajn i ambalaža prodaju proizvod. Moj dizajn radit će na svakom uređaju, velikom ili malom.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="box">
                        <i class="fa fa-code"></i>  
                        <div class="text">JavaScript</div>
                        <p>Web stranice ne moraju biti statične. Volim raditi stranice koje će lako oživjeti</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <section class="skills" id="skills">
        <div class="wrapper">
            <h2 class="title">Moji skilovi</h2>
            <div class="skills-content">
                <div class="column left">
                
                    <div class="text">Moje kreativne vještine i iskustva.</div>
					<p>Imam čvrsto znanje HTML, CSS i JavaScript jezika i dobro poznajem razne <i>framework-ove</i> koji se koriste u današnjoj tehnologiji kao npr Bootstrap. Na osobno sam razini visoko motiviran, vrijedan, brzo učim i neprestano nastojim poboljšati svoje vještine te sam u potpusnosti svjestan najnovijih front-end razvojnih alata.<span id="dots"></span><span id="more"> Uz to, imam sposobnost prilagodbe bilo kojoj vrsti timskog okruženja, timski sam orijentiran i slažem se s drugima kad radim u grupnom okruženju. Također imam mogućnost samostalnog rada, držeći se rasporeda i poštujući rokove.</span></p>
				    <a onclick="myFunction()" id="myBtn">Pročitaj više</a>
                </div>
                
                <div class="column right">
                    
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>70%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>60%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="teams" id="teams">
    <div class="wrapper">
        <h2 class="title">Moj tim</h2>  
        <div class="carousel owl-carousel">
        
            <div class="card">
                <div class="box">
                    <img src="img/profile-1.jpg" alt="Vedran Preradovic">
                    <div class="text">Vedran Preradović</div>
                    <p>Web Developer</p>
                    <p>Tim leader/web developer</p>
                </div>
            </div>
            
            <div class="card">
                <div class="box">
                    <img src="img/profile-2.jpg" alt="Sabina Kuhan" class="user2">
                    <div class="text">Sabina Kuhar</div>
                    <p>Web Designer</p>
                    <p>Planira i osmišljava design</p>
                </div>
            </div>
            
            <div class="card">
                <div class="box">
                    <img src="img/profile-3.jpg" alt="Ratko Leval">
                    <div class="text">Ratko Levak</div>
                    <p>Frontend Developer</p>
                    <p>Odgovoran za cijeli frontend kod</p>
                </div>
            </div>
            
            <div class="card">
                <div class="box">
                    <img src="img/profile-4.jpg" alt="Ana Ljubic">
                    <div class="text">Ana Ljubić</div>
                    <p>Frontend Developer</p>
                    <p>Odgovorna za cijeli frontend kod</p>
                </div>
            </div>
            
            <div class="card">
                <div class="box">
                    <img src="img/profile-5.jpg" alt="Marin Zuzic">
                    <div class="text">Marin Žužić</div>
                    <p>Backend Developer</p>
                    <p>Programiranje onog što se ne vidi</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <section class="contact" id="contact">
        <div class="wrapper">
            <h2 class="title">Kontaktiraj me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Stupi u kontakt</div>
                    <p>Imaš pitanje ili želiš da radimo zajedno? Kontaktiraj me ako želiš izradu web stranice ili ako imaš bilo kakvo pitanje vezano uz projekte.</p>
                    <div class="icons">
                    
                        <div class="row">
                            <a href="tel:+385989737643"><i class="fa fa-phone"></i></a>
                            <div class="info">
                                <div class="head">Telefon</div>
                                <div class="sub-title"><a href="tel:+385989737643">+385 98 973 76 43</a></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <i class="fa fa-map-marker"></i>
                            <div class="info">
                                <div class="head">Adresa</div>
                                <div class="sub-title">Koprivnica, Hrvatska</div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <a href="mailto:vedranpreradovic@gmail.com"><i class="fa fa-envelope"></i></a>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title"><a href="mailto:vedranpreradovic@gmail.com">vedranpreradovic@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="right">
                
                    <div class="text">Pošalji mi poruku</div>
                    <form action="adresa.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="ime" placeholder="Ime" required>
                            </div>
                            <div class="field email">
                                <input type="text" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="naslov" placeholder="Naslov" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="adresa" id="" cols="30" rows="10" placeholder="Opiši projekt..." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Pošalji poruku</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <span>Izradio <a href="https://www.facebook.com/vedran.preradovic.7" target="_blank" title="Facebook">Vedran Preradović</a> | <span class="fa fa-copyright"></span> Sva prava pridržana 2020</span>
    </footer>
    
    <script>
	function myFunction() {
  		var dots = document.getElementById("dots");
 		var moreText = document.getElementById("more");
 	 	var btnText = document.getElementById("myBtn");
 	 	$("span#more").show(1200);

 	 	if (dots.style.display === "none") {
   			dots.style.display = "inline";
   		 	btnText.innerHTML = "Pročitaj više"; 
   		 	moreText.style.display = "none";

  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Pročitaj manje"; 
    moreText.style.display = "inline";
  }
}
</script>
    
    
    <script src="js/script.js"></script>
</body>
</html>