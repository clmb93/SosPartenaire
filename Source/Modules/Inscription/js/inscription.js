$(document).ready(function(){
    
	 /* Différentes valeurs du formulaires */
        
            $prenom             = $('#prenom');
            $nom                = $('#nom');
            $dateNaissance      = $('#datenaissance');
            $tel                = $('#tel');
            $email              = $('#email');
            $adresse            = $('#adresse');
            $ville              = $('#ville');
            $pays               = $('#pays');
            $log                = $('#log');
            $mdp                = $('#mdp');
            $conditions         = $('#conditions');
            
            
	$('#intro-content').animate({	marginBottom : "25%" },1500);
        
	$.getJSON( "liste_pays/pays.json", function( data ) {   //On récupère la liste des pays et on l'affiche dans le select
	  $.each( data, function(key,value) {
		$('#pays').append('<option value='+value+'>'+value+'</option>')
	  });
	});
        
       
        
        $('#form_inscription').on('submit',function(e){
            
           $isCocher = $conditions.is(':checked');
            if((!$prenom.val())||(!$nom.val())||
                    (!$dateNaissance.val())||(!$tel.val())||
                        (!$email.val())||(!adresse.val())||(!$ville.val())||
                            (!$pays.val())||(!$log.val())||(!$mdp.val())||(!$isCocher)){    //longue conditions qui vérifie que tous les champs sont bien remplis et que le bouton checkbox est coché
                        
                e.preventDefault();
                if(!$prenom.val()){
                   $prenom.addClass('manquant');     
                } 
                if(!$nom.val()){
                     $nom.addClass('manquant');   
                }
                if(!$dateNaissance.val()){
                    $dateNaissance.addClass('manquant');
                }
                
                if(!$tel.val()){
                     $tel.addClass('manquant');
                }
                
                if(!$email.val()){
                     $email.addClass('manquant');
                }
                
                if(!$adresse.val()){
                     $adresse.addClass('manquant');
                }
                
                if(!$ville.val()){
                     $ville.addClass('manquant');
                }
                
                if(!$pays.val()){
                     $pays.addClass('manquant');
                }
                
                if(!$log.val()){
                     $log.addClass('manquant');
                }
                
                 if(!$mdp.val()){
                     $mdp.addClass('manquant');
                }
                
                if(!$isCocher){
                     $('#form_check').addClass('manquant');
                }
            }
            
            
            
            
        });
});
