<!DOCTYPE html>
<html lang="fr">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

<script language="javascript" src="js/jquery-3.3.1.min.js"></script>
<script language="javascript" src="Requests/Requetes.js"></script>
<script language="javascript" src="Requests/requestsControleurVue.js"></script>
<!--script src="js/jquery-3.2.1.min.js"></script-->
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>

<!--===============================================================================================-->
<script src="js/main.js"></script>
<!--===============================================================================================-->
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>
<script src="js/custom.js"></script>
<!--===============================================================================================-->
<script src="js/validation.js"></script>
    
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<!--===============================================================================================-->	
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->	
<link href="https://fonts.googleapis.com/css?family=Aclonica&display=swap" rel="stylesheet">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/datepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/util.css">
<link rel="stylesheet" type="text/css" href="styles/main.css">
<!--===============================================================================================-->	


</head>

<body onload="profilUtil()">

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-globe "  aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-instagram " aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-youtube " aria-hidden="true"></i></a></li>
							</ul>
						</div>

						<div class="user_box ml-auto ">
							<!--div class="user_box_login user_box_link"><button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">connexion</button></div-->
                            <div class="user_box_login user_box_link"> <a href="index.html">Déconnexion</a></div>
							<div class="user_box_register user_box_link"><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" ></button></div>
						</div>

					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/LogoA.png" alt="">amnésia</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="#">Accueil</a></li>
								<li class="main_nav_item"><a href="about.php">À propos</a></li>
								<li class="main_nav_item"><a href="offers.php">Offres</a></li>
								<li class="main_nav_item"><a href="blog.php">Nouveautées</a></li>
								<li class="main_nav_item"><a href="contact.php">contacte</a></li>
								<li class="main_nav_item"><a href="profilClient.php">Profil</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">accueil</a></li>
				<li class="menu_item"><a href="about.php">à proprs</a></li>
				<li class="menu_item"><a href="offers.php">offres</a></li>
				<li class="menu_item"><a href="blog.php">nouveautées</a></li>
				<li class="menu_item"><a href="contact.php">contacte</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->
    <div class="form-row m-b-20 ">
        <div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
        </div>

        <div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
        </div>
    </div>
    <div class="form-row m-b-20 ">
        <div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
        </div>

        <div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
        </div>
    </div>
    <div class="form-row m-b-20 ">
        <div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
        </div>

        <div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
        </div>
    </div>
    <div class="form-row m-b-20 ">
        <div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
        </div>

        <div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
        </div>
    </div>
    <div class="form-row m-b-20 ">
        <div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
        </div>

        <div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
        </div>
    </div>
    <div class="form-row m-b-20 ">
        <div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
        </div>

        <div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
        </div>
    </div>
    <div class="form-row m-b-20 ">
        <div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
        </div>

        <div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
        </div>
    </div>
    <div class="form-row m-b-20 ">
        <div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
        </div>

        <div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
        </div>
    </div>
	<div class="home">
		
		<div class="imgcontainer">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			
			<span class="login100-form-title p-b-30">
				VOTRE PROFIL
			</span>
			
			<div class="form-row m-b-20">
				<div class="form-group col-md-5 m-l-25 input100-1" data-validate = "Username is reauired">
					<span class="label-input100">Nom</span>
					<input class="input100" type="text" name="nom1" id="nom_profil"  readonly>
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1" data-validate="Password is required">
					<span class="label-input100">Prénom</span>
					<input class="input100" type="text" name="prenom1" id="prenom_profil" readonly>
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
			</div>

			<div class="form-row m-b-20">
				<div class="form-group col-md-5 m-l-25 input100-1" data-validate = "Username is reauired">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="courriel1" id="courriel_profil" readonly>
					<span class="focus-input100" data-symbol="&#9993;"></span>
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1" data-validate="Password is required">
					<span class="label-input100">Sexe</span>
                    <input class="input100" type="text" name="date_naiss1" id="sexe_profil" readonly>
                    <span class="focus-input100"></span>

				</div>
			</div>


			<div class="form-row m-b-30">
				<div class="form-group col-md-5 m-l-25 input100-1" data-validate = "Username is reauired">
					<span class="label-input100">Adresse</span>
					<input class="input100" type="text" name="adresse1" id="adresse_profil" readonly>
					<span class="focus-input100"  data-symbol="&#xf206;"></span>
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1" data-validate="Password is required">
					<span class="label-input100">Téléphone</span>
					<input class="input100" type="text" name="tel1" id="tel_profil" readonly>
					<span class="focus-input100" data-symbol="&#xf2b9;"></span>
				</div>
			</div>

			<div class="form-row m-b-30">
				<div class="form-group col-md-5 m-l-25 input100-1" data-validate = "Username is reauired">
					<span class="label-input100">Ville</span>
					<input class="input100" type="text" name="ville1" id="ville_profil" readonly>
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1" data-validate="Le pays est manquant">
					<span class="label-input100">Pays</span>
					<input class="input100" type="text" name="pays1" id="pays_profil" readonly>
					<span class="focus-input100" data-symbol="&#x2691;"></span>
				</div>
			</div>

			<div class="form-row m-b-20 ">
				<div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
					<span class="label-input100">Date de naissance</span>
					<input class="input100" type="text" name="date_naiss1" id="date_naiss_profil" readonly>
                    <span class="focus-input100"></span>
				</div>
	
				<div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
					<!--button class="login100-form-btn" id="inscrireClient" onClick="enregistrerUtil();">S'inscrire</button-->
                    <input type="button" id="modifierClient" class="login100-form-btn" value="Modifier mon profil" onclick="document.getElementById('id02').style.display='block'" >
				</div>
			</div>
			</div>
            
            <div class="hide">
                <input  type="text" name="categorie1"  value="client">
			</div>
            <div class="hide">
                <input  type="text" name="num_util1"  value="">
			</div>

            
	</div>

    
     <div id="id02" class="modal">
	<div class=" ">
		<form id="formEnregUtil" name="formEnregUtil" class="modal-content1 animate p-l-45 p-r-45 p-t-45 p-b-45">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			
			<span class="login100-form-title p-b-30">
				Inscription
			</span>
			
			<div class="form-row m-b-20">
				<div class="form-group col-md-5 m-l-25 input100-1" data-validate = "Username is reauired">
					<span class="label-input100">Nom</span>
					<input class="input100" type="text" name="nom" id="nom" required="required" placeholder="Entrez votre nom">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1" data-validate="Password is required">
					<span class="label-input100">Prénom</span>
					<input class="input100" type="text" name="prenom" id="prenom" id="prenom" required="required" placeholder="Entrez votre prénom">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
			</div>

			<div class="form-row m-b-20">
				<div class="form-group col-md-5 m-l-25 input100-1" data-validate = "Username is reauired">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="courriel" id="courriel" required="required" placeholder="Entrez votre mail">
					<span class="focus-input100" data-symbol="&#9993;"></span>
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1" data-validate="Password is required">
					<span class="label-input100">Confirmation Email</span>
					<input class="input100" type="text" name="confirm_courriel" id="confirm_courriel"  required="required" placeholder="Confirmez votre mail">
					<span class="focus-input100" data-symbol="&#9993;"></span>
				</div>
			</div>



			<div class="form-row m-b-30">
				<div class="form-group col-md-5 m-l-25 input100-1" data-validate = "Username is reauired">
					<span class="label-input100">Adresse</span>
					<input class="input100" type="text" name="adresse" id="adresse" required="required" placeholder="Entrez votre adresse">
					<span class="focus-input100"  data-symbol="&#xf206;"></span>
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1" data-validate="Password is required">
					<span class="label-input100">Téléphone</span>
					<input class="input100" type="text" name="tel" id="tel" required="required" placeholder="Entrez votre numéro de téléphone">
					<span class="focus-input100" data-symbol="&#xf2b9;"></span>
				</div>
			</div>

			<div class="form-row m-b-30">
				<div class="form-group col-md-5 m-l-25 input100-1" data-validate = "Username is reauired">
					<span class="label-input100">Ville</span>
					<input class="input100" type="text" name="ville" id="ville"  required="required" placeholder="Entrez votre ville">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1" data-validate="Le pays est manquant">
					<span class="label-input100">Pays</span>
					<input class="input100" type="text" name="pays" id="pays" required="required" placeholder="Entrez votre pays">
					<span class="focus-input100" data-symbol="&#x2691;"></span>
				</div>
			</div>

			<div class="form-row m-b-20">
				<div class="form-group col-md-5 m-l-25 input100-1-1" data-validate = "Username is reauired">
					<span class="label-input100">Date de naissance</span>
					<input class="form-control" type="date" name="date_naiss" id="date_naiss" required="required">

					
				</div>
	
				<div class="form-group col-md-5 m-l-60 input100-1-1" data-validate="Password is required">
					<span class="label-input100">Je suis un(e)</span>
					<div class="select" required="required">
						<select name="sexe" id="sexe">
						  <option>Choisir votre sexe</option>
						  <option value="M">Homme</option>
						  <option value="F">Femme</option>
						  <option value="O">Autre</option>
						</select>
					</div>
					
				</div>
			</div>
            <div class="hide">
                <input  type="text" name="categorie" id="categorie"  value="client">
			</div>
            <div class="hide">
                <input  type="text" name="num_util" id="num_util" value="">
			</div>
            <div class="hide">
                <input  type="text" name="id_util" id="id_util" value="">
			</div>

			<div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
					<!--button class="login100-form-btn" id="inscrireClient" onClick="enregistrerUtil();">S'inscrire</button-->
                    <input type="button" id="inscrireClient" class="login100-form-btn" value="Enrégistrer" onClick="enregistrerUtil2();">
				</div>
			</div>
			
            
		</form>
	</div>
</div>
	<!-- Search -->

	
		

		<!-- Search Contents -->
		
		

	<!-- Intro -->


	<!-- Testimonials -->



	<!--<div class="trending">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">trending now</h2>
				</div>
			</div>
			<div class="row trending_container"> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!--  <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

			<!--</div>
		</div>
	</div>  -->

	<div class="contact">
		<div class="contact_background" style="background-image:url(images/backContact3.jpg)"></div>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 ">
					<div class="contact_form_container ">
						<div class="contact_title">Contatez nous</div>
						<form action="#" id="contact_form" name="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Nom" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Objet" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">Envoyer<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/LogoA.png" alt="">amnésia</a></div>
							</div>
							
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="#">Accueil</a></li>
								<li class="footer_nav_item"><a href="about.php">A propos</a></li>
								<li class="footer_nav_item"><a href="offers.php">offres</a></li>
								<li class="footer_nav_item"><a href="blog.php">Nouveaués</a></li>
								<li class="footer_nav_item"><a href="contact.php">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- MODAL CONNEXION-->

   


</body>

</html>