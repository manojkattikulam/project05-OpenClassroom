$(document).ready(function() {

    convertCurrency();


});

function convertCurrency() {

    endpoint = 'latest'
    access_key = 'e6677ffacf35cabf539a44f46d466ac8';

    let from = $('#from').val();
    let to = $('#to').val();

    // get the most recent exchange rates via the "latest" endpoint:
    $.ajax({
        url: 'https://data.fixer.io/api/' + endpoint + '?access_key=' + access_key,
        dataType: 'jsonp',
        success: function(json) {

            let oneUnit = json.rates[to] / json.rates[from];
            let amt = $('#fromAmount').val();
            $('#toAmount').val((oneUnit * amt).toFixed(2));




        }
    });




}