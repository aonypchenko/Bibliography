document.getElementById("type_p").onchange = function() {add_type()};

function add_type(){
    var x = document.getElementById("type_p").value;
    
    switch(x){
        case "Дисертація":
            topic("div-two");
            level("div-three");
            clean_html("div-four");
            break;
        case "Електронний ресурс":
            clean_html("div-two")
            clean_html("div-three")
            break;
        case "Книга":
            printed_version("div-two")
            clean_html("div-three")
            break;
        case "Методичні вказівки":
            discipline("div-two");
            clean_html("div-three")
            break;
        case "Монографія":
            topic("div-two");
            clean_html("div-three")
            break;
        case "Звіт":
            discipline("div-two");
            clean_html("div-three")
            break;
        case "Патент":
            patent_duration("div-two");
            clean_html("div-three")
            break;
        case "Практикум":
            discipline("div-three");
            cource("div-two");
            break;
        case "Стаття":
            clean_html("div-two")
            clean_html("div-three")
            break;
        case "Тези конференцій":
            conference("div-two","div-four");
            place_of_publication("div-three");
            break;
        case "Навчальний посібник":
            discipline("div-two");
            clean_html("div-three")
            break;
    }
}


    $('#search').on('click', function(){
        searchPublication();
    });
   
    

function topic(place1,place2){
    let element="";
    
    element+="<label for='topic_p' class='form-label'>Тема</label>"
    element+="<input type='text' class='form-control' id='topic_p'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
    document.getElementById(place1).innerHTML=element;
}
function level(place2){ 
    let element2="";
    
    element2+="<label for='topic_p' class='form-label'>Рівень</label>"
    element2+="<input type='text' class='form-control' id='levelDis'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
   
    document.getElementById(place2).innerHTML=element2;
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

function conference(place1,place2){
    let element="";
    element+="<label for='conference' class='form-label'>Конференція</label>"
    element+="<input type='text' class='form-control' id='conference'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
    document.getElementById(place1).innerHTML=element;

    let element2="";
    element2+="<label for='conference' class='form-label'>Дата конференції</label>"
    element2+="<input type='text' class='form-control' id='conferenceDate'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
    document.getElementById(place2).innerHTML=element2;

}

function place_of_publication(place){
    let element="";
  
    element+="<label for='place_of_publication' class='form-label'>Місце публікації</label>"
    element+="<input type='text' class='form-control' id='placeOfConference'>"
    element+="<div class='invalid-feedback'>"
    element+="Valid last name is required."
    element+="</div>"
   
    document.getElementById(place).innerHTML=element;
    
}

function printed_version(place){
    let element="";
    
    element+="<label for='cource' class='form-label'>Друкована версія</label>"
    element+="<input type='text' class='form-control' id='printedVersion'>"
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

function searchPublication(){
        
    var x = document.getElementById("type_p").value;
    switch(x){
        case "Дисертація":
            var topic = document.getElementById("topic_p")
            var level = document.getElementById("levelDis")
            var topicValue = null;
            var levelValue = null;
            if(topic != null && level != null){
                topicValue = topic.value;
                levelValue = level.value;
               
            }
            if(topicValue==""||levelValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(topicValue,levelValue,null)
            }
            break;
        case "Електронний ресурс":
            request(null,null,null)
            break;
        case "Книга":
            printedVersion = document.getElementById("printedVersion")
            var printedVersionValue=null
            if(printedVersion!=null){
                printedVersionValue=printedVersion.value
            }
            if(printedVersionValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(printedVersionValue,null,null)
            }
            break;
        case "Методичні вказівки":
            discipline = document.getElementById("discipline")
            var disciplineValue=null
            if(discipline!=null){
                disciplineValue=discipline.value
            }
            if(disciplineValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(disciplineValue,null,null)
            }
            break;
        case "Монографія":
            topic = document.getElementById("topic_p")
            var topicValue=null
            if(topic!=null){
                topicValue=topic.value
            }
            if(topicValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(topicValue,null,null)
            }
            break;
        case "Звіт":
            discipline = document.getElementById("discipline")
            var disciplineValue=null
            if(discipline!=null){
                disciplineValue=discipline.value
            }
            if(disciplineValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(disciplineValue,null,null)
            }
            break;
        case "Патент":
            patentDuration = document.getElementById("patent_duration")
            var patentDurationValue=null
            if(patentDuration!=null){
                patentDurationValue=patentDuration.value
            }
            if(patentDurationValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(patentDurationValue,null,null)
            }
            break;
        case "Практикум":
            discipline = document.getElementById("discipline")
            cource = document.getElementById("cource")
            var disciplineValue=null
            var courceValue=null
            if(discipline!=null&&cource!=null){
                disciplineValue=discipline.value
                courceValue=cource.value
            }
            if(disciplineValue==""||courceValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(disciplineValue,courceValue,null)
            }
            break;
        case "Стаття":
            request(null,null,null)
            break;
        case "Тези конференцій":
            var conference = document.getElementById("conference")
            var conferenceDate = document.getElementById("conferenceDate")
            var placeOfConference = document.getElementById("placeOfConference")
            var conferenceValue = null;
            var conferenceDateValue = null;
            var placeOfConferenceValue = null;
            if(conference != null && conferenceDate != null && placeOfConference != null){
                conferenceValue = conference.value;
                conferenceDateValue = conferenceDate.value;
                placeOfConferenceValue = placeOfConference.value;
            }
            if(conferenceValue==""||conferenceDateValue==""||placeOfConferenceValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(conferenceValue,conferenceDateValue,placeOfConferenceValue)
            }
            break;
        case "Навчальний посібник":
            discipline = document.getElementById("discipline")
            var disciplineValue=null
            if(discipline!=null){
                disciplineValue=discipline.value
            }
            if(disciplineValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(disciplineValue,null,null)
            }
            break;
    }
}
function request(value1,value2,value3){
    var publicationType = document.getElementById("type_p").value;
    var publicationName = document.getElementById("Name").value;
    var publicationDate = document.getElementById("date_input").value;
    if(publicationType==""||publicationName==""||publicationDate==""){
        alert('Поля "Тип","Назва","Дата" повинні бути заповненими!')
    } else{
       // console.log(value1,value2,value3)
        
    $.ajax({
    url: '../php/search-server.php',
    type: 'POST',
    success : function (result) {
        console.log (result);
      },
      error : function (result) {
        console.log (result);
      },
    cache: false,
    data: { 'publicationType':publicationType,'publicationName':publicationName,'publicationDate':publicationDate,'valueFirstField':value1,'valueSecongField':value2,'valueThirdField':value3},
    dataType: 'json'
    }); 
    location.href='../php/result-search.php';
  }
}
    

