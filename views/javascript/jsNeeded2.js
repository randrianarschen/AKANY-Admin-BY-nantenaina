var rowLim = document.getElementById('changeRows').value;
var tr = document.getElementsByTagName('tr');
var rows = parseInt(tr.length)-1;
var divPag = document.getElementById('selectedColumn_paginate');
function createPagination(rowLim){
  if(rows/rowLim>1){
    divPag.innerHTML = "";
     var page = Math.ceil(((tr.length)-1)/rowLim);
     var pageLim = parseInt(page+2);
     for(let m = 0; m<pageLim; m++){
       var button = document.createElement('button');
       if(m == 0){
       button.setAttribute('class', 'btn btn-info previous ');
       button.disabled = true;
       button.setAttribute('onclick', 'previousPage()');
       button.innerHTML = 'Précédent';
       button.setAttribute('type', 'button');
       }
        else if(m == pageLim-1){
        button.setAttribute('class', 'btn btn-info next');
        button.setAttribute('onclick', 'nextPage()');
        button.innerHTML = 'suivant';
        button.setAttribute('type', 'button');
        }
       else{
    button.setAttribute('class','btn ');
    button.innerHTML = m;
    button.setAttribute('onclick','pagination('+m+')');
       }
      
      divPag.appendChild(button);
  }
 
}
else{
  divPag.innerHTML = "";
}
}

for(var i = 1; i <tr.length; i++){

  tr[i].style.display = 'none';
}

  function active(m, rowLim){
    if(rows/rowLim>1){
      if(m==1){
        divPag.getElementsByClassName('previous')[0].disabled = true;
        divPag.getElementsByClassName('next')[0].disabled = false;
      }else if(m == Math.ceil(((tr.length)-1)/rowLim)){
        divPag.getElementsByClassName('next')[0].disabled = true;
        divPag.getElementsByClassName('previous')[0].disabled = false;
      }else{
        divPag.getElementsByClassName('previous')[0].disabled = false;
        divPag.getElementsByClassName('next')[0].disabled = false;
      }
    var current = divPag.getElementsByClassName('btn-primary')[0];  
  if(current != undefined){
    console.log(current);
   current.classList.remove("btn-primary");
  divPag.getElementsByClassName('btn')[m].classList.add('btn-primary');}
  else{
    divPag.getElementsByClassName('btn')[m].classList.add('btn-primary');
  }
  } 
  else{
    divPag.innerHTML = "";
  }
  }

  function manageLimitTable(rowLim, m){
    if(rows/rowLim>1){
  var to = m * parseInt(rowLim);
  var from = to - parseInt(rowLim-1); 
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
function limitTable(rowLim, m){
      createPagination(rowLim);
      active(m, rowLim);
      manageLimitTable(rowLim, m);
}
function pagination(m){
  let rowLim = document.getElementById('changeRows').value;
  active(m, rowLim);
  manageLimitTable(rowLim, m);

}
  document.getElementById('changeRows').onchange = function() {
    let rowLim = this.value;
    if(rows/rowLim>1){
      var m = divPag.getElementsByClassName('btn-primary')[0];
       if(m != undefined){
         var m = divPag.getElementsByClassName('btn-primary')[0].innerHTML;
         var pagLim = Math.ceil(rows/rowLim);
         if(pagLim>=m){
          limitTable(rowLim, m);
        }else{
          limitTable(rowLim, 1);
        }
        }else{
          limitTable(rowLim, 1);
        }
       }else{
         limitTable(rowLim, 1);
       }
  }
  


 async function searchAny(){
  var input, filter, table, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementsByClassName("table");
  var rowLim = document.getElementById('changeRows').value;
  // Loop through all table rows, and hide those who don't match the search query
  if(filter == ""){
    var m = divPag.getElementsByClassName('btn-primary')[0].innerHTML;
    manageLimitTable(rowLim, m);
    divPag.style.display = '';
}
else{
  for (i = 1; i < tr.length; i++) {
  var td = [];  
  tr[i].style.display = "none";
   for( var j = 0; j< 6 ; j++){
    td[j] = tr[i].getElementsByTagName("td")[j];
    if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
      // show the row
      tr[i].style.display = "";
      divPag.style.display = "none";
      // skip to the next row
      continue;
    }
  }
  }}
 }
limitTable(rowLim, 1);
function previousPage(){
  var activeButton = divPag.getElementsByClassName('btn-primary')[0];
 let m = parseInt(activeButton.innerHTML)-1;
 pagination(m);   
}
function nextPage(){
  var activeButton = divPag.getElementsByClassName('btn-primary')[0];
      let m = parseInt(activeButton.innerHTML) + 1;
  pagination(m);
}
    

