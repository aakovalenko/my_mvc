<!DOCTYPE html>
<html>
<head>
    <title>Local JSON</title>

</head>
<body>

<button id="btn1">Get user</button>
<button id="btn2">Get users</button>
<br>
<br>
<h1>User</h1>
<div id="user"></div>
<h1>Users</h1>
<div id="users"></div>

<hr>

<script>
    document.getElementById('btn1').addEventListener('click',loadUser);

    function loadUser(){
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'user.json', true);

        xhr.onload = function () {
            if (this.status == 200){
                var user = JSON.parse(this.responseText);

                var output = '';
                output += '<ul>' +
                    '<li>ID: '+user.id+'</li>' +
                    '<li>Name: '+user.name+'</li>' +
                    '<li>Email: '+user.email+'</li>'+
                    '</ul>';
                document.getElementById('user').innerHTML = output;
            }
        }

        xhr.send();
    }
</script>

</body>

</html>