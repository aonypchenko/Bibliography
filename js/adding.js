    document.getElementById("type_p").onchange = function() {add_type()};

    function add_type(){
    var x = document.getElementById("type_p").value;
    console.log(x);
    
   
    switch(x){
        case "Дисертація":
            topic("div-one");
            url_p("div-two");
            clean_html("div-three")
            break;
        case "Електронний ресурс":
            url_p("div-one");
            clean_html("div-two")
            clean_html("div-three")
            break;
        case "Книга":
            url_p("div-one");
            clean_html("div-two")
            clean_html("div-three")
            break;
        case "Методичні вказівки":
            discipline("div-one");
            url_p("div-two");
            clean_html("div-three")
            break;
        case "Монографія":
            topic("div-one");
            url_p("div-two");
            clean_html("div-three")
            break;
        case "Звіт":
            discipline("div-one");
            url_p("div-two");
            clean_html("div-three")
            break;
        case "Патент":
            patent_duration("div-one");
            url_p("div-two");
            clean_html("div-three")
            break;
        case "Практикум":
            discipline("div-one");
            cource("div-two");
            url_p("div-three");
            break;
        case "Стаття":
            url_p("div-one");
            clean_html("div-two")
            clean_html("div-three")
            break;
        case "Тези конференцій":
            conference("div-one");
            place_of_publication("div-two");
            url_p("div-three");
            break;
        case "Навчальний посібник":
            discipline("div-one");
            url_p("div-two");
            clean_html("div-three")
            break;
    }


    // $.ajax({
    //     url: '../sign_in/registration-server.php',
    //     type: 'POST',
    //     cache: false,
    //     data: { 'firstname':fname,'name':name,'patr':patr,'floatingInput':em,'floatingPassword':pass },
    //     dataType: 'html'
    // });

   
    // location.href='../php/index.php'
}

function topic(place){
    let element="";
    
    element+="<label for='topic_p' class='form-label'>Тема</label>"
    element+="<input type='text' class='form-control' id='topic_p'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
   
    document.getElementById(place).innerHTML=element;
}

function url_p(place){
    let element="";
    
    element+="<label for='url_p' class='form-label'>Посилання</label>"
    element+="<input type='text' class='form-control' id='url_p'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
  
    document.getElementById(place).innerHTML=element;
}

function discipline(place){
    let element="";
   
    element+="<label for='discipline' class='form-label'>Дисципліна</label>"
    element+="<input type='text' class='form-control' id='discipline'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
  
    document.getElementById(place).innerHTML=element;
}

function patent_duration(place){
    let element="";
    
    element+="<label for='patent_duration' class='form-label'>Термін дії патента</label>"
    element+="<input type='text' class='form-control' id='patent_duration'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
 
    document.getElementById(place).innerHTML=element;
}

function cource(place){
    let element="";
    
    element+="<label for='cource' class='form-label'>Курс</label>"
    element+="<input type='text' class='form-control' id='cource'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
   
    document.getElementById(place).innerHTML=element;
}

function conference(place){
    let element="";
    
    element+="<label for='conference' class='form-label'>Конференція</label>"
    element+="<input type='text' class='form-control' id='conference'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
  
    document.getElementById(place).innerHTML=element;
}

function place_of_publication(place){
    let element="";
  
    element+="<label for='place_of_publication' class='form-label'>Місце публікації</label>"
    element+="<input type='text' class='form-control' id='place_of_publication'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
   
    document.getElementById(place).innerHTML=element;
    
}

function clean_html(place){
    let element="";
    element+="";
    document.getElementById(place).innerHTML=element;
}