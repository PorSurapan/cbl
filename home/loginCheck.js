var xmlHttp;

function createXMLHttpRequest() {
    if (window.ActiveXObject)
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    else
        xmlHttp = new XMLHttpRequest();
}

function stateChange() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        var user = xmlHttp.responseText;
        //alert(user);

        if(user == "")
        {
            //alert('fails');
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
        else
        {
            var temp = new Array();
            temp = user.split("^");

            var id = temp[0];
            var username = temp[1];
            var name = temp[2];

            //alert(id + username + name);

            document.location = "createSession.php/?id=" + id + "&username=" + username + "&name=" + name + "&edit=null";
        }
    }
}

function loginCheck(usn, pwd)
{
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var url = "check_login.php";
    url = url + "?username=" + usn + "&password=" + pwd;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}