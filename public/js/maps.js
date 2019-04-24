function initMap() {

    const myPos = {lat: 46.2156077, lng: 6.1474856};


    const map = new google.maps.Map(document.getElementById('map'), {
        center: myPos,
        zoom: 15
    });

    let marker = new google.maps.Marker({
        position: myPos,
        map: map,
        title: 'My address!'
    });
}

