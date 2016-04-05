function changeBckgColor() {
    if (document.body.style.background.valueOf() === new String("black").valueOf()) {
        document.body.style.background = "";
    } else {
        document.body.style.background = "black";
        alert("Darkness falls across the land...\nThe midnight hour is close at hand...");
    }
}

function showHost() {
    alert("Хост: " + location.host);
}

function showBrowser() {
    alert(navigator.userAgent);
}
