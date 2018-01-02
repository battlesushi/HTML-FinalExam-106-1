<?php
session_start();
include("fun.inc.php");
include("db_connect.php");
if ($_SESSION['account'] != null) {
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_SESSION['account'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM profile where username='$id'";
    $result = mysqli_query($link,$sql);
    $row = @mysqli_fetch_row($result);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>莊政宏</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php head() ?>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 500px;
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">莊政宏</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php navbar(0) ?>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-12 text-left">
            <span style="color: #ffffff; font-size: 1.5em; background-color: black">編輯個人資料</span>
            <form id="form" method="post" action="register_finish.php">
                <b>
                        <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        姓名：</span>&nbsp;<input type="text" name="author"/> <br>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        職稱：</span>&nbsp;<input type="password" name="title"/> <br>
                    <hr>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        居住地</span>&nbsp;<input type="password" name="publisher"/> <br>
                    <hr>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        E-mail：</span><input type="text" name="email"/> <br>
                    <span style="color: #ffffff; font-size: 1.5em; background-color: black">
                        Phone：</span>&nbsp;<input type="text" name="phone"/> <br>
                    <hr>
                </b>
                <b style="color: #ffffff;font-size: 1.5em"><input type="submit" name="button" value="更新/Update"style="background-color: black"/></b>
                <br>
                <br>
                <b style="color: #ffffff;font-size: 1.5em"><input type="button" onclick="reSet()" value="清空"style="background-color: black"/></b>
            </form>
        </div>
    </div>
</div>
<?php footer() ?>

</body>
</html>

    <?php
} else {
    echo "您無權限觀看此頁面!";
    echo '<br>';
    echo "ㄏㄡˊ 抓到";
    echo '<br>';
    echo "你想做什麼";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=indexT.php>';
}
?>