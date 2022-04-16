<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        data = {
            student:[
                {
                    name: 'test1',
                    score: {
                        math: 4,
                        english: 5,
                        science: 6
                    }
                },
                {
                    name: 'test2',
                    score:{
                        math: 7,
                        english: 8,
                        science: 9
                    }
                }
            ]
        };
        console.log(data.student[0].score.math);
    </script>
</head>
<body>
    
</body>
</html>