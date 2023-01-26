// öffnet das akkordeon beim Seitenaufbau > wenn Filter aus aktiv ist

$(document).ready(function() {
    let check = document.getElementById("toggler_more").querySelector('.active');
    if(check){
        $("#ui-id-1").click();
    }
});

let x = true;

$(document).ready(function() {
    $("#sub_toggler_more").click(function() {
        $("#ui-id-1").click().switch();
    });
});

$.fn.switch = function () {
    console.log('#################');

    if(x) {
        $("#plus-more").css("display", "none");
        $("#minus-more").css("display", "unset");
        x = false;
    } else {
        $("#plus-more").css("display", "unset");
        $("#minus-more").css("display", "none");
        x = true;
    }
};

