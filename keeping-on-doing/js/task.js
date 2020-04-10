var xmlHTTP;

function $_xmlHttpRequest() {
    if (window.ActiveXObject) {
        xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");
    } else if (window.XMLHttpRequest) {
        xmlHTTP = new XMLHttpRequest();
    }
}

function task(action, uid, tname) {    
    $_xmlHttpRequest();
    xmlHTTP.open("GET", "../task/taskop.php?action=" + action + "&uid=" + uid + "&tname=" + tname, true);
    // xmlHTTP.onreadystatechange = function check_user() {
    //     if (xmlHTTP.readyState == 4) {
    //         if (xmlHTTP.status == 200) {
    //             if (action == "delete") {
    //                 location.reload();
    //             }
    //         }
    //     }
    // }
    // if (action=="delete") {
    //     if (confirm("Sure to delete?")) {
    //         xmlHTTP.send();
    //     }
    // } else {
    //     xmlHTTP.send();
    //     location.reload();
    // }
    xmlHTTP.send();
    location.reload();
}