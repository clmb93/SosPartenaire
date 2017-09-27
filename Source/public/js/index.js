 $(document).ready(function(){
        $('#DivRss').FeedEk({                                               //création du flux rss
            FeedUrl:'http://www.sport.fr/feed',
            MaxCount : 30,
            ShowDesc : true,
            ShowPubDate:true,
            DescCharacterLimit:100,
            TitleLinkTarget:'_blank',
        

        });

});
