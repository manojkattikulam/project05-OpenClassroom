$('#searchCity').keyup(function() {
    var searchCont = $('#continent').val();
    var searchCity = $('#searchCity').val();

    $.ajax({

        url: "Client_Dashbd/processSearchAjax",
        data: { getCont: searchCont, getCity: searchCity },
        type: 'POST',
        success: function(result) {
            if (!result.error) {
                $('#searchResults').html(result);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Error...");
        }

    });
});