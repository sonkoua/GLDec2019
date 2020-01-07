
//vue films
function listerF(listFilms){
	var taille;
	var rep="<div class='table-users' style='overflow: scroll; height: 500px;'>";
	rep+="<div class='header'>Liste des films<span style='float:right;padding-right:10px;cursor:pointer;' onClick=\"$('#contenu').hide();\">X</span></div>";
	rep+="<table  cellspacing='0'>";
	rep+="<tr><th>NUMERO</th><th>TITRE</th><th>DUREE</th><th>REALISATEUR</th><th>POCHETTE</th></tr>";
	taille=listFilms.length;
	for(var i=0; i<taille; i++){
		rep+="<tr><td>"+listFilms[i].idf+"</td><td>"+listFilms[i].titre+"</td><td>"+listFilms[i].duree+"</td><td>"+listFilms[i].res+"</td><td><img src='pochettes/"+listFilms[i].pochette+"' width=80 height=80></td></tr>";		 
	}
	rep+="</table>";
	rep+="</div>";
	$('#contenu').html(rep);
}
function selectUsers1(reponse){
    var listUsers=reponse.selectUsers;
   // $('#home_slider_container').hide();
    var cat="";
    if(reponse.categorie=="admin")
        cat ="Liste des administrateurs";
    else if(reponse.categorie=="employe")
        cat ="Liste des employés";
    else
        cat ="Liste des clients";
	var taille;
	var rep="<div id='table-users' style='margin-top: 100px;'>";
	rep+="<h3 class='header12' align='center' style='margin-bottom: 30px;'>"+cat+"</h3>";
	rep+="<table class='table table-bordered table-conden table-striped table-warning' id='table-util' style='width: 80%;margin: auto;'>";
	rep+="<tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Sexe</th><th>Ville</th><th>Pays</th><th>Téléphone</th><th style='text-align:center'>Gestion</th></tr>";
	taille=listUsers.length;
    //alert(taille);
	for(var i=0; i<taille; i++){
		rep+="<tr><td>"+listUsers[i].id+"</td><td>"+listUsers[i].nom+"</td><td>"+listUsers[i].prenom+"</td><td>"+listUsers[i].sexe+"</td><td>"+listUsers[i].ville+"</td><td>"+listUsers[i].pays+"</td><td>"+listUsers[i].tel+"</td><td style='text-align:center'>";
        
        rep+= "<input class = \"detail00\" type= \"button\" value= \"    Détail    \" onclick= \"GestionUtil(this)\">";
        rep+= "<input class = \"modifier00\" type= \"button\" value= \"   Modifier   \" onclick= \"GestionUtil(this)\">";
                
        //rep+= "<br/>"
        rep+= "<input class = \"desactive00\" type= \"button\" value= \"   Désactiver   \" onclick= \"GestionUtil(this)\">";
        rep+= "<input class = \"supprimer00\" type= \"button\" value= \"   Supprimer   \" onclick= \"GestionUtil(this)\">";
        rep+"</td></tr>";		 
	}
	rep+="</table>";
	rep+="</div>";
	$('#home').hide();
    $('#intro').html(rep);
    
    $('.detail00').css('background-color', "CornflowerBlue");
    $('.detail00').css('margin-right', "5px");
    $('.modifier00').css('background-color', "MediumSeaGreen");
    $('.modifier00').css('margin-right', "5px");
    $(".supprimer00").css("background-color", "FireBrick ");
    $(".supprimer00").css('margin-right', "5px");
    $(".desactive00").css("background-color", "DarkGoldenRod ");
    $(".desactive00").css('margin-right', "5px");
    //$(".modifier00").css("margin-bottom", "3px")
    $(".detail00").css("color", "white");
    $(".supprimer00").css("color", "white");
    $(".desactive00").css("color", "white");
    $(".modifier00").css("color", "white");
}

