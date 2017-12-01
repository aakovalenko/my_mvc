<!DOCTYPE html>
<html>
<head>
    <title>External API</title>

</head>
<body>

<button id="button">Load GitHub Users</button>
<br>
<h1>Github Users</h1>
<div id="users"></div>
<script>
    document.getElementById('button').addEventListener('click',
loadUsers);

    //Load GitHub Users

    function loadUsers(){
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'https://api.github.com/users', true);

        xhr.onload = function() {
            if (this.status == 200) {
                var users = JSON.parse(this.responseText);

                var output = '';
                for (var i in users) {
                    output +=
                        '<div class="user">' +
                        '<img src="'+users[i].avatar_url+'" width="70"
                        height="70">' +
                            '<ul>' +
                                '<li>ID: '+users[i].id+'</li>' +
                    '<li>Login: '+users[i].login+'</li>' +
                                '</ul>' +
                                '</div>'
                }
                document.getElementById('users').innerHTML = output;
            }
        }
        xhr.send();
    }

</script>

</body>
</html>