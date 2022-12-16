function autre() {
    var checkBox = document.getElementById("Autre");
    var text = document.getElementById("autre_nom");
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  };
function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}

function validate(){
  var nom = document.getElementsByName('contactName');
  var mail = document.getElementsByName('contactEmail');
  var num = document.getElementsByName('contactP');
  var nomsta = document.getElementsByName('contactRP');
  var nomsta = document.getElementsByName('desc');
}