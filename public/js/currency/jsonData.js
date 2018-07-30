//var xhr = new XMLHttpRequest();
//
//xhr.onload = function() {
//    if(xhr.status === 200) {
//        responseObject = JSON.parse(xhr.responseText);
//        
//        var newContent = '';
//        for (var i = 0; i < responseObject.events.length; i++) {
//            newContent += '<div class="event">';
//            newContent += 'alt="' + responseObject.events[i].long + '" />';
//            newContent += '<p><b>' + responseObject.events[i].long + '</b><br>';
//            newContent += responseObject.events[i].country + '</p>';
//            newContent += '</div>';
//        }
//        document.getElementById('content').innerHTML = newContent;
//
//    }
//};
//
//xhr.open('GET', 'js/forex.json', true);
//xhr.send(null);

function loadJSON(callback) {

    var xobj = new XMLHttpRequest();
    xobj.overrideMimeType("application/json");
    xobj.open('GET', 'forex.json', true);
    xobj.onreadystatechange = function() {
        if (xobj.readyState == 4 && xobj.status == "200") {

            // .open will NOT return a value but simply returns undefined in async mode so use a callback
            callback(xobj.responseText);

        }
    }
    xobj.send(null);

}

// Call to function with anonymous callback
loadJSON(function(response) {
    // Do Something with the response e.g.
    //jsonresponse = JSON.parse(response);

    // Assuming json data is wrapped in square brackets as Drew suggests
    //console.log(jsonresponse[0].name);

});