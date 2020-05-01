<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="plugins/css/bootstrap.css">
</head>
<style>
    body {
        font-family: "微軟正黑體", sans-serif;
        text-align: center;
    }
</style>

<body>
<!-- 稍微加點bootstrap進去，先讓表單別太難看就好 -->
    <div class="container-fluid w-25 p-2 bg-info text-light border shadow rounded-pill">
        <h2>使用者登入</h2>
        <form class="form" action="logon.php" method="post">
            <div class="form-group">
                <label class="form" for="username">帳號：</label>
                <input class="form" type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label class="form" for="password">密碼：</label>
                <input class="form" type="password" name="password" id="password">
            </div>
            <div class="btn-group">
                <input class="btn btn-primary rounded-circle" type="submit" name="submit" value="登入">
                <input class="btn btn-secondary rounded-circle" type="reset" value="重置">
            </div>
        </form>
    </div>
</body>

</html>