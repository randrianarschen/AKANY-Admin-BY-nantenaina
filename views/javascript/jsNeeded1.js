
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
var uploadData = async (url, data) => {
 
  const request = await fetch(url, {method:'POST', body: data});
   console.log(request);
  
      const response = await request.json();
  
    if(response.ok){
      console.log(response);
    }else{
      console.log("oops");
    }  
    return response;}
var sendRef = async (url) => {
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

function cancel(event, no, par1, par2){
  event.preventDefault();
  var id = document.getElementById("id"+no).value;
  var data = new FormData();
  data.append('id', id);
  uploadData("index.php?controller="+par1+"&task="+par2+"&id="+id+"", data).then(response =>{
  document.getElementById("edit_button"+no).style.display="block";
  document.getElementById("delete_button"+no).style.display="block";
  document.getElementById("save_button"+no).style.display="none";
  document.getElementById("cancel_button"+no).style.display="none"; 
var td = document.getElementsByClassName("td"+no);
console.log(Object.values(response));
console.log(td);
 if(par1 == "witness"){
  td[5].innerHTML= "<img id='image"+no+"' src='views/images/witnesses/"+response.image+"' width='100px' height='100px'>"
  td[4].innerHTML = response.link_video;
  td[3].innerHTML= response.function;
  td[2].innerHTML= response.date_publication;
  td[1].innerHTML= response.title;
  td[0].innerHTML= response.name_witness;
  }
  else if(par1 == "donation"){
    td[4].innerHTML= "<img id='image"+no+"' src='views/images/donation/"+response.image+"' width='100px' height='100px'>"
    td[3].innerHTML = response.montant;
    td[2].innerHTML= response.cree_a;
    td[1].innerHTML= response.motif;
    td[0].innerHTML= response.sujet;
   
  }
  else if(par1 == "blog"){
    td[3].innerHTML= "<img id='image"+no+"' src='views/images/Blogs/"+response.image+"' width='100px' height='100px'>"
    td[2].innerHTML = response.contain_2;
    td[1].innerHTML= response.contain_1;
    td[0].innerHTML= response.object;
  }
  else if(par1=="responsible"){
    td[1].innerHTML= "<img id='image"+no+"' src='views/images/responsibles/"+response.image+"' width='100px' height='100px'>"
    td[2].innerHTML = response.function;
    td[1].innerHTML= response.firstname_resp;
    td[0].innerHTML= response.name_resp;
  
  }
  else{
    td[3].innerHTML= "<img id='image"+no+"' src='views/images/Events/"+response.image+"' width='100px' height='100px'>"
    td[2].innerHTML= response.datetime_event;
    td[1].innerHTML= response.description_event;
    td[0].innerHTML= response.title_event;
    console.log(td[0]);
  }
}).catch(error => {alert(error);});
}



function edit_row(event, no, tdLength)
{
  event.preventDefault();
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
 document.getElementById("delete_button"+no).style.display="none";
 document.getElementById("cancel_button"+no).style.display="block";
 var td= document.getElementsByClassName("td"+no); 
 var row = document.getElementById('row'+no); 
 for(let k = 0; k<tdLength; k++){
 let val;
 val = td[k].innerHTML;
 if(k == 2){
   td[k].innerHTML = "<input type='datetime' class='iden"+no+"' width='130' value='"+val+"'>";
 }else if(k=== tdLength-1){
  var src = document.getElementById("image"+no+"").src;
   td[k].innerHTML = "<img id='blah"+no+"' style='display:block;' src='"+src+"'  width='100px' height='100px'><div><span class='btn btn-file btn-success'><span class='fileupload-new'>Selectioner image</span><input type='file' class='imgToEdit' name='image'  accept='.jpg, .jpeg, .gif, .png'    required id='img"+no+"' onchange='showPreview(event, "+no+");'></span></div>";
 }
 else{
  td[k].innerHTML="<input  type='text' class ='iden"+no+"' width='130' value='"+val+"'>";
 }
 }
 console.log('you can edit it');
}


 function save_row(event, no, par1, par2, tdLength)
{   
  event.preventDefault();
  var id = document.getElementById("id"+no).value;
  var data = new FormData();
   data.append('id', id);
 var val = document.getElementsByClassName("iden"+no) ; 
 console.log(val);
  var arrVal = []; 
  for(let l = 0; l<tdLength-1; l++){
   arrVal.push(val[l].value);
   data.append('val'+(l+1), val[l].value);
 ;}
 var srcNew = document.getElementById("blah"+no).src;
var fileArray = document.getElementById("img"+no).files;
 arrVal.push(srcNew);
if(fileArray.length > 0){
  var img = fileArray[0] ; 
 data.append('image', img);
 console.log("there is data content");
}
   else
    {
      var src =$("#blah"+no+"").attr('src'); //"images/banner/Penguins.jpg"
      var tarr = src.split('/');      //["images","banner","Penguins.jpg"]
      var file = tarr[tarr.length - 1]; //Penguins.jpg
      data.append('image', file);
      console.log(file);
    
    }
    uploadData("index.php?controller="+par1+"&task="+par2+"", data).then(response =>{ 
      console.log(response);
      if(response.success === true) { 
         var td =  document.getElementsByClassName("td"+no);
        for(let j = 0; j<tdLength; j++)
        { 
             if(j === tdLength-1)
             { 
                  console.log("im here eorzeoruizeurozeir oezurouezr");
                  td[j].innerHTML= "<img id='image"+no+"' src='"+arrVal[j]+"' width='100px' height='100px'>"
                  console.log(td[j]);
              } 
           else
           {
                td[j].innerHTML=arrVal[j];
                console.log(val[j]);
           }
      } 
      document.getElementById("edit_button"+no).style.display="block";
      document.getElementById("save_button"+no).style.display="none";
      document.getElementById("delete_button"+no).style.display="block";
      document.getElementById("cancel_button"+no).style.display="none";
} 
 else
{
  alert("error");
} 
  
  }).catch(error=>{
     document.getElementById('error_msg').innerHTML ="<div class='alert alert-danger' role='alert'>"+error.message+"</div>";
  });

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
function searchAny(){
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
}