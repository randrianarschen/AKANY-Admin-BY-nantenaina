var tr = document.getElementsByTagName('tr'); 
for(var i = 1; i <tr.length; i++){
  var tdata = document.getElementById('row'+i)
  tdata.style.display = 'none';
}

var ulpag = document.getElementById('pagination');
function limitTable(rowLim=5, i=1){
  var lim = parseInt(rowLim) + 1;
      for(var i; i <=rowLim; i++){
          var rowTo = document.getElementById('row'+i);
          console.log(rowTo);
          rowTo.style.display = '';
      }
      for(var j = lim; j< tr.length; j++){
          var row = document.getElementById('row'+j);
          row.style.display = 'none';
      } 
      console.log(ulpag);
      console.log(tr.length-1);
      if(((tr.length)-1)/rowLim>1){
         var page = Math.ceil(((tr.length)-1)/rowLim);
         console.log(page);
         var pageLim = parseInt(page+2);
         for(let m = 0; m<pageLim; m++){
           var alink = document.createElement('a');
            alink.setAttribute('href', '#');
            alink.setAttribute('class', 'page-link');
           if(m == 0){
          var lipag = document.createElement('li');
          lipag.setAttribute('class', 'paginate_button page-item previous disabled');
          lipag.setAttribute('id', 'selectedColumn_previous');
          lipag.setAttribute('onclick', 'previous()');
          var textNode = document.createTextNode('Précédent');
          alink.appendChild(textNode);
          lipag.appendChild(alink);
           }
            else if(m == pageLim-1){
          var lipag = document.createElement('li');
          lipag.setAttribute('class', 'paginate_button page-item next ');
          lipag.setAttribute('id', 'selectedColumn_next');
          lipag.setAttribute('onclick', 'nextPage()');
          var textNode = document.createTextNode('Suivant');
          alink.appendChild(textNode);
          lipag.appendChild(alink);
           }
           else{
          var lipag = document.createElement('li');
          lipag.setAttribute('class', 'paginate_button page-item');
          lipag.setAttribute('id', 'selectedColumn_next');
          lipag.setAttribute('onclick', 'pagination('+m+')');
          var textNode = document.createTextNode(m);
          alink.appendChild(textNode);
          lipag.appendChild(alink);
           }
            console.log(lipag);
            ulpag.appendChild(lipag);
      }
     
  }
}
  document.getElementById('changeRows').onchange = function() {
    var rowLim = this.value;
    ulpag.innerHTML = "";
    limitTable();
}

 async function searchAny(){
  var input, filter, table, tr, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementsByClassName("table");
  tr = document.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
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
 
  }
  if(filter == ""){
      var rowLim = document.getElementById('changeRows').value;
  limitTable();
  
}
 }

limitTable();
function previous(){

}
function nextPage(){}
function pagination(m){
  this.classList.add('active');
  var rowLim = document.getElementById('changeRows').value;
  var to = m * parseInt(rowLim);
  var from = to - parseInt(rowLim-1);
  var tr = document.getElementsByTagName('tr'); 
for(var i = 1; i <tr.length; i++){
  var tdata = document.getElementById('row'+i)
  console.log(rowTo);
  tdata.style.display = 'none';
}
      for(var from ; from <= to; from++){
          var rowTo = document.getElementById('row'+from);
          rowTo.style.display = '';
      }
  }


    

