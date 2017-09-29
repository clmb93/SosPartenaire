$(document).ready(function(){
	$('#intro-content').animate({	marginBottom : "25%"	},1500);
	$('#Form_connect').on('submit',function(e){
		$log = $('#log').val();
		$mdp = $('#mdp').val();
                if((!$log)||(!$mdp)){
                    e.preventDefault();
                  if(!$log){
			$('#log').addClass('manquant');
                  }
                  if(!$mdp){
                            $('#mdp').addClass('manquant');			
                    }     
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
