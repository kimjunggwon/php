<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="db_action.php" name="test" method="post">
        <input type="text" name="userid" placeholder="아이디 입력" required>
        <br>
        <input type="text" name="username" placeholder="이름 입력" required>
        <br>
        <input type="password" name="userpw" placeholder="비밀번호 입력" required>
        <br>
        <input type="email" name="useremail" placeholder="이메일 입력" required>
        <br>
        생일 : <br>
        <select name="birthyear" required>
        <?php
            $thisYear = date('Y', time());
            for($i = 1960; $i <= $thisYear; $i++){
                echo "<option value='{$i}'>{$i}</option>";
            }
        ?>
        </select>년
        <select name="birthmonth">
        <?php
            for($i = 1; $i <= 12; $i++){
                echo "<option value='{$i}'>{$i}</option>";
            }
        ?>
        </select>월
        <select name="birthday">
        <?php
            for($i = 1; $i <= 31; $i++){
                echo "<option value='{$i}'>{$i}</option>";
            }
        ?>
        </select>일
        <br>
        성별 : <br>
        남<input type="radio" name="usergender" value="m" required>
        여<input type="radio" name="usergender" value="w" required>
        <br>
        <input type="submit" value="입력">
    </form>
</body>
</html>