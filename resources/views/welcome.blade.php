<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Pribadi Adithya</title>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<script>
		function sendwhatsapp(){
					var phonenumber = "+6282113310592";
					var name = document.getElementById("nama").value;
					var emails = document.getElementById("email").value;
					var subjects = document.getElementById("subject").value;
					var messages = document.getElementById("message").value;
					var msg1 = document.getElementById("msg1");
					var msg2 = document.getElementById("msg2");
					var msg3 = document.getElementById("msg3");
					var msg4 = document.getElementById("msg4");


			if(nama.value == "") {
                nama.focus();
                nama.placeholder ="Contoh : Kang Adit"
				msg1.innerHTML = "Masukkan nama anda!!";
                alert("Nama harus diisi!!");
                return false;
            }
			
			if(email.value == "") {
                email.focus();
                email.placeholder ="Contoh : kangadit@gmail.com"
                alert("email harus diisi!!");
				msg2.innerHTML = "Masukkan email anda!!";
                return false;

            }

            if(isNaN(nama.value) == false) {
                nama.focus();
                msg.innerHTML = "Nama Harus Berupa Huruf!!";
                return false;
            }

			if(subject.value == "") {
                subject.focus();
                subject.placeholder ="Contoh : Pertanyaan"
				msg3.innerHTML = "Masukkan subject yang ingin disampaikan!!";
                alert("Subject harus diisi!!");
                return false;
            }
			if(message.value == "") {
                message.focus();
                message.placeholder ="Contoh : Saya memiliki pertanyaan untuk mas adithya yaitu bagaimana cara membuat blog ini?"
				msg4.innerHTML = "Masukkan pesan yang ingin disampaikan!!";
                alert("Message harus diisi!!");
                return false;
            }

					var url = "https://wa.me/" + phonenumber + "?text=" + "*Name  :* " + name + "%0a"
					+ "*Email  :* " + emails + "%0a"
					+ "*Subject :* " + subjects + "%0a"
					+ "*Message  :* " + messages + "%0a%0a";

					window.open(url, '_blank').focus();
		
				}
    </script>
	
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Kang blogspot</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Education</span></a></li>
	          <li class="nav-item"><a href="#hobby-section" class="nav-link"><span>Hobby</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Project</span></a></li>
			  <li class="nav-item"><a href="#assignment-section" class="nav-link"><span>Assignment</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_02.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm <span>Adithya Eka Pramudita</span></h1>
			            <h2 class="mb-4">Welcome to my web</h2>
			        
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_01.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm a <span>a student</span> of Institut Teknologi Sepuluh Nopember</h1>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_02.png);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <h3 style="font-size: 20px;" class="mb-4">Nama saya Adithya Eka Pramudita, seorang mahasiswa aktif di Institut Teknologi Sepuluh Nopember (ITS), saya memiliki semangat dan keinginan kuat untuk terus mengembangkan keterampilan dan memperluas pengalaman. Saya percaya bahwa pengalaman adalah guru terbaik, dan saya berkomitmen untuk terus belajar dan berkembang agar bisa berkontribusi positif dalam perkembangan teknologi dan ilmu pengetahuan, serta mencapai impian dan tujuan saya.</h3>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
	               
                </p>
                <p><a href="https://drive.google.com/uc?export=download&id=1lN0WLcVZ17bLLLw4Krs5mAmvKV9qWGIR" class="btn btn-primary py-3 px-3">Download CV</a></p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Education</h1>
            <h2 class="mb-4">Education</h2>
            <p>Berikut ini merupakan lembaga pendidikan yang pernah saya jadikan sebgai tempat menuntut ilmu</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2013-2018</span>
    					<h2>SD Negeri</h2>
    					<span class="position">SDN Menteng 02 pagi</span>
    					<p class="mt-4">Sekolah Dasar Negeri (SDN) Menteng 02 Pagi, yang berlokasi di Jalan Tegal No. 10, Kelurahan Menteng, Kecamatan Menteng, Jakarta Pusat, adalah sebuah institusi pendidikan yang berada di bawah naungan Kementerian Pendidikan dan Kebudayaan. Didirikan pada tanggal 1 Februari 1932, sekolah ini melayani pendidikan sehari penuh selama 5 hari dalam seminggu dan memiliki 16 rombongan belajar, dari kelas I sampai kelas VI, dengan jumlah siswa sebanyak 578 orang.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2020-2022</span>
    					<h2>Jurusan IPA</h2>
    					<span class="position">SMAN 26 jakarta</span>
    					<p class="mt-4">SMA Negeri 26 Jakarta adalah sekolah negeri yang berlokasi di Jl. Tebet Barat IV, Tebet Barat, Kec. Tebet, Kota Jakarta Selatan. Sekolah ini didirikan pada 22 September 1968 dan telah mengalami beberapa renovasi sejak itu. SMA Negeri 26 Jakarta memiliki jumlah siswa total 638, dengan 290 laki-laki dan 348 perempuan. Sekolah ini memiliki berbagai fasilitas, termasuk laboratorium IPA, laboratorium komputer, dan fasilitas sanitasi
						</p>
    				</div>
    			</div>

    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2018-2020</span>
    					<h2>SMP Negeri</h2>
    					<span class="position">SMPN 115 jakarta</span>
    					<p class="mt-4">SMP Negeri 115 Jakarta, yang berlokasi di Jl. KH. Abdullah Syafei, Tebet, Jakarta Selatan, adalah salah satu sekolah menengah pertama negeri yang berpredikat sebagai Rintisan Sekolah Bertaraf Internasional. Sekolah ini didirikan pada tahun 1978 dan telah menorehkan banyak prestasi baik di bidang akademik maupun non-akademik. Sekolah ini memiliki 9 kelas dengan total jumlah siswa sekitar 750 dan menggunakan Kurikulum Tingkat Satuan Pendidikan dan IGCSE.
						</p>
    				</div>
					<div class="resume-wrap ftco-animate">
    					<span class="date">2022-Sekarang</span>
    					<h2>Sistem Informasi</h2>
    					<span class="position">INSTITUT TEKNOLOGI SEPULUH NOPEMBER</span>
    					<p class="mt-4">Institut Teknologi Sepuluh Nopember (ITS) adalah universitas negeri yang berlokasi di Surabaya, Jawa Timur, dengan penekanan kuat pada sistem pendidikan ilmu pengetahuan, teknik, dan vokasional . ITS memiliki kampus yang tersebar di empat lokasi berbeda di Surabaya dan Sidoarjo. Kampus utama ITS di Sukolilo menempati area seluas 180 hektar dan menjadi pusat kegiatan belajar mengajar.</p>
    				</div>
    				
    				
    			</div>
    		</div>
    		
    	</div>
    </section>
	
    <section class="ftco-section" id="hobby-section">
		<div class="container">
		  <div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
			  <h1 class="big big-2">Hobby</h1>
			  <h2 class="mb-4">Hobby</h2>
			  <p>Berikut merupakan hobby yang sering saya lakukan diwaktu luang</p>
          </div>
		</div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a class="block-20" style="background-image: url('images/hobby_1.png');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
                </div>
                <h3 class="heading" style="text-align: center;"><a>Billiard</a></h3>
                <p>Billiard merupakan salah satu hobby yang sering saya lakukan ketika liburan untuk refreshing dari kegiatan perkuliahan.</p>
              </div>
            </div>
        </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a class="block-20" style="background-image: url('images/hobby_2.png');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
                </div>
                <h3 class="heading" style="text-align: center;"><a>Kulineran</a></h3>
                <p>Kulineran juga merupakan salah satu hobby saya. Saya sangat menyukai makanan, oleh karena itu saya selalu ingin mencicipi berbagai makanan yang ada. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a class="block-20" style="background-image: url('images/hobby_3.jpeg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
                </div>
                <h3 class="heading" style="text-align: center;"><a>Main Game</a></h3>
                <p>Diselang waktu, saya pasti akan menyempatkan diri untuk bermain game, entah itu game PC,PS, ataupun game HP. Saya sudah suka bermain game sejak saya kecil.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
	  </section>

		
		<section class="ftco-section" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Skills</h1>
            <h2 class="mb-4">My Skills</h2>
           
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Manajemen Keuangan</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="95"
							  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
							    <span>95%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Analisis Data</h3>
							<div class="progress">
							 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>80%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Pemecahan Masalah</h3>
							<div class="progress">
							 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
							  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
							    <span>95%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Manajemen Waktu</h3>
							<div class="progress">
							 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>90%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Adaptasi</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>90%</span>
							  	</div>
							</div>
						</div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
 
    <section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Project</h1>
            <h2 class="mb-4">Project</h2>
            <p>Berikut ini merupakan project-project yang pernah saya kerjakan</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a class="block-20" style="background-image: url('images/project_1.png');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">16 Desember 2022</span>
	                	<a href="#" class="mr-2">ITS</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span>0</a>
	                </p>
                </div>
                <h3 class="heading"><a>Final project KSI</a></h3>
                <p>Project ini merupakan final project dari mata kuliah KSI yang beranggotakan 5 orang. Dalam project ini kami membahas pengulasan produk Augment Reality yaitu Photomath dan Microsoft Math Solver</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a class="block-20" style="background-image: url('images/project_2.png');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">19 juni 2023</span>
	                	<a href="#" class="mr-2">ITS</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 0</a>
	                </p>
                </div>
                <h3 class="heading"><a>Final Project Statistika</a></h3>
                <p>Project ini merupakan final project dari mata kuliah Statistika yang beranggotakan 3 orang. Dalam project ini kami melakukan survei untuk pengumpulan data untuk melalukan uji reliabilitas dan mendapatkan presentasi data. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a class="block-20" style="background-image: url('images/project_3.png');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">18 juli 2023</span>
	                	<a href="#" class="mr-2">ITS</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 0</a>
	                </p>
                </div>
                <h3 class="heading"><a>Lomba ISCOM 2023</a></h3>
                <p>Project ini merupakan project yang dibuat untuk mengikuti lomba ISCOM yang diadakan oleh HMSI secara online. Dalam project ini terdiri dari 3 anggota yang membahas aplikasi Jogo Suroboyo untuk dirancang ulang.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-project" id="assignment-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Assignment</h1>
            <h2 class="mb-4">My Assignment</h2>
            <p>Berikut ini merupakan tugas Pemprograman Web yang telah saya kerjakan selama belajar di ITS</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4">
					<a href="hello" target="_blank">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3>Hello</h3>
	    					<span>HTML</span>
	    				</div>
    				</div>
				</a>
  				</div>
  				<div class="col-md-8">
					<a href="style" target="_blank">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3>Style</h3>
	    					<span>HTML & CSS</span>
	    				</div>
    				</div>
  				</div>
			</a>

    			<div class="col-md-8">
					<a href="js1" target="_blank">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-1.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3>JS 1</h3>
	    					<span>HTML, JS, dan  CSS</span>
	    				</div>
    				</div>
				</a>

					<a href="js2" target="_blank">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-6.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3>JS 2</h3>
	    					<span>HTML, JS, dan  CSS</span>
	    				</div>
    				</div>
    			</div>
			</a>
			
			
    			<div class="col-md-4">
					<a href="Latihan_layout" target="_blank">
    				<div class="row">
    					<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-2.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3>Latihan Layout</h3>
			    					<span>HTML & CSS</span>
			    				</div>
		    				</div>
						</a>
	    				</div>
	
	    				<div class="col-md-12">
							<a href="Linktree" target="_blank">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-3.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3>Linktree</h3>
			    					<span>HTML & CSS</span>
			    				</div>
							</a>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
			<div class="row">
    			<div class="col-md-4">
					<a href="validasi" target="_blank">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3>Validasi</h3>
	    					<span>HTML, CSS, dan JS</span>
	    				</div>
    				</div>
				</a>
  				</div>
  				<div class="col-md-8">
					<a href="link" target="_blank">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3>Link</h3>
	    					<span>HTML & CSS</span>
	    				</div>
    				</div>
  				</div>
    	</div>
    </section>

  
    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">

			  <h2 class="mb-4"  style="margin-top: 50px; font-size: 100px;">Contact Me</h2>
			</div>
		  </div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p><a href="#">Jl. Bumi Marina Emas Barat no.169 B</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+62 8211 3310 592</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">adit23748@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">https://kangadit26.github.io</a></p>
	          </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex" >
            <form action="" class="bg-light p-4 p-md-5 contact-form" method="get" onsubmit="return sendwhatsapp();">
              <div class="form-group ju">
                <input type="text" class="form-control" placeholder="Your Name" id="nama"><div id="msg1" class="text-danger"></div>
              </div>
              <div class="form-group ju">
                <input type="email" class="form-control" placeholder="Your email" id="email"><div id="msg2" class="text-danger"></div>
              </div>
              <div class="form-group ju">
                <input type="text" class="form-control" placeholder="Subject" id="subject"><div id="msg3" class="text-danger"></div>
              </div>
              <div class="form-group">
                <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea><div id="msg4" class="text-danger"></div>
              </div>
              <div class="form-group">
				<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" id="sendmessage">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/bg_contact.jpg);"></div>
          </div>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Berikut saya sertakan social media saya yang dapat diakses jika anda memiliki pertanyaan atau ingin mengetahui lebih dalam tentang saya.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/AdithyaEka61510"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/adithya.ekapramudita?mibextid=LQQJ4d"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/adithyaekap/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            
          </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Bumi Marina Emas Barat no.169 B</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 821 1331 0592</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">adit23748@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>