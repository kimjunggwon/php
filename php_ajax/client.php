<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function emailCheck(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    result = JSON.parse(this.responseText).result;
                    if(result == 'none'){
                        document.getElementById('status').innerText = '사용 가능';
                    }else{
                        document.getElementById('status').innerText = '사용 불가';
                    }
                }
            };
            emailAddress = document.getElementById('emailAddress').value;

            xhttp.open("POST", './server.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("email="+emailAddress);
        }
    </script>
</head>
<body>
    <input type="email" id="emailAddress">
    <input type="button" value="중복 확인" onclick="emailCheck()">
    <p id="status"></p>
</body>
</html>