$(document).ready(function(){
   
    $('#DivRss').FeedEk({
        FeedUrl:'http://rmcsport.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/',
        MaxCount : 4,
        ShowDesc : true,
        ShowPubDate:true,
        DescCharacterLimit:100,
        TitleLinkTarget:'_blank',
        DateFormat: 'MM/DD/YYYY',

    });
    
});