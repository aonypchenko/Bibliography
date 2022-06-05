var ajax3 = new XMLHttpRequest();


function loadData3(){
    
    if(ajax3.readyState===4&&ajax3.status===200){
    console.dir(ajax3.response);
    let res=JSON.parse(ajax3.response);
    console.dir(res); 
    for(var i=0;i<res.length;i++){
        console.dir(res[i].password); 
    }
    document.location.href='../index.php'
    } 
}

function getThree(){
    ajax3.onreadystatechange = loadData3;
    var em = document.getElementById("floatingInput").value;
    //console.log(em);
    var ps = document.getElementById("floatingPassword").value;
    //console.log(ps);
  
    
    ajax3.open("POST","../sing_in/login-server.php");
    ajax3.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax3.send("email="+em);
}