function connexion1(reponse){
    $('#formConnexion')[0].reset();
    
    var cat = (reponse.categorie).toLowerCase() ;
    localStorage.setItem("categorie", cat);
    //localStorage.removeItem('lang'); 
    var lang = localStorage.getItem("lang");
    if(cat == "admin" && (lang==null || lang == "fr"))
        window.location.href = "./pages/pageAdmin.php";
	else if(cat == "employe" && (lang==null || lang == "fr"))
        window.location.href = "./pages/pageEmploye.php";
    else if(cat == "client" && (lang==null || lang == "fr"))
        window.location.href = "./pages/pageClient.php";
    else if(cat == "admin" && lang == "en")
        window.location.href = "./pages_en/pageAdmin.php";
	else if(cat == "employe" && lang == "en")
        window.location.href = "./pages_en/pageEmploye.php";
    else if(cat == "client" && lang == "en")
        window.location.href = "./pages_en/pageClient.php";
    else if(cat == "admin" && lang == "sp")
        window.location.href = "./pages_sp/pageAdmin.php";
	else if(cat == "employe" && lang == "sp")
        window.location.href = "./pages_sp/pageEmploye.php";
    else if(cat == "client" && lang == "sp")
        window.location.href = "./pages_sp/pageClient.php";
    else if(lang!=null && lang == "en")
        $('#avertissement').html("Incorrect email or password");
    else if(lang!=null && lang == "sp")
        $('#avertissement').html("Correo electrónico o contraseña incorrectos");
    else
        $('#avertissement').html("Courriel ou mot de passe incorrect");
}

function langueCategorie(){
    //var lang = localStorage.getItem("lang");
    var cat=localStorage.getItem("categorie");
    var lang = localStorage.getItem("lang");
    if(cat===null){
        if(lang!=null && lang == "en")
            window.location.href = "index_en.php";
	    else if(lang!=null && lang == "sp")
            window.location.href = "index_sp.php";
    }else{
        
        if(cat == "admin" && (lang===null || lang == "fr"))
            window.location.href = "./pages/pageAdmin.php";
        else if(cat == "employe" && (lang===null || lang == "fr"))
            window.location.href = "./pages/pageEmploye.php";
        else if(cat == "client" && (lang==null || lang == "fr"))
            window.location.href = "./pages/pageClient.php";
        else if(cat == "admin" && lang == "en")
            window.location.href = "./pages_en/pageAdmin.php";
        else if(cat == "employe" && lang == "en")
            window.location.href = "./pages_en/pageEmploye.php";
        else if(cat == "client" && lang == "en")
            window.location.href = "./pages_en/pageClient.php";
        else if(cat == "admin" && lang == "sp")
            window.location.href = "./pages_sp/pageAdmin.php";
        else if(cat == "employe" && lang == "sp")
            window.location.href = "./pages_sp/pageEmploye.php";
        else if(cat == "client" && lang == "sp")
            window.location.href = "./pages_sp/pageClient.php";
        

    }
}

//function demarrage(){
    //_.once(languageUtil);
//}

function effacerCategorie(){
    localStorage.removeItem("categorie");

}

function demarrage(){//languageUtil(){
    var lang = localStorage.getItem("lang");
    if(lang!=null && lang == "en")
        window.location.href = "index_en.php";
	else if(lang!=null && lang == "sp")
        window.location.href = "index_sp.php";
}

/*function langageUtil(){//languageUtil(){
    var lang = localStorage.getItem("lang");
    if(lang!=null && lang == "en")
        window.location.href = "../index_en.php";
	else if(lang!=null && lang == "sp")
        window.location.href = "../index_sp.php";
}*/

