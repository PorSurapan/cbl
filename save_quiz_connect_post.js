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
        //alert(text);

        if(text == 'success') {
            var x = document.getElementById("snackbar_success");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        } else if(text == 'fails') {
            alert("ไม่สามารถบันทึกคะแนนได้ โปรดติดต่อผู้ดูแลระบบ")
        } else {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
            
    }
}

function savePoint(id, point)
{
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var url = "save_connect_post.php";
    url = url + "?id=" + id + "&point=" + point;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}