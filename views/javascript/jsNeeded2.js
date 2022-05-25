
var rowLim = 5;
var tr = document.getElementsByTagName('tr'); 
function limitTable(rowLim){
  var lim = parseInt(rowLim) + 1;
      for(var i = 1; i <=rowLim; i++){
          var rowTo = document.getElementById('row'+i);
          console.log(rowTo);
          rowTo.style.display = '';
      }
      for(var j = lim; j< tr.length; j++){
          var row = document.getElementById('row'+j);
          row.style.display = 'none';
      }
  
  }
  document.getElementById('changeRows').onchange = function() {
    var rowLim = this.value;
    limitTable(rowLim);
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
  limitTable(rowLim);

}
 }

limitTable(rowLim);




// $(document).ready(function () {
//     $('#dtBasicExample').DataTable();
//     $('.dataTables_length').addClass('bs-select');
//   });
//   $(document).ready(function () {
//     $('#dtBasicExample').DataTable({
//       "paging": false // false to disable pagination (or any other option)
//     });
//     $('.dataTables_length').addClass('bs-select');
//   });
//   // Basic example
// $(document).ready(function () {
//     $('#dtBasicExample').DataTable({
//       "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
//     });
//     $('.dataTables_length').addClass('bs-select');
//   });

// $(document).ready(function () {
//   $('#dtBasicExample').DataTable({
//     "searching": false // false to disable search (or any other option)
//   });
//   $('.dataTables_length').addClass('bs-select');
// });

// $(document).ready(function () {
//     $('#dtBasicExample').DataTable();
//     $('.dataTables_length').addClass('bs-select');
//   });
//   $(document).ready(function () {
//     $('#dtBasicExample').DataTable({
//      "ordering": false // false to disable sorting (or any other option)
//     });
//     $('.dataTables_length').addClass('bs-select');
//   });