const cboxes = document.getElementsByName('databaseID[]');

console.log(cboxes);
function checkboxes(){
    var inputElems = document.getElementsByTagName("input");
    let count = 0;
    for (var i=0; i<inputElems.length; i++) {
    if (inputElems[i].type === "checkbox" && inputElems[i].checked === true){
        count++;
    }
  }
  document.getElementById('selectedDb').innerHTML=count;
}

