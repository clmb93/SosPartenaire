$(document).ready(function(){
   
    
    var     $nb     =   10;      //nb articles à afficher
    
    
    $('#DivRss').FeedEk({
        FeedUrl:'http://www.sports.fr/fr/cmc/rss.xml',
        MaxCount : $nb,
        ShowDesc : true,
        ShowPubDate:true,
        DescCharacterLimit:100,
        TitleLinkTarget:'_blank',

    });
    
    $('#rss_title').click(function(){
        
        $nb+=10;
        
        $('#DivRss').FeedEk({
        FeedUrl:'http://www.sports.fr/fr/cmc/rss.xml',
        MaxCount : $nb,
        ShowDesc : true,
        ShowPubDate:true,
        DescCharacterLimit:100,
        TitleLinkTarget:'_blank',
            

        });
        
        console.log($nb);
    });   
});