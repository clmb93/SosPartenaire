$(document).ready(function(){
   
    
    
    
    $('#DivRss').FeedEk({                                               //création du flux rss
        FeedUrl:'http://www.sports.fr/fr/cmc/rss.xml',
        MaxCount : 30,
        ShowDesc : true,
        ShowPubDate:true,
        DescCharacterLimit:100,
        TitleLinkTarget:'_blank',

    });
    
});