function profilUtil1(reponse){
    var tab = reponse.util;
    //alert(tab[0].nom);
    var tab2 = reponse.connexionUtil[0];
    if(document.getElementById('profil_nom')){
        $('#profil_nom').text(tab[0].nom);
        $('#profil_prenom').text(tab[0].prenom);
        //supprimerPhotoProfil
        //alert(tab[0].photo);
        var lienphoto = "../images/"+reponse.photo;
        var urlString = "url("+lienphoto+")";
        document.getElementById('avatar').style.backgroundImage =  urlString;
        document.getElementById('userImg').src=lienphoto;
        if(reponse.photo=="photoProfil2.PNG"){
            //var urlString = "url(http://0.gravatar.com/avatar/fa4df8540bab3cb38f7dfa60c6e0522c?size=2000)";
            //document.getElementById('avatar').style.backgroundImage =  urlString;
            
            //document.getElementById("userImg").src="http://0.gravatar.com/avatar/fa4df8540bab3cb38f7dfa60c6e0522c?size=2000";
            //$('#detailCompe').css('visibility','visible');
            //$('#supprimerPhotoProfil').css('visibility','hidden');
            $('#detailCompe').show();
            $('#supprimerPhotoProfil').hide();
        }else{
            
            //$('#detailCompe').css('visibility','hidden');
            //$('#supprimerPhotoProfil').css('visibility','visible');
            $('#detailCompe').hide();
            $('#supprimerPhotoProfil').show();
        }
        $('#userName').text(tab[0].nom+'  '+tab[0].prenom);
        document.getElementById("userName").style.color = 'blue';
    }else{
        $('#nom_profil').val(tab[0].nom);
        //alert(tab[0].nom);
        $('#prenom_profil').val(tab[0].prenom);
        $('#courriel_profil').val(tab2.courriel);

        $('#sexe_profil').val(tab[0].sexe);
        $('#adresse_profil').val(reponse.adresseUtil);
        $('#tel_profil').val(tab[0].tel);

        $('#ville_profil').val(reponse.villeUtil);
        $('#pays_profil').val(reponse.paysUtil);
        $('#date_naiss_profil').val(tab[0].date_naiss);


        if(tab2.categorie=="employe")
            $('#modifier01').hide();
        if(tab2.categorie=="admin"){
            $('#categorie_profil').val(tab2.categorie);
            $('#id_util_profil').val(tab[0].id);
            $('#num_util_profil').val(tab[0].num_util);
            $('#categorie01').css('visibility','visible');
            $('#id_util01').css('visibility','visible');
            $('#num_util01').css('visibility','visible');

           // $('#categorie').val(tab2.categorie);
           // $('#id_util').val(tab[0].id);
           // $('#num_util').val(tab[0].num_utill);
            $('#categorie001').css('visibility','visible');
            $('#id_util001').css('visibility','visible');
            $('#num_util001').css('visibility','visible');

        }

        $('#nom').val(tab[0].nom);
        $('#prenom').val(tab[0].prenom);
        $('#courriel').val(tab2.courriel);
        $('#categorie').val(tab2.categorie);
        $('#sexe').val(tab[0].sexe);
        $('#adresse').val(reponse.adresseUtil);
        $('#tel').val(tab[0].tel);
        $('#id_util').val(tab[0].id);
        $('#num_util').val(tab[0].num_util);
        $('#ville').val(reponse.villeUtil);
        $('#pays').val(reponse.paysUtil);
        $('#date_naiss').val(tab[0].date_naiss);
    }
}

function modifierImageUtil(reponse){
    if(reponse.msg=="Image bien modifie"){
        var lienphoto = "../images/"+reponse.photo;
        var urlString = "url("+lienphoto+")";
        document.getElementById('avatar').style.backgroundImage =  urlString;
        document.getElementById('userImg').src=lienphoto;
        document.getElementById('id03').style.display='block'; 
        document.getElementById('imageUtil').style.display='none';
        $('#detailCompe').hide();
        $('#supprimerPhotoProfil').show();
        $('#imageUtilForm')[0].reset();
        alert("Image du profil bien changée");
    }else{          
        alert("Image du profil non changée");
    }
}

function supprimerImageProfil(reponse){
    if(reponse.msg=="Image bien supprime"){
        //var lienphoto = "../images/"+reponse.photo;
        //var urlString = "url("+lienphoto+")";
        //document.getElementById('avatar').style.backgroundImage="url(http://0.gravatar.com/avatar/fa4df8540bab3cb38f7dfa60c6e0522c?size=2000)";
        //document.getElementById('userImg').src="http://0.gravatar.com/avatar/fa4df8540bab3cb38f7dfa60c6e0522c?size=2000";
        document.getElementById('avatar').style.backgroundImage="url("+'../images/'+reponse.photoAvatar+")";
        document.getElementById('userImg').src="../images/"+reponse.photoAvatar;
        document.getElementById('id03').style.display='block'; 
       // document.getElementById('imageUtil').style.display='none'
        $('#detailCompe').show();
        $('#supprimerPhotoProfil').hide();
        alert("Image du profil bien supprimée");
        //document.getElementById('id03').style.display='block';
        
    }else{          
        alert("Image du profil non changée");
    }
}

