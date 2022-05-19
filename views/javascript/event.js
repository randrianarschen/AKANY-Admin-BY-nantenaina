
var page = window.location.href;
page = page.substr((page.lastIndexOf('/') + 1));
switch(page){
  
   case "index.php?controller=Home&task=index":
       $('#home').addClass('active');
       break;
   case "index.php?controller=Events&task=addEvent":
     $("#event").addClass("active");
     $('#event1').addClass('active');
     $('#link1').css('display', 'block');
       break;
   case "index.php?controller=Events&task=manageEvent":
      $("#event").addClass("active");
       $('#event2').addClass('active');
       $('#link1').css('display','block');
       break;
     case "index.php?controller=donation&task=ask":
       $("#gift").addClass('active');
       $("#gift1").addClass('active');
       $('#link2').css('display', 'block');
       break;
     case "index.php?controller=donation&task=manageAsking":
       $("#gift").addClass('active');
       $("#gift2").addClass('active');
       $('#link2').css('display', 'block');
       break;
       case "index.php?controller=blog&task=addBlog":
         $("#blog").addClass('active');
         $("#blog1").addClass('active');
         $('#link5').css('display','block');
         break;
         case "index.php?controller=blog&task=manageBlog":
           $("#blog").addClass('active');
           $("#blog2").addClass('active');
           $('#link5').css('display', 'block');
           break;
           case "index.php?controller=responsible&task=addResponsible":
             $("#responsible").addClass('active');
             $("#responsible1").addClass('active');
             $('#link3').css('display','block');
             break;
             case "index.php?controller=responsible&task=manageResponsible": 
               $("#responsible").addClass('active');
               $("#responsible2").addClass('active');
               $('#link3').css('display','block');
               break
               case "index.php?controller=admin&task=general":
                 $("#settings").addClass('active');
                 $("#setting1").addClass('active');
                 $('#link6').css('display', 'block');
                 break;
                 case "index.php?controller=contact&task=updateContact":
                   $("#settings").addClass('active');
                   $("#setting2").addClass('active');
                   $('#link6').css('display','block');
                   break;
                   case "index.php?controller=witness&task=addWitness":
                     $("#witness").addClass('active');
                     $("#witness1").addClass('active');
                     $('#link4').css('display','block');
                     break;
                     case "index.php?controller=witness&task=manageWitness":
                       $("#witness").addClass('active');
                       $("#witness2").addClass('active');
                       $('#link4').css('display','block');
                       break;
                       case "index.php?controller=mailbox&task=index":
                         $("#email").addClass('active');
                         break;
                         default: 
                         $("#home").addClass('active');

}

var controller = new AbortController();
  var signal = controller.signal;
var sendRequest = async (url, data) => {
 
  const request = await fetch(url,{method:'POST', body: data});
   console.log(request);
  
      const response = await request.json();
  
    if(response.ok){
      console.log(response);
    }else{
      console.log(response.statusText);
    }  
    return response;}
var deleteData = async (url) => {
  var response = await fetch(url);
  var result = await response.json();
  if(result.ok) {
    console.log( result);
  }else{
    console.log( result.statusText);
  }
  return result;
}

var abortDeleting = async () => {
  controller.abort();
  console.log('now aborting');
}

function cancel(event, no){
  event.preventDefault();
  var val1=document.getElementById("iden1"+no).value;
  var val2=document.getElementById("iden2"+no).value;
  var val3=document.getElementById("iden3"+no).value;
  var val4=document.getElementById("iden4"+no).value;
  var srcNew = document.getElementById("blah"+no).src;
  document.getElementById("td1"+no).innerHTML=val1;
  document.getElementById("td2"+no).innerHTML=val2;
  document.getElementById("td3"+no).innerHTML=val3;
  document.getElementById("td4"+no).innerHTML=val4;
  document.getElementById("td5"+no).innerHTML= "<img id='image"+no+"' src='"+srcNew+"' width='100px' height='100px'>"
  document.getElementById("edit_button"+no).style.display="block";
  document.getElementById("save_button"+no).style.display="none";
  document.getElementById("cancel"+no).style.display="none";

}

