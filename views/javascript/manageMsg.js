var btn_delete = document.getElementsByClassName('delete_msg');

var btn_delete = document.getElementsByClassName('delete_msg');
var time_msg = document.getElementsByClassName('time');
var ident = document.getElementsByClassName("id_msg");
console.log(ident);
var check1 = document.getElementsByClassName('check1');
var tr = document.getElementsByTagName('tr'); 
for (let x = 0; x<tr.length; x++){
	btn_delete[x].addEventListener('click', function(event)
	{ 
	   event.preventDefault();
		var id =  ident[x].innerHTML;
        console.log("bouiuoiuo"+id);
		  deleteData("index.php?controller=mailbox&task=delete&id="+id+"").then(response =>{
			console.log(response);
			if(response.success === true) {
			  tr[x].remove(); 
			
			 }
		 else{
		  alert(response.message);
		 }
	
		}
		 ).catch(error=>{alert(error);});
		 
		})
	  check1[x].addEventListener('change', function(){  
	if(this.checked){
	console.log(tr[x]);
	tr[x].classList.add('table-primary');
    btn_delete[x].style.display="inline";
	time_msg[x].style.display = "none";
	btn_delete[x].disabled = false;
	}else{
        console.log('erzerezr'+tr[x]);
	tr[x].classList.remove('table-primary');
	btn_delete[x].style.display = "none";
	btn_delete[x].disabled = true;
	time_msg[x].style.display = "inline";
	}
})
}
console.log('boueruoze');

  