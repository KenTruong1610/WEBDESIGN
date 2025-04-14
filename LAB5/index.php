<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sản phẩm</title>
    <style>
        body { margin: 0; }
        #container { width: 1000px; margin: auto; }
        #banner { height: 150px; background-color: #39C; }
        #menu { height: 30px; background-color: red; }
        #lmenu {
            width: 200px;
            background-color: #FC6;
            float: left;
            padding: 10px;
            height: 100%;
            
        }
        #lmenu ul {
            list-style-type: none;
            padding: 0;
        }
        #lmenu li {
            margin-bottom: 5px;
        }
        #lmenu a {
            text-decoration: none;
            color: #633;
        }
        #content {
            width: 780px;
            float: right;
            padding: 10px;
            background-color: #9F3;
            min-height: 400px;
            position: relative;
            bottom: 141px;
        }
        #footer {
            clear: both;
            height: 200px;
            position: relative;
            bottom: 160px;
            background-color: #096;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="banner"></div>
        <div id="menu"></div>
        <div id="lmenu"><?php include "lmenu.php"; ?></div>
        <div id="content"><?php include "content.php"; ?></div>
        <div id="footer"></div>
        <div id="footer">
            &copy; 2025 Danh mục sản phẩm. All rights reserved.
        </div>
    </div>
</body>
</html>
