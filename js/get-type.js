var xhr=new XMLHttpRequest();

function request(){
    
    var idPubl=localStorage.getItem("idToGetType");
    xhr.onload=getResponce;

    xhr.open("POST","../php/get-type.php");
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send();
}

  function getResponce(){
    if(xhr.readyState===4&&xhr.status===200){
        //console.dir(ajax3.response);
        let res=JSON.parse(xhr.response);
        localStorage.setItem("type",res);
        location.href="../php/edit.php";
  }
}