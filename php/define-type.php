<?php
    function def_type($type){
    switch($type){
        case 'Дисертація':
            return "dissertation";
        break;
        case 'Електронний ресурс':
            return "eresource";
        break;
        case 'Книга':
            return "book";
        break;
        case 'Методичні вказівки':
            return "guidelines";
        break;
        case 'Монографія':
            return "monograph";
        break;
        case 'Звіт':
            return "report";
        break;
        case 'Патент':
            return "patent";
        break;
        case 'Практикум':
            return "workshop";
        break;
        case 'Стаття':
            return "article";
        break;
        case 'Тези конференцій':
            return "conference_abstracts";
        break;
        case 'Навчальний посібник':
            return "tutorial";
        break;
    }
}
?>