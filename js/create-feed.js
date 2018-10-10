$(document).ready(function(){
    
    var userFeed = new Instafeed({
        get: 'user',
        userId: '5850438956',
        limit: 4,
        resolution: 'standard_resolution',
        accessToken: '7953534352.5a60fac.9e0cd51bf9794779a86a0ae889f1bf26',
        sortBy: 'most-recent',
        template: '<div class="gallery"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });
    userFeed.run();
});