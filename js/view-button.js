
   var request=new XMLHttpRequest();

   function loadData3(){
    if(request.readyState===4&&request.status===200){
    
    // let res=JSON.parse(request.response);
    // console.log(res);
    // let result=""; 
    // for(var i=0;i<res.length;i++){
    //     result+=res[i].publ_name;
    // }
    // $("#publication-name").text(result);
    }
    
    //location.href='../php/publication-card.php';
    
}

   function clcVievButton(btn){
 
    var btn_id=btn.id;
    document.cookie = "singlePagePublicationId=" + btn_id;

    //console.log(vb);
    request.onload=loadData3;
    request.open("POST","../php/publication-card.php");
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    location.href='../php/publication-card.php';

}