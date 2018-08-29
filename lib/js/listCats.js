var data = null;

var xhr = new XMLHttpRequest();

function listCats(userID) {
    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
          console.log(this.responseText);
        }
      });
      
      xhr.open("GET", "https://us-central1-te-cattrack.cloudfunctions.net/listCats?userID=" + userID);
      xhr.send(data);
}