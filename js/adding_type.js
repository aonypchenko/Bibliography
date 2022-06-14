document.getElementById("type_p").onchange = function() {add_type()};

function add_type(){
    var x = document.getElementById("type_p").value;
    
    switch(x){
        case "Дисертація":
            topic("div-two");
            level("div-three");
            clean_html("div-four");
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Електронний ресурс":
            clean_html("div-two")
            clean_html("div-three")
            clean_html("div-four")
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Книга":
            printed_version("div-two")
            numberOfPages("div-three")
            publishingYear("div-four")
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Методичні вказівки":
            discipline("div-two");
            clean_html("div-three")
            clean_html("div-four")
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Монографія":
            topic("div-two");
            clean_html("div-three")
            clean_html("div-four")
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Звіт":
            discipline("div-two");
            clean_html("div-three")
            clean_html("div-four")
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Патент":
            patent_duration("div-two");
            patentNumber("div-three");
            country("div-four");
            patentHolderNumber("div-fifth");
            dateOfApplication("div-sixth");
            bulletinNumber("div-seventh");
            break;
        case "Практикум":
            discipline("div-three");
            cource("div-two");
            clean_html("div-four")
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Стаття":
            place_of_publication("div-two")
            publishingYear("div-three")
            clean_html("div-four")
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Тези конференцій":
            conference("div-two","div-four");
            place_of_publication("div-three");
            city("div-fifth");
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
        case "Навчальний посібник":
            discipline("div-two");
            clean_html("div-three")
            clean_html("div-four")
            clean_html("div-fifth")
            clean_html("div-sixth")
            clean_html("div-seventh")
            break;
    }
}


    $('#save').on('click', function(){
        addToDB();
    });
   
    
function numberOfPages(place2){ 
    let element2="";
    
    element2+="<label for='topic_p' class='form-label'>Кількість сторінок</label>"
    element2+="<input type='text' class='form-control' id='numberOfPages'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
    
    document.getElementById(place2).innerHTML=element2;
}

function publishingYear(place2){ 
    let element2="";
    
    element2+="<label for='topic_p' class='form-label'>Рік видавництва</label>"
    element2+="<input type='text' class='form-control' id='publishingYear'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
    
    document.getElementById(place2).innerHTML=element2;
}

function patentNumber(place2){ 
    let element2="";
    
    element2+="<label for='topic_p' class='form-label'>Номер патенту</label>"
    element2+="<input type='text' class='form-control' id='patentNumber'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
    
    document.getElementById(place2).innerHTML=element2;
}

function country(place2){ 
    let element2="";
    
    element2+="<label for='topic_p' class='form-label'>Країна</label>"
    element2+="<input type='text' class='form-control' id='country'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
    
    document.getElementById(place2).innerHTML=element2;
}

function patentHolderNumber(place2){ 
    let element2="";
    
    element2+="<label for='topic_p' class='form-label'>Патентовласник №</label>"
    element2+="<input type='text' class='form-control' id='patentHolderNumber'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
    
    document.getElementById(place2).innerHTML=element2;
}

function dateOfApplication(place2){ 
    let element2="";
    element2+="<form>"
    element2+="<div class='form-group'>"
    element2+="<label for='inputDate' class='form-label'>Дата заяви</label>"
    element2+="<input type='date' class='form-control' id='dateOfApplication'>"
    element2+="</div>"
    element2+="</form>"
    
    document.getElementById(place2).innerHTML=element2;
}

function bulletinNumber(place2){ 
    let element2="";
    
    element2+="<label for='topic_p' class='form-label'>Номер бюлетеня</label>"
    element2+="<input type='text' class='form-control' id='bulletinNumber'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
    
    document.getElementById(place2).innerHTML=element2;
}

function city(place2){ 
    let element2="";
    
    element2+="<label for='topic_p' class='form-label'>Місто</label>"
    element2+="<input type='text' class='form-control' id='city'>"
    element2+="<div class='invalid-feedback'>"
    element2+="Valid last name is required."
    element2+="</div>"
    
    document.getElementById(place2).innerHTML=element2;
}

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
    element2+="<input type='date' class='form-control' id='conferenceDate'>"
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

