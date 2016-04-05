function showHost() {
    alert("Хост: " + location.host);
}

function showBrowser() {
    alert(navigator.userAgent);
}

function changeHeadSize() {
    if (document.body.h1.size.valueOf() === new String("10").valueOf()) {
        document.body.h1.size = "";
    } else {
        document.body.h1.size = "10";
    }
}
