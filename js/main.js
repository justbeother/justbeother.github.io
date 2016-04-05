function showHost() {
    alert("Хост: " + location.host;
}

function showBrowser() {
    alert(navigator.userAgent);
}

function changeHeadSize() {
    if (document.h1.size.valueOf() === new String("10").valueOf()) {
        document.h1.size = "";
    } else {
        document.h1.size = "10";
    }
}
