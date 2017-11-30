<!DOCTYPE html>
<html>
<head>
    <title>
        Test ajax
    </title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(){
                $("#test").load("data.txt", {Name:"Daniel", LastName: "Nielsen"}, function () {
                    alert("Hi there!")
                });
            });

        });
    </script>
</head>
<body>
    <div id ="test">
        <p>This is the first content!</p>
    </div>
<button id="btn">Click to change</button>
</body>
</html>