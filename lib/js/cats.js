var data = null;
var xmlHttp = new XMLHttpRequest();

function getData(userID) {
    console.log("Requesting cats for user ID: " + userID);
    
    xmlHttp.open("GET", "https://us-central1-te-cattrack.cloudfunctions.net/getCatsAdv?userID=" + userID , false ); // false for synchronous request
    xmlHttp.send( null );
    console.log("Whole Response:" + xmlHttp.responseText);
    var jsonResponse = JSON.parse(xmlHttp.responseText);
    var identifier = jsonResponse.documents[0].fields.Identifier.stringValue;
    var genLoc = jsonResponse.documents[0].fields.Location.mapValue.fields["General Location"].stringValue;
    var specLoc = jsonResponse.documents[0].fields.Location.mapValue.fields["Specific Location"].arrayValue.values[0].mapValue.fields["Specific Location"].mapValue.fields["Location Identifier"].stringValue;
    document.getElementById("catName").innerHTML = identifier;
    document.getElementById("genLoc").innerHTML = genLoc;
    document.getElementById("specLoc").innerHTML = specLoc;
    console.log("Identifier: " + identifier);
    console.log("General Location: " + genLoc);
    console.log("Specific Location: " + specLoc);
    return xmlHttp.responseText;
}