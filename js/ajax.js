




function ajaxGET(file, target=null) {
  const sv = document.getElementById("save");
  sv.classList.remove("hide");
  
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(!(target)) console.log(this.responseText);
        else {if(document.getElementById(target).innerHTML = this.responseText) { sv.classList.add("hide"); } }
        //setTimeout(function(){ sv.classList.add("hide"); }, 2000);
      }
      else sv.classList.remove("hide");
    };
    xhttp.open("GET", "ajax/"+file, true);
    xhttp.send();
  }