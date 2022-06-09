
var addtomail = document.querySelector(".addtomail");
var addtomailbtn = document.querySelector(".addtomailbtn");
var addtomailemail = document.querySelector(".addtomailemail");
var addtomailsubject = document.querySelector(".addtomailsubject");
var addtomailname = document.querySelector(".addtomailname");
var addtomailmsg = document.querySelector(".addtomailmsg");

	
	addtomail.addEventListener("submit", function(e) {
		e.preventDefault();
		var data = new FormData(this);
	 
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() { 
			if (this.readyState == 4 && this.status == 200) {
				var res = this.response;
				console.log(res);
				if (res.success === true) {
					console.log('message bien envoyé !');
					addtomailemail.value = "";
					addtomailsubject.value = "";
					addtomailname.value = "";
					addtomailmsg.value = "";
					addtomailbtn.className = "btn btn-danger py-3 px-5 addtomailbtn"
					addtomailbtn.value = "Send again";
					if(addtomail.getElementsByClassName('btn-success')[0] != undefined ){
                    console.log("ok");
                     
					}
					else if(addtomail.getElementsByClassName('btn-danger')[0] != undefined){
					addtomail.getElementsByClassName('markAsSent')[0].classList.add('btn-success');
                     addtomail.getElementsByClassName('markAsSent')[0].classList.remove('btn-danger');
					
				}
				document.getElementsByClassName('markAsSent')[0].innerHTML = "message envoyé ✔";
			}
				else{
				    addtomail.getElementsByClassName('markAsSent')[0].classList.remove('btn-success');
					document.getElementsByClassName('markAsSent')[0].classList.add('btn-danger');
					document.getElementsByClassName('markAsSent')[0].innerHTML = "veuillez remplir tous les champs!";
					
				}
			}else if (this.readyState == 4) {
				
				alert('une erreurr est survenue...');
			}
		};
	
		xhr.open("POST", "index.php?controller=mailbox&task=sendMessage", true);
		xhr.responseType = "json";
		xhr.send(data);
	
		return false;
	});
	
