$("#login").on("click", function(){
   
    var email=$("#floatingInput").val().trim();
    var pass=$("#floatingPassword").val().trim();

    if(email==""){
        $("#errorEmail").text("Введіть email");
        return false;
    } 
    else if(email.includes('@')==false){
        $("#errorEmail").text("Пошта повинна містити @");
        return false;
    }
    else if(pass==""){
        $("#errorPass").text("Введіть пароль");
        return false;
    }
    else if(pass.length<6||pass.length>12){
        $("#errorPass").text("Пароль повинен бути від 6 до 12 символів");
        return false;
    }    
});
