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

        if(user == "fails") {
            var x = document.getElementById("snackbar_fails");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        } else {
            var temp = new Array();
            temp = user.split("^");

            var id = temp[0];
            var username = temp[1];
            var name = temp[2];

            //alert(id + username + name);

            document.location = "/cbl/home/createSession.php/?id=" + id + "&username=" + username + "&name=" + name + "&edit=edit";
        }
    }
}

function saveEdit(uid, username, name, password)
{
    if(username == "" || name == "" || password == "") {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    } else {
        createXMLHttpRequest();
        xmlHttp.onreadystatechange = stateChange;
        var url = "editSave.php";
        url = url + "?id=" + uid + "&username=" + username + "&name=" + name + "&password=" + password;
        xmlHttp.open("GET", url, true);
        xmlHttp.send(null);
    }
}