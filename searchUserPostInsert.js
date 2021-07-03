var xmlHttp;

function createXMLHttpRequest() {
    if (window.ActiveXObject)
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    else
        xmlHttp = new XMLHttpRequest();
}

function stateChange() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        var allText = xmlHttp.responseText;
        
        //alert(allText);
        var temp = new Array();
        temp = allText.split("^");

        var options = '';
        for (var i = 0; i < temp.length; i++) {
            options += '<option value="' + temp[i] + '" />';
        }

        document.getElementById('word').innerHTML = options;
    }
}

function searchUserPostInsert(str)
{
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var url = "userPostInsertSearch.php";
    url = url + "?word=" + str;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}