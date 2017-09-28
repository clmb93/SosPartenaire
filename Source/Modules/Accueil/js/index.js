$(document).ready(function(){
	$('#intro-content').animate({	marginBottom : "25%"	},1500);
	$('#Form_connect').on('submit',function(e){
		
		e.preventDefault();
		$log = $('#log').val();
		$mdp = $('#mdp').val();
		
		if(!$log){
			$('#log').addClass('manquant');
		}
		if(!$mdp){
			$('#mdp').addClass('manquant');			
		}
		
		if(($log)&&($mdp)){
			$.post({
				  	type: "POST",
				  	url: "modules/accueil/php/test_co.php",
					data : {
						log 	: 	$log,
						mdp 	: 	$mdp	
				  	},
				success : document.location.href="modules/accueil/php/test_co.php"
			});
		}
		
	});
	
	$('#log').on('blur',function(){
		$log = $('#log').val();
		if(!$log){
			$('#log').addClass('manquant');
		}else $('#log').removeClass('manquant');
	});
	
	$('#mdp').on('blur',function(){
		$mdp = $('#mdp').val();
		if(!$mdp){
			$('#mdp').addClass('manquant');
		}else $('#mdp').removeClass('manquant');
	});
	
});
