var data = null;
var xmlHttp = new XMLHttpRequest();

function getData(userID) {
    console.log("Requesting cats for user ID: " + userID)
    
    xmlHttp.open("GET", "https://us-central1-te-cattrack.cloudfunctions.net/getCatsAdv?" + userID , true ); // false for synchronous request
    xmlHttp.send( null );
    console.log(xmlHttp.responseText)
    return JSON.parse(xmlHttp.responseText)["data"]["translations"][0]["translatedText"];
}