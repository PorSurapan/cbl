var xmlHttp;

function createXMLHttpRequest() {
    if (window.ActiveXObject)
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    else
        xmlHttp = new XMLHttpRequest();
}

function stateChange() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        var text = xmlHttp.responseText;
        alert(text);
    }
}

function insertAJAX(fname, lname, adr, dob)
{
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var url = "insert_ajax.php";
    url = url + "?firstName=" + fname + "&lastName=" + lname + "&address=" + adr + "&birthDay=" + dob;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}