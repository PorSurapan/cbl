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

function editAJAX(id, fname, lname, adr, dob)
{
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var url = "save_edit_ajax.php";
    url = url + "?id=" + id + "&firstName=" + fname + "&lastName=" + lname + "&address=" + adr + "&birthDay=" + dob;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}