var xmlHttp;

    function createXMLHttpRequest() {
        if (window.ActiveXObject)
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
     else
            xmlHttp=new XMLHttpRequest();
} 

    function stateChange() {
        if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
        document.getElementById('name').innerHTML = xmlHttp.responseText;
        }
    } 

    function searchName(str){
        createXMLHttpRequest();
        xmlHttp.onreadystatechange = stateChange;
        var url = "name.php";
        url = url + "?firstname=" + str;
        xmlHttp.open("GET",url,true);
        xmlHttp.send(null);
} 