function enregistrerUtil1(rep){
    if(rep['courriel_exist']=="oui"){
        
           /* $('#nom').val(rep['nom']);
            $('#prenom').val(rep['prenom']);
            $('#courriel').val(rep['courriel']);
            $('#categorie').val(rep['categorie']);
            $('#slct').val(rep['sexe']);
            $('#adresse').val(rep['adresse']);
            $('#tel').val(rep['tel']);
            //$('#id_util').val(tab[0].id);
            $('#num_util').val(rep['num_util']);
            $('#ville').val(rep['ville']);
            $('#pays').val(rep['pays']);
            $('#example-date-input').val(rep['date_naiss']);
            */
            document.getElementById('id02').style.display='block';
            alert("Cette adresse courrielle existe déjà dans notre système.");
            
        }else{
		    $('#formEnregUtil')[0].reset();
            document.getElementById('id02').style.display='none';
            if(rep['categorie']=="client"){
                alert("Vous êtes bien inscrit, un courriel d'activation du compte vous a été envoyé.\n Veuillez consulter votre courriel pour terminer votre inscrition.");
                //alert("Veuillez consulter votre courriel pour terminer votre inscrition.");
            }else
                alert("Utilisateur bien inscrit.");
            //document.getElementById('id01').style.display='block';
        }
}

function modifierUtil1(rep){
    if(rep['courriel_exist']=="oui"){
        
           /* $('#nom').val(rep['nom']);
            $('#prenom').val(rep['prenom']);
            $('#courriel').val(rep['courriel']);
            $('#categorie').val(rep['categorie']);
            $('#slct').val(rep['sexe']);
            $('#adresse').val(rep['adresse']);
            $('#tel').val(rep['tel']);
            //$('#id_util').val(tab[0].id);
            $('#num_util').val(rep['num_util']);
            $('#ville').val(rep['ville']);
            $('#pays').val(rep['pays']);
            $('#example-date-input').val(rep['date_naiss']);
            */
            document.getElementById('id02').style.display='block';
            alert("Un compte différent du votre possède déjà cet courriel dans notre système.");
            
        }else{
		    $('#formEnregUtil')[0].reset();
            document.getElementById('id02').style.display='none';
            window.location.href = "profilUtilisateur.php";
            if(rep['categorie']=="client"){
                alert("Votre compte a été bien midifié.");
                //alert("Veuillez consulter votre courriel pour terminer votre inscrition.");
            }else
                alert("Compte bien modifié.");
            //document.getElementById('id01').style.display='block';
        }
}


function afficherFiche(reponse){
  var uneFiche;
  if(reponse.OK){
	uneFiche=reponse.fiche;
	$('#formFicheF h3:first-child').html("Fiche du film numero "+uneFiche.idf);
	$('#idf').val(uneFiche.idf);
	$('#titreF').val(uneFiche.titre);
	$('#dureeF').val(uneFiche.duree);
	$('#resF').val(uneFiche.res);
	$('#divFormFiche').show();
	document.getElementById('divFormFiche').style.display='block';
  }else{
	$('#messages').html("Film "+$('#numF').val()+" introuvable");
	setTimeout(function(){ $('#messages').html(""); }, 5000);
  }

}

function userLanguage(langue){
    // Store
  localStorage.setItem("lang", langue);
  //if(langue==="fr")
      //window.location.href = "./index.php";
// Retrieve
//document.getElementById("result").innerHTML = localStorage.getItem("lang");
}

var requestsVue=function(reponse){
	var action=reponse.action; 
    
	switch(action){
		case "enregistrerUtil" :
            enregistrerUtil1(reponse);
       break;
        case "modifierUtil" :
           modifierUtil1(reponse);
            
       break;
		case "enlever" :
        case "connexion" :
			connexion1(reponse);
        break;
		break;
		case "modifier" :
			$('#messages').html(reponse.msg);
			setTimeout(function(){ $('#messages').html(""); }, 5000);
		break;
		case "lister" :
			listerF(reponse.listeFilms);
		break;
		case "profilUtil" :
			profilUtil1(reponse);
		break;
		case "modifierImageUtil" :
            modifierImageUtil(reponse);
		break;
        case "supprimerPhotoProfil" :
            supprimerImageProfil(reponse);
		break;
        case "selectUsers" :
			selectUsers1(reponse);
		break;
	}
}

