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
            if(!$prenom.val()||!$nom.val()||
                    !$dateNaissance.val()||!$tel.val()||
                        !$email.val()||!$adresse.val()||!$ville.val()||
                            !$pays.val()||!$log.val()||!$mdp.val()||!$isCocher){    //longue conditions qui vérifie que tous les champs sont bien remplis et que le bouton checkbox est coché
                        
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
        
        $prenom.on('blur',function(){
            if(!$prenom.val()){
                 $prenom.addClass('manquant');     
            }else $prenom.removeClass('manquant');       
        });
        
        $nom.on('blur',function(){
            if(!$nom.val()){
                 $nom.addClass('manquant');     
            }else $nom.removeClass('manquant');       
        });
        
          $dateNaissance.on('blur',function(){
            if(!$dateNaissance.val()){
                 $dateNaissance.addClass('manquant');     
            }else $dateNaissance.removeClass('manquant');        
        });
        
          $tel.on('blur',function(){
            if(!$tel.val()){
                 $tel.addClass('manquant');     
            }else $tel.removeClass('manquant');     
        });
        
          $email.on('blur',function(){
            if(!$email.val()){
                 $email.addClass('manquant');     
            }else $email.removeClass('manquant');     
        });
        
          $adresse.on('blur',function(){
            if(!$adresse.val()){
                 $adresse.addClass('manquant');     
            }else $adresse.removeClass('manquant');     
        });
        
           $ville.on('blur',function(){
            if(!$ville.val()){
                 $ville.addClass('manquant');     
            }else $ville.removeClass('manquant');     
        });
        
           $pays.on('blur',function(){
            if(!$pays.val()){
                 $pays.addClass('manquant');     
            }else $pays.removeClass('manquant');     
        });
        
          $log.on('blur',function(){
            if(!$log.val()){
                 $log.addClass('manquant');     
            }else $log.removeClass('manquant');     
        });
        
           $mdp.on('blur',function(){
            if(!$mdp.val()){
                 $mdp.addClass('manquant');     
            }else $mdp.removeClass('manquant');     
        });
        
           $conditions.on('blur',function(){
            if(!$conditions.is(':checked')){
                 $('#form_check').addClass('manquant');     
            }else $('#form_check').removeClass('manquant');     
        });

                
               
});
