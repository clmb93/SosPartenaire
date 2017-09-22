$(document).ready(function(){
   
    
    var     $nb     =   10;      //nb articles à afficher
    
    
    $('#DivRss').FeedEk({                                               //création du flux rss
        FeedUrl:'http://www.sports.fr/fr/cmc/rss.xml',
        MaxCount : $nb,
        ShowDesc : true,
        ShowPubDate:true,
        DescCharacterLimit:100,
        TitleLinkTarget:'_blank',

    });
    
    $('#rss_title').click(function(){                               // lors du click sur le bouton afficher plus on rajoute 10 articles supplémentaires à chaque fois
        
        $nb+=10;
        console.log($nb);
        $('#DivRss').FeedEk({
        FeedUrl:'http://www.sports.fr/fr/cmc/rss.xml',
        MaxCount : $nb,
        ShowDesc : true,
        ShowPubDate:true,
        DescCharacterLimit:100,
        TitleLinkTarget:'_blank',
            

        });

    });   
});