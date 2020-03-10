$("#downloadportf").click(function(e) {
    e.preventDefault(); 
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", "http://167.99.164.202:3000/api/portfolio/download", true ); // false for synchronous request
    xmlHttp.send();
    return xmlHttp.responseText;
});