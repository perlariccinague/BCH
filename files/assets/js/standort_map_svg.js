
const erfurt = document.getElementById('erfurt-url').innerHTML;
const hermsdorf = document.getElementById('hermsdorf-url').innerHTML;
const gera = document.getElementById('gera-url').innerHTML;

$(document).ready(function() {
    $("#erfurt-info").mouseenter(function() {
        $("#Erfurt").addClass("erfurt-hover");
    });

    $("#erfurt-info").mouseleave(function() {
        $("#Erfurt").removeClass("erfurt-hover");
    });

    $("#erfurt-info").click(function() {
        window.location.href = erfurt;
    });


    $("#hermsdorf-info").mouseenter(function() {
        $("#Hermsdorf").addClass("hermsdorf-hover");
    });

    $("#hermsdorf-info").mouseleave(function() {
        $("#Hermsdorf").removeClass("hermsdorf-hover");
    });

    $("#hermsdorf-info").click(function() {
        window.location.href = hermsdorf;
    });


    $("#gera-info").mouseenter(function() {
        $("#Gera").addClass("gera-hover");
    });

    $("#gera-info").mouseleave(function() {
        $("#Gera").removeClass("gera-hover");
    });

    $("#gera-info").click(function() {
        window.location.href = gera;
    });
});