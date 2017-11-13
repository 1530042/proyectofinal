/**
* Theme: Simple Admin Template
* Author: Coderthemes
* Google Maps
*/

!function($) {
    "use strict";

    var GoogleMap = function() {};

    //creates map with overlay
    GoogleMap.prototype.createWithOverlay = function ($container) {
      var map = new GMaps({
        div: $container,
        lat: -12.043333,
        lng: -77.028333
      });
      map.drawOverlay({
        lat: map.getCenter().lat(),
        lng: map.getCenter().lng(),
        content: '<div class="gmaps-overlay">Our Office!<div class="gmaps-overlay_arrow above"></div></div>',
        verticalAlign: 'top',
        horizontalAlign: 'center'
      });

      return map;
    },

    
    GoogleMap.prototype.init = function() {
      var $this = this;
      $(document).ready(function(){
        //with sample markers
        

        //overlay
        $this.createWithOverlay('#gmaps-overlay');


      });
    },
    //init
    $.GoogleMap = new GoogleMap, $.GoogleMap.Constructor = GoogleMap
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.GoogleMap.init()
}(window.jQuery);