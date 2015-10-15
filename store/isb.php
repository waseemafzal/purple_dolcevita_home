<!DOCTYPE html>
<html>
    <head>
        <title>Dolce Vita Store Locator</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <style>
            html, body, #map-canvas {
                height: 100%;
                margin: 0px;
                padding: 0px
            }
            h1{
                font-size: 18px;
            }
        </style>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

	<script>
            window.fbAsyncInit = function() {

                // init the FB JS SDK
                FB.init({
                appId      : '951214208242774',                        // App ID from the app dashboard
                channelUrl : '//https://www.purpleartsmedia.com/', // Channel file for x-domain comms
                status     : true,                                 // Check Facebook Login status
                xfbml      : true                                  // Look for social plugins on the page
                });
            FB.Canvas.setSize();
                // Additional initialization code such as adding Event Listeners goes here
            };

            // Load the SDK asynchronously
            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            FB.Canvas.setSize();
            </script>
            

        <script type="text/javascript">
            function initialize() {
                var latlng = new google.maps.LatLng(31.506965, 74.353231);
                var settings = {
                    zoom: 16,
                    center: latlng,
                    mapTypeControl: true,
                    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                    navigationControl: true,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                    mapTypeId: google.maps.MapTypeId.ROADMAP};
                var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                var contentString = '<div id="content">' +
                        '<div id="siteNotice">' +
                        '</div>' +
                        '<h1 id="firstHeading" class="firstHeading">Dolce Gulberg</h1>' +
                        '<div id="bodyContent">' +
                        '<p>111 - 1-B/C, Mahmood Ali Kasoori Road, (Near Hussain Chowk) Tel: 042-35877062-63</p>' +
                        '</div>' +
                        '</div>';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                        new google.maps.Size(50, 61),
                        new google.maps.Point(0, 0),
                        new google.maps.Point(30, 90)
                        );

                var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                        new google.maps.Size(130, 50),
                        new google.maps.Point(0, 0),
                        new google.maps.Point(50, 80));

                var companyPos = new google.maps.LatLng(31.506965, 74.353231);

                var companyMarker = new google.maps.Marker({
                    position: companyPos,
                    map: map,
                    icon: companyImage,
                    shadow: companyShadow,
                    title: "Dolce Vita",
                    zIndex: 3});




                google.maps.event.addListener(companyMarker, 'click', function() {
                    infowindow.open(map, companyMarker);
                });
                var location_option = document.getElementById('location_option');
                google.maps.event.addDomListener(location_option, 'change', showAlert);

                var select_city = document.getElementById('select_city');
                google.maps.event.addDomListener(select_city, 'change', showAlert);


            }


            function showAlert() {
                //    alert($('#location_option').val());
                // alert($('#select_city').val());
                if ($('#select_city').val() == 'lah') {


                    //Lahore Default Start

                    var latlng = new google.maps.LatLng(31.506965, 74.353231);
                    var settings = {
                        zoom: 16,
                        center: latlng,
                        mapTypeControl: true,
                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                        navigationControl: true,
                        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                        mapTypeId: google.maps.MapTypeId.ROADMAP};
                    var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                    var contentString = '<div id="content">' +
                            '<div id="siteNotice">' +
                            '</div>' +
                            '<h1 id="firstHeading" class="firstHeading">Dolce Store</h1>' +
                            '<div id="bodyContent">' +
                            '<p>111 - 1-B/C, Mahmood Ali Kasoori Road,<br /> (Near Hussain Chowk) <br />Tel: 042-35877062-63</p>' +
                            '</div>' +
                            '</div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                            new google.maps.Size(50, 61),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(30, 90)
                            );

                    var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                            new google.maps.Size(130, 50),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(50, 80));

                    var companyPos = new google.maps.LatLng(31.506965, 74.353231);

                    var companyMarker = new google.maps.Marker({
                        position: companyPos,
                        map: map,
                        icon: companyImage,
                        shadow: companyShadow,
                        title: "Dolce Vita",
                        zIndex: 3});




                    google.maps.event.addListener(companyMarker, 'click', function() {
                        infowindow.open(map, companyMarker);
                    });

                    $('.address').html('111 - 1-B/C, Mahmood Ali Kasoori Road,<br /> (Near Hussain Chowk) <br />Tel: 042-35877062-63');

                    // We add a DOM event here to show an alert if the DIV containing the
                    // map is clicked. Note that we do this within the intialize function
                    // since the document object isn't loaded until after the window.load
                    // event.

                    //Lahore Default Ends





                    if ($('#location_option').val() == '1lah')
                    {
                        var latlng = new google.maps.LatLng(31.507221, 74.354369);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};
                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store</h1>' +
                                '<div id="bodyContent">' +
                                '<p>111 - 1-B/C, Mahmood Ali Kasoori Road,<br /> (Near Hussain Chowk) <br />Tel: 042-35877062-63</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(31.507221, 74.354369);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });

                        $('.address').html('111 - 1-B/C, Mahmood Ali Kasoori Road,<br /> (Near Hussain Chowk) <br />Tel: 042-35877062-63');

                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                    else if ($('#location_option').val() == '2lah')
                    {
                        $('.address').html(' 72,<br /> 73-A, HBFC Project.<br /> Tel: 042-35166644');
                        var latlng = new google.maps.LatLng(31.483752, 74.298999);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};

                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store Faisal Town</h1>' +
                                '<div id="bodyContent">' +
                                '<p>72,<br /> 73-A, HBFC Project.<br /> Tel: 042-35166644</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(31.483752, 74.298999);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });
                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                    else if ($('#location_option').val() == '3lah') {
                        $('.address').html('Y-BLOCK: 141-Y, Commercial Area, Phase III');
                        var latlng = new google.maps.LatLng(31.484394, 74.409607);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};

                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store</h1>' +
                                '<div id="bodyContent">' +
                                '<p>Y-BLOCK: 141-Y, Commercial Area, Phase III</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(31.484394, 74.409607);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });
                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                    else if ($('#location_option').val() == '4lah') {
                        $('.address').html('9,<br /> Wahdat Road, Lahore<br /> Tel: 042-37420633');
                        var latlng = new google.maps.LatLng(31.507252, 74.295688);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};

                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store Wahdat Road</h1>' +
                                '<div id="bodyContent">' +
                                '<p>9,<br /> Wahdat Road, Lahore<br /> Tel: 042-37420633</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(31.507252, 74.295688);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });
                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                }

                if ($('#select_city').val() == 'isb') {
                    //        if($('#location_option').val() == '4'){
                    $('.address').html('DHA:  Sher Shakhi Market, Main GT Road, Opposite Phase II DHA, Gate # 1,<br /> Tel: 051-4918328');
                    var latlng = new google.maps.LatLng(33.527929, 73.134699);
                    var settings = {
                        zoom: 16,
                        center: latlng,
                        mapTypeControl: true,
                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                        navigationControl: true,
                        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                        mapTypeId: google.maps.MapTypeId.ROADMAP};

                    var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                    var contentString = '<div id="content">' +
                            '<div id="siteNotice">' +
                            '</div>' +
                            '<h1 id="firstHeading" class="firstHeading">Dolce Store Islamabad</h1>' +
                            '<div id="bodyContent">' +
                            '<p>DHA:  Sher Shakhi Market, Main GT Road, Opposite Phase II DHA, Gate # 1,<br /> Tel: 051-4918328</p>' +
                            '</div>' +
                            '</div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                            new google.maps.Size(50, 61),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(30, 90)
                            );

                    var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                            new google.maps.Size(130, 50),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(50, 80));

                    var companyPos = new google.maps.LatLng(33.527929, 73.134699);

                    var companyMarker = new google.maps.Marker({
                        position: companyPos,
                        map: map,
                        icon: companyImage,
                        shadow: companyShadow,
                        title: "Dolce Vita",
                        zIndex: 3});




                    google.maps.event.addListener(companyMarker, 'click', function() {
                        infowindow.open(map, companyMarker);
                    });
                    
                    
                    

                    if ($('#location_option').val() == '1isb')
                    {
                        var latlng = new google.maps.LatLng(33.527929, 73.134699);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};
                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store</h1>' +
                                '<div id="bodyContent">' +
                                '<p>DHA:  Sher Shakhi Market, Main GT Road, Opposite Phase II DHA, Gate # 1,<br /> Tel: 051-4918328</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(33.527929, 73.134699);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });

                        $('.address').html('DHA:  Sher Shakhi Market, Main GT Road, Opposite Phase II DHA, Gate # 1,<br /> Tel: 051-4918328');

                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                    else if ($('#location_option').val() == '2isb')
                    {
                        var latlng = new google.maps.LatLng(33.720921, 73.055007);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};
                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store</h1>' +
                                '<div id="bodyContent">' +
                                '<p>Shop No. S-18, 4th Floor, Safa Gold Mall, Plot No.5, F-7 Markaz, Jinnah Supper. Tel: 051-2608530</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(33.720921, 73.055007);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });

                        $('.address').html('Shop No. S-18, 4th Floor, Safa Gold Mall, Plot No.5, F-7 Markaz, Jinnah Supper<br /> Tel: 051-2608530');

                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                    else if ($('#location_option').val() == '3isb')
                    {
                        var latlng = new google.maps.LatLng(33.708053, 73.050446);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};
                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store Islamabad</h1>' +
                                '<div id="bodyContent">' +
                                '<p>Shop No.301, 3rd Floor, Centaurus Mall.<br /> Tel: 051-2701675</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(33.708053, 73.050446);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });

                        $('.address').html('Shop No.301, 3rd Floor, Centaurus Mall.<br /> Tel: 051-2701675');

                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                }

                if ($('#select_city').val() == 'khi') {
                    //        if($('#location_option').val() == '4'){
                    $('.address').html('Plot No.45-C, Commercial Lane 10, Phase VI');
                    var latlng = new google.maps.LatLng(24.798974, 67.057007);
                    var settings = {
                        zoom: 16,
                        center: latlng,
                        mapTypeControl: true,
                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                        navigationControl: true,
                        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                        mapTypeId: google.maps.MapTypeId.ROADMAP};

                    var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                    var contentString = '<div id="content">' +
                            '<div id="siteNotice">' +
                            '</div>' +
                            '<h1 id="firstHeading" class="firstHeading">Dolce Store Karachi</h1>' +
                            '<div id="bodyContent">' +
                            '<p>Plot No.45-C, Commercial Lane 10, Phase VI</p>' +
                            '</div>' +
                            '</div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                            new google.maps.Size(50, 61),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(60, 90)
                            );

                    var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                            new google.maps.Size(130, 50),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(50, 80));

                    var companyPos = new google.maps.LatLng(24.798974, 67.057007);

                    var companyMarker = new google.maps.Marker({
                        position: companyPos,
                        map: map,
                        icon: companyImage,
                        shadow: companyShadow,
                        title: "Dolce Vita",
                        zIndex: 3});




                    google.maps.event.addListener(companyMarker, 'click', function() {
                        infowindow.open(map, companyMarker);
                    });
                    
                    
                    

                    if ($('#location_option').val() == '1khi')
                    {
                        var latlng = new google.maps.LatLng(24.798974, 67.057007);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};
                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store</h1>' +
                                '<div id="bodyContent">' +
                                '<p>Plot No.45-C, Commercial Lane 10, Phase VI</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(24.798974, 67.057007);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });

                        $('.address').html('Plot No.45-C, Commercial Lane 10, Phase VI');

                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                    else if ($('#location_option').val() == '2khi')
                    {
                        var latlng = new google.maps.LatLng(24.801856, 67.029762);
                        var settings = {
                            zoom: 16,
                            center: latlng,
                            mapTypeControl: true,
                            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                            navigationControl: true,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP};
                        var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                        var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Dolce Store</h1>' +
                                '<div id="bodyContent">' +
                                '<p>D-7, Designer Avenue, 2nd Floor Dolmen Mall Clifton Karachi</p>' +
                                '</div>' +
                                '</div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                                new google.maps.Size(50, 61),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(30, 90)
                                );

                        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                                new google.maps.Size(130, 50),
                                new google.maps.Point(0, 0),
                                new google.maps.Point(50, 80));

                        var companyPos = new google.maps.LatLng(24.801856, 67.029762);

                        var companyMarker = new google.maps.Marker({
                            position: companyPos,
                            map: map,
                            icon: companyImage,
                            shadow: companyShadow,
                            title: "Dolce Vita",
                            zIndex: 3});




                        google.maps.event.addListener(companyMarker, 'click', function() {
                            infowindow.open(map, companyMarker);
                        });

                        $('.address').html('D-7, Designer Avenue, 2nd Floor Dolmen Mall Clifton Karachi');

                        // We add a DOM event here to show an alert if the DIV containing the
                        // map is clicked. Note that we do this within the intialize function
                        // since the document object isn't loaded until after the window.load
                        // event.
                    }
                    
                }
                if ($('#select_city').val() == 'gjrwala') {
                    //        if($('#location_option').val() == '4'){
                    $('.address').html('Opposite Fazl Centre, GT Road, Gujranwala');
                    var latlng = new google.maps.LatLng(32.168633, 74.186648);
                    var settings = {
                        zoom: 16,
                        center: latlng,
                        mapTypeControl: true,
                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                        navigationControl: true,
                        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                        mapTypeId: google.maps.MapTypeId.ROADMAP};

                    var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                    var contentString = '<div id="content">' +
                            '<div id="siteNotice">' +
                            '</div>' +
                            '<h1 id="firstHeading" class="firstHeading">Dolce Store Gujranwala</h1>' +
                            '<div id="bodyContent">' +
                            '<p>Opposite Fazl Centre, GT Road, Gujranwala</p>' +
                            '</div>' +
                            '</div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                            new google.maps.Size(50, 61),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(30, 90)
                            );

                    var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                            new google.maps.Size(130, 50),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(50, 80));

                    var companyPos = new google.maps.LatLng(32.168633, 74.186648);

                    var companyMarker = new google.maps.Marker({
                        position: companyPos,
                        map: map,
                        icon: companyImage,
                        shadow: companyShadow,
                        title: "Dolce Vita",
                        zIndex: 3});




                    google.maps.event.addListener(companyMarker, 'click', function() {
                        infowindow.open(map, companyMarker);
                    });
                    
                }
                if ($('#select_city').val() == 'gjrt') {
                    //        if($('#location_option').val() == '4'){
                    $('.address').html('GT Road, Near Pervaiz Fan, Gujrat');
                    var latlng = new google.maps.LatLng(32.577822, 74.079007);
                    var settings = {
                        zoom: 16,
                        center: latlng,
                        mapTypeControl: true,
                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                        navigationControl: true,
                        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                        mapTypeId: google.maps.MapTypeId.ROADMAP};

                    var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                    var contentString = '<div id="content">' +
                            '<div id="siteNotice">' +
                            '</div>' +
                            '<h1 id="firstHeading" class="firstHeading">Dolce Store Gujrat</h1>' +
                            '<div id="bodyContent">' +
                            '<p>GT Road, Near Pervaiz Fan, Gujrat</p>' +
                            '</div>' +
                            '</div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var companyImage = new google.maps.MarkerImage('images/map-marker.png',
                            new google.maps.Size(50, 61),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(30, 90)
                            );

                    var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                            new google.maps.Size(130, 50),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(50, 80));

                    var companyPos = new google.maps.LatLng(32.577822, 74.079007);

                    var companyMarker = new google.maps.Marker({
                        position: companyPos,
                        map: map,
                        icon: companyImage,
                        shadow: companyShadow,
                        title: "Dolce Vita",
                        zIndex: 3});




                    google.maps.event.addListener(companyMarker, 'click', function() {
                        infowindow.open(map, companyMarker);
                    });
                    
                }

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <style>
            @font-face{
                font-family: Compass;
                src:url(fonts/compass.ttf);
            }
            @font-face{
                font-family: Gill;
                src:url(fonts/gill.ttf);
            }
            .wrapper{
                width:785px;
                height:695px;
                border:10px solid #fff;
            }
            .wrapper_inside_1{
                border:1px solid #7e7e7e;
            }
            .wrapper_inside{
                border:20px solid #000;
                float: left;
                width:743px;
                height: 652px;
                background: #000;
            }
            .heading{
                width: 749px;
                height:119px;
                background: url(images/heading.png) no-repeat center center #000;
                margin:0 auto;
            }
            .select_options{
                background: #000;
                padding: 22px 0;
            }
            .map_wrapper{
                width:494px;
                height:433px;
                border:3px solid #acacac;
                position: relative;
                /*margin-top:28px;*/
                /*margin-bottom:0px;*/
                /*margin-left:23px;*/
                float:left;
            }
            .address{
                width: 210px;
                height: 147px;
                border: 3px solid #acacac;
                text-align: center;
                font-family: Gill;
                padding-top: 48px;
            }
            .logo{
                width:210px;
                height:235px;
                background:url(images/logo.png) no-repeat center center #000;
                border:3px solid #acacac;
                margin-top: -3px;
            }
            .address_logo_wrapper{
                float: right;
                color: #363e36;
                background: #fff;
/*                margin-top: 27px;
                margin-right: 23px;*/
            }


            #select_city{
                width: 244px;
                height: 33px;
                border:2px solid #363e36;
                background: #abacac;
                margin-left: 124px;
                cursor: pointer;
                text-transform: uppercase;
                padding-left: 10px;
                font-weight: bold;
            }
            #location_option{
                width: 244px;
                height: 33px;
                border:2px solid #363e36;
                background: #abacac;
                margin-left: 21px;
                cursor: pointer;
                text-transform: uppercase;
                padding-left: 10px;
                font-weight: bold;
            }

            .quotient{
                text-transform: uppercase;
                font-size: 12px;
                clear: both;
                float: right;
                margin-top: 14px;
                margin-right: 23px;
            }
            .quotient_link{
                text-decoration: none;
                font-family: Gill;
                color:#fff;
            }
            .quotient_link:hover{
                text-decoration: underline;
            }

        </style>
        <script>
            $(document).ready(function() {
                $('.lahore').css({display: ''});
                $('.islamabad').css({display: 'none'});
                $('.karachi').css({display: 'none'});
                $('.gujranwala').css({display: 'none'});
                $('.gujrat').css({display: 'none'});

                $('#select_city').change(function() {
                    //                alert($('#select_city :selected').val());
                    $('#location_option').find('option').each(function(){
                        $(this).css({display:'none'});
                    });
                    if ($('#select_city :selected').val() == 'lah') {
                        $('#location_option').find('option').each(function(){
                            $('.lahore').css({display: ''});
                        });
                        
                        
                        $('#lahore_branch_1').attr('selected', 'selected');

                    }
                    else if ($('#select_city :selected').val() == 'isb')
                    {
                        $('#location_option').find('option').each(function(){
                            $('.islamabad').css({display: ''});
                        });
                        
                        
                        $('#islamabad_branch_1').attr('selected', 'selected');
                    }
                    else if ($('#select_city :selected').val() == 'khi')
                    {
                        $('#location_option').find('option').each(function(){
                            $('.karachi').css({display: ''});
                        });
                        
                        
                        $('#karachi_branch_1').attr('selected', 'selected');
                    }
                    else if ($('#select_city :selected').val() == 'gjrwala')
                    {
                        $('#location_option').find('option').each(function(){
                            $('.gujranwala').css({display: ''});
                        });
                        
                        
                        $('#gujranwala_branch_1').attr('selected', 'selected');
                    }
                    else if ($('#select_city :selected').val() == 'gjrt')
                    {
                        $('#location_option').find('option').each(function(){
                            $('.gujrat').css({display: ''});
                        });
                        
                        $('#gujrat_branch_1').attr('selected', 'selected');
                    }
                });

            });
        </script>
    </head>
    <body>

        <div class="wrapper">
            <div class="wrapper_inside_1">
                <div class="wrapper_inside">
                    <div class="heading"></div>
                    <div class="select_options">
                        <select id="select_city">
                            <option value="lah">Lahore</option>
                            <option value="isb" selected>Islamabad</option>
                            <option value="khi">Karachi</option>
                            <option value="gjrwala">Gujranwala</option>
                        </select>
                        <select id="location_option">
                            <option value="1lah" id="lahore_branch_1" class="lahore">Gulberg Store</option>
                            <option value="2lah" id="lahore_branch_2" class="lahore">Faisal Town Store</option>
                            <option value="3lah" id="lahore_branch_3" class="lahore">DHA Store</option>
                            <option value="4lah" id="lahore_branch_4" class="lahore">Wahdat Road Store</option>
                            <option value="1isb" id="islamabad_branch_1" class="islamabad">Sher Shakhi Market Store</option>
                            <option value="2isb" id="islamabad_branch_2" class="islamabad">SAFA GOLD MALL</option>
                            <option value="3isb" id="islamabad_branch_3" class="islamabad">CENTAURUS MALL Store</option>
                            <option value="1khi" id="karachi_branch_1" class="karachi">BUKHARI Store</option>
                            <option value="2khi" id="karachi_branch_2" class="karachi">DOLMEN MALL Store</option>
                            <option value="1gjrwala" id="gujranwala_branch_1" class="gujranwala">RAHWALI Store</option>
                            <option value="1gjrt" id="gujrat_branch_1" class="gujrat">FAROOQABAD Store</option>
                        </select>
                    </div>
                    <div class="map_wrapper">
                        <div id="map-canvas"></div>
                    </div>
                    <div class="address_logo_wrapper">
                        <div class="address">
                            Gulberg 111 - 1-B/C,<br /> Mahmood Ali Kasoori Road,<br /> (Near Hussain Chowk)<br /> Tel: 042-35877062-63
                        </div>
                        <div class="logo"></div>
                    </div>
                    <div class="quotient">
                        <a href="https://www.facebook.com/PurpleArts" class="quotient_link" target='_blank'>
                            A Purple Arts and Communication Quotient
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>

    </body>
</html>