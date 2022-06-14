
//    var request=new XMLHttpRequest();

//    function loadData3(){
//     if(request.readyState===4&&request.status===200){
    
    
//     }
   
    
// }

   function clcVievButton(btn){
 
    var btn_id=btn.id;
    document.cookie = "singlePagePublicationId=" + btn_id;
    localStorage.setItem("idToGetType",btn_id);
    
    location.href='../php/publication-card.php';

}