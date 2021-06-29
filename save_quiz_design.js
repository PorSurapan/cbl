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

        if(text != '')
            alert('บันทึกคะแนนเรียบร้อย');
        else
            alert('ระบบเกิดข้อผิดพลาด โปรดติดต่อผู้ดูแล');
    }
}

function savePoint(id, point)
{
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var url = "save_design.php";
    url = url + "?id=" + id + "&point=" + point;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}