function showHost() {
    alert("Хост: " + location.host);
}

function showBrowser() {
    alert(navigator.userAgent);
}

function changeHeadSize() {
    if (document.body.h1.color.valueOf() === new String("red").valueOf()) {
        document.body.h1.size = "";
    } else {
        document.body.h1.color = "red";
    }
}
