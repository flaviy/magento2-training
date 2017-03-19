define([
    "jquery"
], function($){
    "use strict";

    return function(config, element) {
        var numOfAttributes = $(element).find('tr').length;
        console.log("Number of attributes: " + numOfAttributes);
    }
});