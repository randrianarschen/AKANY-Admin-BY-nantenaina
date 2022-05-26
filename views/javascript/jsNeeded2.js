var rowLim = document.getElementById('changeRows').value;
var tr = document.getElementsByTagName('tr');
var rows = parseInt(tr.length)-1;
function createPagination(){
  if(rows/rowLim>1){
     var page = Math.ceil(((tr.length)-1)/rowLim);
     var pageLim = parseInt(page+2);
     for(let m = 0; m<pageLim; m++){
       var button = document.createElement('button');
       if(m == 0){
       button.setAttribute('class', 'btn btn-info');
       button.innerHTML = 'Précédent';
       button.setAttribute('onclick', 'previous()');
       }
        else if(m == pageLim-1){
        button.setAttribute('class', 'btn btn-info');
        button.innerHTML = 'suivant';
        button.setAttribute('onclick', 'nextPage()');
        }
       else{
    button.setAttribute('class','btn ');
    button.innerHTML = m;
    button.setAttribute('onclick','pagination('+m+')');
       }
      
      divPag.appendChild(button);
  }
 
}
}

for(var i = 1; i <tr.length; i++){
  var tdata = document.getElementById('row'+i)
  tdata.style.display = 'hidden';
}
var divPag = document.getElementById('selectedColumn_paginate');
  function active(m){
    if(rows/rowLim>1){
    var current = divPag.getElementsByClassName('btn-primary')[0];  
  if(current != undefined){
    console.log(current);
   current.classList.remove("btn-primary");}
  divPag.getElementsByClassName('btn')[m].classList.add('btn-primary');}}

  function manageLimitTable( m){
    if(rows/rowLim>1){
  var to = m * parseInt(rowLim);
  var from = to - parseInt(rowLim-1);
  var tr = document.getElementsByTagName('tr'); 
  for(var i = 1; i <tr.length; i++){
  var tdata = document.getElementById('row'+i)
  tdata.style.display = 'none';
}
  for(var from ; from <= to; from++){
          var rowTo = document.getElementById('row'+from);
          rowTo.style.display = '';
      }
  }else{
    for(var i = 1; i <tr.length; i++){
  var tdata = document.getElementById('row'+i)
  tdata.style.display = '';
}
  }
  }
function limitTable(){
  var lim = parseInt(rowLim) + 1;
      createPagination();
      active(m);
      manageLimitTable();
}
function pagination(m){
  let rowLim = document.getElementById('changeRows').value;
  active(m);
  manageLimitTable(rowLim, m);
}
  document.getElementById('changeRows').onchange = function() {
    let rowLim = this.value;
    var m =divPag.getElementsByClassName('btn-primary')[0].innerHTML;
    divPag.innerHTML = "";
      console.log(m);
   limitTable(rowLim, m);
}

 async function searchAny(){
  var input, filter, table, tr, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementsByClassName("table");
  tr = document.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  if(filter == ""){
    var rowLim = document.getElementById('changeRows').value;
    var m = divPag.getElementsByClassName('btn-primary')[0].innerHTML;
      console.log(m);
    manageLimitTable(m);

}else{
  for (i = 1; i < tr.length; i++) {
  var td = [];  
  tr[i].style.display = "none";
   for( var j = 0; j< 6 ; j++){
    td[j] = tr[i].getElementsByTagName("td")[j];
    if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
      // show the row
      tr[i].style.display = "";
      // skip to the next row
      continue;
    }
  }
 
  }}

 }
limitTable(rowLim, 1);



    

