var rowLim = document.getElementById('changeRows').value;

   var tr =  document.getElementsByTagName('tr');
    for(var i = 0; i < rowLim; i++){
        tr[i].style.display = '';
    }
    for(var j = rowLim ; j<= tr.length; j++){
        tr[j].style.display = 'none';
    }


    