$(document).ready(function () {
    
    var newCount = 1;
    var newCount2 = 2;
    $('#btn').click(function () {
        newCount = newCount + 1;
        $('.show-content').load('load-events.php', {
            newCount: newCount
        });
    });

    $('#btnfunds').click(function () {
        newCount2 = newCount2 + 2;
        $('.show-funds-details').load('load-details.php', {
            newCount2: newCount2
        });
    });


});