
function lengthConverter(source, valNum) {

    valNum = parseFloat(valNum);
    var inputInches = document.getElementById("inputInches");
    var inputcm = document.getElementById("inputcm");

    if (source == "inputInches") {
        inputcm.value = (valNum / 0.39370).toFixed(2);
    }
    if (source == "inputcm") {
        inputInches.value = (valNum * 0.39370).toFixed(2);
    }
}


$(document).ready(function() {
    $('.nav-link').click(function() {
        var collapse3_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse3_content_selector).toggle(function() {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('Get converter');
            } else {
                toggle_switch.html('Hide converter');
            }
        });
    });

});
