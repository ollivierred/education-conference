var gMapAPIKey = 'AIzaSyC3oWmIunWi8SSD7HlYZnFsxgTVsMQMCGQ';

var map;
function initMap() {
    var confLocation = {lat: 40.394599, lng: 49.849380};  
    
    map = new google.maps.Map(document.getElementById('map'), {
        center: confLocation,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        draggable: false,
        scrollwheel: false,
        disableDefaultUI: false
    });
    
    var marker = new google.maps.Marker({
        position: confLocation,
        map: map,
        title: 'Education Conference 2017'
    });
} 