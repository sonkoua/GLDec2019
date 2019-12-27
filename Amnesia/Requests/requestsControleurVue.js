
//vue films
function listerF(listFilms){
	var taille;
	var rep="<div class='table-users' style='overflow: scroll; height: 500px;'>";
	rep+="<div class='header'>Liste des films<span style='float:right;padding-right:10px;cursor:pointer;' onClick=\"$('#contenu').hide();\">X</span></div>";
	rep+="<table cellspacing='0'>";
	rep+="<tr><th>NUMERO</th><th>TITRE</th><th>DUREE</th><th>REALISATEUR</th><th>POCHETTE</th></tr>";
	taille=listFilms.length;
	for(var i=0; i<taille; i++){
		rep+="<tr><td>"+listFilms[i].idf+"</td><td>"+listFilms[i].titre+"</td><td>"+listFilms[i].duree+"</td><td>"+listFilms[i].res+"</td><td><img src='pochettes/"+listFilms[i].pochette+"' width=80 height=80></td></tr>";		 
	}
	rep+="</table>";
	rep+="</div>";
	$('#contenu').html(rep);
}


function connexion1(reponse){
    $('#formConnexion')[0].reset();
    var cat = (reponse.categorie).toLowerCase() ;
    if(cat == "admin")
        window.location.href = "./pages/pageAdmin.php";
	else if(cat == "employe")
        window.location.href = "./pages/pageEmploye.php";
    else if(cat == "client")
        window.location.href = "./pages/pageClient.php";
    else
        $('#avertissement').html(reponse.categorie);
}

function profilUtil1(reponse){
    
    var tab = reponse.util;
    //alert(tab[0].nom);
    var tab2 = reponse.connexionUtil[0];
    if(tab2.categorie=="client" && document.getElementById('profil_nom')){
        $('#profil_nom').text(tab[0].nom);
        $('#profil_prenom').text(tab[0].prenom);
        
        
        if(tab[0].photo==""){
            var urlString = "url(http://0.gravatar.com/avatar/fa4df8540bab3cb38f7dfa60c6e0522c?size=2000)";
            document.getElementById('avatar').style.backgroundImage =  urlString;
        }else{
            var lienphoto = "../images/"+tab[0].photo;
            var urlString = "url("+lienphoto+")";
            document.getElementById('avatar').style.backgroundImage =  urlString; 
        }
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
        document.getElementById('id03').style.display='block'; 
        document.getElementById('imageUtil').style.display='none'
        alert("Image du profil bien changée");
    }else{          
        alert("Image du profil non changée");
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

var requestsVue=function(reponse){
	var action=reponse.action; 
    
	switch(action){
		case "enregistrerUtil" :
           // $('#inscrireClient').html(reponse.rep);
            $('#formEnregUtil')[0].reset();
            document.getElementById('id02').style.display='none';
            document.getElementById('id01').style.display='block';
       break;
        case "enregistrerUtil2" :
           // $('#inscrireClient').html(reponse.rep);
           // $('#formEnregUtil')[0].reset();
            document.getElementById('id02').style.display='none';
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
	}
}

