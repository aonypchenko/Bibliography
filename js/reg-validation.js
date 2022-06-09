$("#registration").on("click", function(){
    var fname=$("#firstname").val().trim();
    var name=$("#name").val().trim();
    var patr=$("#patr").val().trim();
    var em=$("#floatingInput").val().trim();
    var pass=$("#floatingPassword").val().trim();

    if(fname==''){
        $("#errorFname").text("Введіть прізвище");
        return false;
    } 
    else if(name==""){
        $("#errorName").text("Введіть ім'я");
       // return false;
    } 
    else if(patr==""){
        $("#errorPatr").text("Введіть ім'я по батькові");
        return false;
    } 
    else if(em==""){
        $("#errorEmail").text("Введіть email");
        return false;
    } 
    else if(em.includes('@')==false){
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

    $.ajax({
        url: '../sign_in/registration-server.php',
        type: 'POST',
        cache: false,
        data: { 'firstname':fname,'namename':name,'patr':patr,'floatingInput':em,'floatingPassword':pass },
        dataType: 'html'
    });

   
    location.href='../php/index.php'
});

