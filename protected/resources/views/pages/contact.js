(function($) {
    $.fn.CustomMap = function(options) {

        var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

        var settings = $.extend({
            home: {
                latitude: posLatitude,
                longitude: posLongitude
            },
            text: '<div class="map-popup"><h5>Pusat Higiene Perusahaan, Kesehatan, dan Keselamatan Kerja (Hiperkes & KK)</h5><h5>Dinas Tenaga Kerja dan Transmigrasi Provinsi DKI Jakarta</h5><p>Jl. Jend. A. Yani No. 69-70, Cempaka Putih, Jakarta Pusat <br /> <i class="fa fa-phone" title="Phone"></i> 021-4209820, 4240284, 42878913 <br /> <i class="fa fa-fax" title="Fax"></i> 021-4209820</p></div>',
            icon_url: $('#map').data('marker-img'),
            zoom: 15
        }, options);

        var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

    return this.each(function() {
      var element = $(this);

      var options = {
        zoom: settings.zoom,
        center: coords,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        scaleControl: true,
        streetViewControl: false,
        panControl: true,
        disableDefaultUI: true,
        zoomControlOptions: {
          style: google.maps.ZoomControlStyle.DEFAULT
        },
        overviewMapControl: true,
      };

      var map = new google.maps.Map(element[0], options);

      var icon = {
        url: settings.icon_url,
        origin: new google.maps.Point(0, 0)
      };

      var marker = new google.maps.Marker({
        position: coords,
        map: map,
        icon: icon,
        title: 'Pusat Higiene Perusahaan',
        draggable: false
      });

      var info = new google.maps.InfoWindow({
        content: settings.text
      });

      google.maps.event.addListener(marker, 'click', function() {
          info.open(map, marker);
      });

      var styles = [{
        "featureType": "landscape",
        "stylers": [{
          "saturation": -100
        }, {
          "lightness": 65
        }, {
          "visibility": "on"
        }]
      }, {
        "featureType": "poi",
        "stylers": [{
          "saturation": -100
        }, {
          "lightness": 51
        }, {
          "visibility": "simplified"
        }]
      }, {
        "featureType": "road.highway",
        "stylers": [{
          "saturation": -100
        }, {
          "visibility": "simplified"
        }]
      }, {
        "featureType": "road.arterial",
        "stylers": [{
          "saturation": -100
        }, {
          "lightness": 30
        }, {
          "visibility": "on"
        }]
      }, {
        "featureType": "road.local",
        "stylers": [{
          "saturation": -100
        }, {
          "lightness": 40
        }, {
          "visibility": "on"
        }]
      }, {
        "featureType": "transit",
        "stylers": [{
          "saturation": -100
        }, {
          "visibility": "simplified"
        }]
      }, {
        "featureType": "administrative.province",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [{
          "visibility": "on"
        }, {
          "lightness": -25
        }, {
          "saturation": -100
        }]
      }, {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "hue": "#ffff00"
        }, {
          "lightness": -25
        }, {
          "saturation": -97
        }]
      }];

      map.setOptions({
        styles: styles
      });
    });
  };
}(jQuery));

$(function() {
    $('#map').CustomMap();
});
