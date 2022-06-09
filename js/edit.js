function editInfo(){
    var type=document.getElementById('publ_type').value;
    var name=document.getElementById('publ_name');
    var date=document.getElementById('publ_date');
    var input=document.createElement('input');
    //.innerHTML=input;
    // console.log(input);
    let element="";
    element+="";
    document.getElementById("publ_type").innerHTML=element;
    document.getElementById("publ_type").appendChild(input);
}