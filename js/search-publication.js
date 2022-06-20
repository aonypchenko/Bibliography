$('#search').on('click', function(){
    searchPublication();
});
   
 

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
        alert("Публікацію не знайдено!")
        location.reload();
      },
    cache: false,
    data: { 'publicationType':publicationType,'publicationName':publicationName,'publicationDate':publicationDate},
    dataType: 'json'
    }); 
    location.href='../php/result-search.php';
  }
}
    

