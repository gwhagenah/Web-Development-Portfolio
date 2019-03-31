

window.onload = copyrightYear();

//Set Date to Current Year
function copyrightYear() {
    var year = new Date().getFullYear();
    document.getElementById("year").innerHTML = year;
}
