var myData = 'https://data.fixer.io/api/symbols?access_key=7d2b586eba3ddf4b5e4b3b338ad64f96';

var xhr = new XMLHttpRequest();
xhr.open('GET', myData, true);
xhr.send();

xhr.onload = function () {
    if (xhr.status == 200) {
        var longCountryData = JSON.parse(xhr.responseText);
        var longCountries = longCountryData.symbols;

        var myCountry = "";

        Object.keys(longCountries).forEach(function (e) {
            myCountry += "<p>" + longCountries[e] + "</p>";
        });

        // end of for loop
        document.getElementById('currencyList').innerHTML = myCountry;
    }
};

var myDataLatest = 'https://data.fixer.io/api/latest?access_key=7d2b586eba3ddf4b5e4b3b338ad64f96&base=EUR';

var xhrLatest = new XMLHttpRequest();
xhrLatest.open('GET', myDataLatest);
xhrLatest.responseText = 'text';
xhrLatest.send();

xhrLatest.onload = function () {
    if (xhrLatest.status == 200) {
        var currencyRateData = JSON.parse(xhrLatest.responseText);
        var currencyRates = currencyRateData.rates;
        var myRate = "";

        Object.keys(currencyRates).forEach(function (e) {
            myRate += "<p>" + currencyRates[e] + "</p>";
        });

        document.getElementById('long').innerHTML = myRate;
    }
};
