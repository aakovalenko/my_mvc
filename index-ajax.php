<!DOCTYPE html>
<html>
<head>
    <title>
        Ajax 1 - Text file
    </title>

</head>
<body>

<button id="btn">Get text file</button>
<br>
<br>
<div id="text"></div>
</body>
<script>
    //Create event listener
    document.getElementById('btn').addEventListener('click', loadText);

    function loadText() {
    // Create XHR Object
        var xhr = new XMLHttpRequest();
        // Open -type, url/file, async
       xhr.open('GET', 'text.txt', true);

       console.log('READYSTATE: ', xhr.readyState);

       // OPTIONAL -used for loaders
        xhr.onprogress = function(){
            console.log('READYSTATE: ', xhr.readyState);
        }


       xhr.onload = function(){
           if (this.status == 200){
               console.log(this.responseText);
               document.getElementById('text').innerHTML =
                   this.responseText;
           } else if(this.status = 400){
               document.getElementById('text').innerHTML = 'Not Found';
           }
       }

       xhr.onerror = function () {
           console.log('Request error...........');
       }

      xhr.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              console.log(this.responseText);
          }
      }

       //Sends request
       xhr.send();
    }
</script>
</html>