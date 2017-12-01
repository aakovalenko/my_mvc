<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>
        Test ajax
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
         $("input").keyup(function () {
             var name = $("input").val();
             $.post("suggestions.php", {
                 suggestion: name
             }, function(data,status){
                 $("#test").html(data);
             });
         });

        });
    </script>
</head>
<body>

<input type="text" name="name">
<button>Click to get data</button>
<p id="test"></p>

</body>
</html>