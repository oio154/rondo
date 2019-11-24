function ajaxGET(file, target=null) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(!(target)) console.log(this.responseText)
        else document.getElementById(target).innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "ajax/"+file, true);
    xhttp.send();
  }