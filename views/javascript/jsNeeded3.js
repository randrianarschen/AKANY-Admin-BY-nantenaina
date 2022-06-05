 function detectFileExt(event){
    if(event.target.files.length > 0){
        var file = event.target.files[0];
        var fileName =file.name;
        var fileExt =fileName.split('.').pop();
        var fileActExt = fileExt.toLowerCase();
        var allowedFileExtensions = ['doc','docx','pdf','txt','xls','xlsx','ppt','pptx','zip','rar','7z'];
        if(allowedFileExtensions.indexOf(fileActExt) != -1){     
     if(file.size <= 32000000 ){
         console.log('file is ok');
     }
        else{
            alert('File is too big');
           event.target.value = '';
        }
 }
else{
    alert('le type de votre fichier est non validé');
    event.target.value = '';
    return false;
}}}
console.log("not present");