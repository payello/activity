var text = 
    {
    "currency": [
        {"country": "Australia", "short": "AUD", "long": "Australian Dollar"},
        {"country": "Bulgaria", "short": "BGN", "long": "Bulgarian Lev"},
        {"country": "Brazil", "short": "BRL", "long": "Brazilian Real"},
        {"country": "Canada", "short": "CAD", "long": "Canadian Dollar"},
        {"country": "Switzerland", "short": "CHF", "long": "Swiss Francs"},
        {"country": "China", "short": "CNY", "long": "Chinese Yuan"},
        {"country": "Czechia", "short": "CZK", "long": "Czech Koruna"},
        {"country": "Denmark", "short": "DKK", "long": "Danish Krone"},
        {"country": "EURO", "short": "EUR", "long": "EURO"},
        {"country": "United Kingdom", "short": "GBP", "long": "United Kingdom Pound"},
        {"country": "Hong Kong", "short": "HKD", "long": "Hong Kong Dollar"},
        {"country": "Croatia", "short": "HRK", "long": "Croatian Kuna"},
        {"country": "Hungary", "short": "HUF", "long": "Hungarian Forint"},
        {"country": "Indonesian", "short": "IDR", "long": "Indonesian Rupiah"},
        {"country": "Israel", "short": "ILS", "long": "Israeli New Shekel"},
        {"country": "India", "short": "INR", "long": "Indian Rupees"},
        {"country": "Japan", "short": "JPY", "long": "Japanese Yen"},
        {"country": "South Korea", "short": "KRW", "long": "South Korean Won"},
        {"country": "Mexico", "short": "MXN", "long": "Mexican Peso"},
        {"country": "Malaysia", "short": "MYR", "long": "Malaysian Ringgit"},
        {"country": "Norway", "short": "NOK", "long": "Norwegian Krone"},
        {"country": "New Zealand", "short": "NZD", "long": "New Zealand Dollar"},
        {"country": "Philippines", "short": "PHP", "long": "Philippino Peso"},
        {"country": "Poland", "short": "PLN", "long": "Polish Zloty"},
        {"country": "Romania", "short": "RON", "long": "Romanian Leu"},
        {"country": "Russia", "short": "RUB", "long": "Russian Rubles"},
        {"country": "Sweden", "short": "SEK", "long": "Swedish Krona"},
        {"country": "Singapore", "short": "SGD", "long": "Singaporean Dollar"},
        {"country": "Thailand", "short": "THB", "long": "Thai Baht"},
        {"country": "Turkey", "short": "TRY", "long": "Turkish Lira"},
        {"country": "USA", "short": "USD", "long": "US Dollars"},
        {"country": "South Africa", "short": "ZAR", "long": "South African Rand"}
    ]
}

function PrintResults(result) {

for (var i = 0; i < result.length; i++) { 
    alert(result.employeename);
}






//Object.keys(obj).forEach(function(key) {
//    console.log(key, obj[key]);
//});

//var output = document.getElementById('output');
//output.innerHTML = index.firstName + ' ' +jcontent.secondName;
//output.innerHTML = text.currency[0].long;

//document.getElementById("output").innerHTML = obj.currency[0].country + " " + obj.currency[0].long;
//console.log(text.currency[1].country);

//var output = document.getElementById('index')

//function populateSelectElement (element, array) {
//    var newElement,
//        i;
//    for(i = 0; i < array.length; i += 1) {
//        newElement = document.createElement('option');
//        newElement.textContent = optionArray[i];
//        element.appendChild(newElement);
//    }
//}
//populateSelectElement(selectElement, optionArray);
