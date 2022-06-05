document.querySelector('#logout').onclick=function(){
    var c=document.cookie;
    console.log(c);
    var date=new Date();
    date.setTime(date.getTime()-(10*60*1000));
    var expires=date.toUTCString();
    document.cookie=`${c}; expires=${expires}; path=/`;
    // location.reload();
    location.href="index.php";
}