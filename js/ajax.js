function AjaxJs() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("divdatos").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "controladores/ajax.php?acction=CONSULTAUSUARIOS", true);
  xhttp.send();
}