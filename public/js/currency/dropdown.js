function convert() {
    //dropdown box getting their value from ID
    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;
    // AJAX API to request data.
    var xmlhttp = new XMLHttpRequest();
    // FOREX API address
    var url = "https://data.fixer.io/api/latest?access_key=7d2b586eba3ddf4b5e4b3b338ad64f96&base=" + from + "&symbols=" + to;

    //get request to server. true = Asynchronous
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    xmlhttp.onreadystatechange = function () {
        // ajax server
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
            //convert json data to JS
            var jsResult = JSON.parse(result);
            //calc the return between 2 forex rates
            var arrRates = Object.keys(jsResult.rates);
            var toCurrencyCode = arrRates[0];
            var oneUnit = jsResult.rates[toCurrencyCode];

            // get the value inputted in the valid text box.
            var amount = document.getElementById("fromCurrency").value;
            // calc the inputted box to the 'To' box
            document.getElementById("toCurrency").value = (oneUnit * amount).toFixed(2);
        }
    }
}
