<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
                data = JSON.parse(this.responseText);
                console.log(data.student);
            }
        };
        xhttp.open("POST", "http://localhost/php_json/json2.php", true);
        xhttp.send();
    </script>
</head>
<body>
    
</body>
</html>