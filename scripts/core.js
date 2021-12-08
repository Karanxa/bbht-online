document.getElementById('shell-form').onsubmit = function(e) {
    e.preventDefault();
    var program = document.getElementById('command-param').value;
    send_request();
}

function send_request() {

    var http = new XMLHttpRequest();
    var url = 'exec.php';
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {
        if (http.readyState == 4 && http.status == 200) {
            var response = http.responseText;
            console.warn(response);
            document.querySelector('.output').innerHTML = response;
        }
    }

    var program = document.getElementById('command-param').value;
    http.send("command" = program);
}