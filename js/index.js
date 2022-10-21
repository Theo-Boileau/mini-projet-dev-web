(function () {
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()

$('.openSidebar').on('click', function(){
    document.getElementById("mySidebar").style.width = "300px";
})

$('.closeSidebar').on('click', function(){
    document.getElementById("mySidebar").style.width = "0";
})

$('.goToMainPage').on('click', function (){
    window.location.replace("http://localhost/mini-projet-dev-web/index.php");
})