function edit_row(event, no, tdLength)
{
  event.preventDefault();
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
 document.getElementById("cancel"+no).style.display="block";
 var src = document.getElementById("image"+no+"").src;
 for(let k = 0; k<tdLength; k++){
 var row = document.getElementById('row'+no);
 
 var td = document.getElementsClassName("td"+no);
 var val;
 val[k] = td[k].innerHTML;
 td[k].innerHTML="<input type='text' id='iden"+no+"' value='"+val[k]+"'>";
 if(k == 1){
   td[k].innerHTML = "<input type='datetime' class='iden"+no+"' value='"+val[k]+"'>";
 }else if(k=== k-1){
   td[k].innerHTML = "<img id='blah"+no+"' style='display:block;' src='"+src+"'  width='100px' height='100px'><div><span class='btn btn-file btn-success'><span class='fileupload-new'>Select image</span><input type='file' class='imgToEdit' name='image'  accept='.jpg, .jpeg, .gif, .png'    required id='img"+no+"' onchange='showPreview(event, "+no+");'></span></div>";
 }
 }
 console.log('you can edit it');
}


 function save_row(event, no, par1, par2, tdLength)
{   
  event.preventDefault();
  var id = document.getElementById("id"+no).value;
  for(let l = 0; l<tdLength; l++){
  var value1=document.getElementById("iden1"+no).value;
  var value2=document.getElementById("iden2"+no).value;
  var value3=document.getElementById("iden3"+no).value;
  var value4=document.getElementById("iden4"+no).value;

 ;}
  var fileArray = document.getElementById("img"+no).files;
var img = fileArray[0] ;console.log(img);
//  let data = {id:id, val1:value1, val2:value2, val3:value3, val4:value4, image:img};
if(fileArray.length > 0){
  var data = new FormData(); 
  data.append('id', id);
  data.append('val1', value1);
  data.append('val2', value2);
  data.append('val3', value3);
  data.append('val4', value4);
  data.append('image', img);
  sendRequest("index.php?controller="+par1+"&task="+par2+"", data).then(response =>{ 
    console.log(response);
    if(response.success === true) {
    var val1=document.getElementById("iden1"+no).value;
    var val2=document.getElementById("iden2"+no).value;
    var val3=document.getElementById("iden3"+no).value;
    var val4=document.getElementById("iden4"+no).value;
    var srcNew = document.getElementById("blah"+no).src;
    document.getElementById("td1"+no).innerHTML=val1;
    document.getElementById("td2"+no).innerHTML=val2;
    document.getElementById("td3"+no).innerHTML=val3;
    document.getElementById("td4"+no).innerHTML=val4;
    document.getElementById("td5"+no).innerHTML= "<img id='image"+no+"' src='"+srcNew+"' width='100px' height='100px'>"
    document.getElementById("edit_button"+no).style.display="block";
    document.getElementById("save_button"+no).style.display="none";
    document.getElementById("cancel"+no).style.display="none";
    } else
    {
    
     alert(data.message);
    }
  
  }).catch(error=>{
    console.log(error.message);
    
     document.getElementById('error_msg').innerHTML ="<div class='alert alert-danger' role='alert'>"+error.message+"</div>";
  });

} else{
  Swal.fire({
    title: 'desolé!',
    text: 'Veuillez selectionner une image que vous voulez uploader',
    imageUrl: 'https://unsplash.it/400/200',
    imageWidth: 100,
    imageHeight: 100,
    imageAlt: 'Custom image',
  });
}
}


function delete_row(event, no, param)
{ 
   event.preventDefault();
  Swal.fire({
    title: "Etes vous prêt de l' effacer?",
    text: "Vous ne pourriez pas le récupérer!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Oui, efface le!'
  }).then((result) => {
    if (result.isConfirmed) {
      var id = document.getElementById("id"+no).value;
      var data = new FormData();
      data.append('id', id);
      deleteData("index.php?controller="+param+"&task=delete&id="+id+"").then(response =>{
        if(response.success === true) {
          document.getElementById("row"+no).remove(); 
          Swal.fire(
        'effacé!',
        'Les données sont supprimés.',
        'success'
      )}
     else{
      alert(response.message);
     }
    }
     ).catch(error=>{console.log(error.message);});
     
    }
  })
}   
                                   
 function showPreview(event, no) {
    if(event.target.files.length > 0){
      var file = event.target.files[0];
      var fileName =file.name;
      var fileExt =fileName.split('.').pop();
      var fileActExt = fileExt.toLowerCase();
      var allowedFileExtensions = ['jpg','jpeg','png', 'gif'];
      if(allowedFileExtensions.indexOf(fileActExt) != -1){
      var src = URL.createObjectURL(file);
      if(no == undefined) {
      console.log(no);
      var preview = document.getElementById("blah");
        preview.src = src;
        preview.style.display = "block";
        var change = $('#selectImg');
        change.innerHTML = "change";}
      else{
      var preview = document.getElementById("blah"+no);
      console.log(preview);
      preview.src = src;
      preview.style.display = "block";
      var change = $('#selectImg');
      change.innerHTML = "change";  
      }}
      else{
     
        swal.fire("Désole! seul les format jpg, jpeg, png et gif sont autorisés");  
         event.target.value = "";
      }
  }}

var img = document.getElementById('blah');
console.log(img);

var navlink = document.getElementsByClassName('nav-link');
for( let j = 0; j<navlink.length; j++ ){
   navlink[j].addEventListener('click', function(){
     $(this).addClass('active');
    });
  }
 
for(let i = 0; i<3; i++){
document.getElementById('spanEye')[i].addEventListener('click', 
function () {
  var x = document.getElementById("password"+i);
  var show_eye = document.getElementById("show_eye"+i);
  var hide_eye = document.getElementById("hide_eye"+i);
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
)}