function addToDB(){
        
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
            printedVersion = document.getElementById("printedVersion");
            numberOfPages=document.getElementById("numberOfPages");
          
            var printedVersionValue=null
            var numberOfPagesValue=null
            
            if(printedVersion!=null && numberOfPages!=null ){
                printedVersionValue=printedVersion.value
                numberOfPagesValue=numberOfPages.value
                publishingYearValue=publishingYear.value
            }
            if(printedVersionValue==""||numberOfPagesValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(printedVersionValue,numberOfPagesValue)
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
            patentDuration = document.getElementById("patent_duration");
            patentNumber = document.getElementById("patentNumber");
            country = document.getElementById("country");
            patentHolder = document.getElementById("patentHolderNumber");
            dateApplication = document.getElementById("dateOfApplication");
            bulletinNumber = document.getElementById("bulletinNumber");
            var patentDurationValue=null;
            var patentNumberValue=null;
            var countryValue=null;
            var patentHolderValue=null;
            var dateApplicationValue=null;
            var bulletinNumberValue=null;
            if(patentDuration!=null&&patentNumber!=null&&country!=null&&patentHolder!=null&&dateApplication!=null&&bulletinNumber!=null){
                patentDurationValue=patentDuration.value
                patentNumberValue=patentNumber.value
                countryValue=country.value
                patentHolderValue=patentHolder.value
                dateApplicationValue=dateApplication.value
                bulletinNumberValue=bulletinNumber.value
            }
            if(patentDurationValue==""||patentNumber==""||country==""||patentHolder==""||dateApplication==""||bulletinNumber==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(patentDurationValue,patentNumberValue,countryValue,patentHolderValue,dateApplicationValue,bulletinNumberValue)
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
            place_of_publication = document.getElementById("placeOfConference");
            publishingYear=document.getElementById("publishingYear");
          
            var place_of_publicationValue=null
            var publishingYearValue=null
            
            if(place_of_publication!=null && publishingYear!=null ){
                place_of_publicationValue=place_of_publication.value
                publishingYearValue=publishingYear.value
            }
            if(place_of_publicationValue==""||publishingYearValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(place_of_publicationValue,publishingYearValue)
            }
            break;
        case "Тези конференцій":
            var conference = document.getElementById("conference")
            var conferenceDate = document.getElementById("conferenceDate")
            var placeOfConference = document.getElementById("placeOfConference")
            var city = document.getElementById("city")
            var conferenceValue = null;
            var conferenceDateValue = null;
            var placeOfConferenceValue = null;
            var cityValue = null;
            if(conference != null && conferenceDate != null && placeOfConference != null && city != null){
                conferenceValue = conference.value;
                conferenceDateValue = conferenceDate.value;
                placeOfConferenceValue = placeOfConference.value;
                cityValue = city.value;
            }
            if(conferenceValue==""||conferenceDateValue==""||placeOfConferenceValue==""||cityValue==""){
                alert('Всі поля повинні бути заповненими!')
            } else{
            request(conferenceValue,conferenceDateValue,placeOfConferenceValue,cityValue)
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
function request(value1,value2,value3,value4,value5,value6){
    var publicationType = document.getElementById("type_p").value;
    var publicationName = document.getElementById("Name").value;
    var publicationDate = document.getElementById("date_input").value;
    var url = document.getElementById("url_p").value;
    if(publicationType==""||publicationName==""||publicationDate==""){
        alert('Всі поля повинні бути заповненими!')
    } else{
    $.ajax({
    url: '../php/add-server.php',
    type: 'POST',
    success : function (result) {
        console.log ('success');
      },
      error : function (result) {
        console.log (result);
      },
    cache: false,
    data: { 'publicationType':publicationType,'publicationName':publicationName,'publicationDate':publicationDate,'url_p':url,'valueFirstField':value1,'valueSecondField':value2,'valueThirdField':value3,'valueFourtField':value4,'valueFifthField':value5,'valueSixthField':value6},
    dataType: 'json'
    }); 
    alert("Публікацію успішно додано!")
    location.reload()
    //console.log(value1,value2,value3,value4,value5,value6);
    
  }

}
    

