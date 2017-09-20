
var xmlDoc;


function getXML() {
    xhttp=new XMLHttpRequest();
    var url = "https://chipublib.bibliocommons.com/events/events/rss/all?nocache=" + Math.random();
    xhttp.open("GET",url,false);
    xhttp.send();
    xmlDoc=xhttp.responseXML;
}

var x=xmlDoc.getElementsByTagName("item");
for (var i=0;i<x.length;i++) {

    // get event's branch
    
    if (x[i].getElementsByTagNameNS("http://bibliocommons.com/rss/1.0/modules/event/","name")[0] && x[i].getElementsByTagNameNS("http://bibliocommons.com/rss/1.0/modules/event/","name")[0].childNodes[0]) {
    
        var branch = x[i].getElementsByTagNameNS("http://bibliocommons.com/rss/1.0/modules/event/","name")[0].childNodes[0].nodeValue;
        
    };

print x;