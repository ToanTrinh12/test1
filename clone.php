<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="clone.css">
</head>
<body>
    <nav class="menu" id="menu_nav">
        <ul>
            <div class="logo">
                <img src="./picture/logo.jpg" alt="ảnh">
            </div>
            
            <div class="box">
                <li><a href="" class="nav-link"><img src="./picture/home1.jpg" alt="ảnh">HOME</a></li>
            </div>
            <div class="box">
                <li><a href="" class="nav-link-1"><img src="./picture/water.png" alt="ảnh">WATER</a>
                    <ul class="sub-menu">
                        <li><a href="" class="sub-m-1">VietNam</a></li>
                        <li><a href="" class="sub-m-1">Laos</a></li>
                        <li><a href="" class="sub-m-1">Cambodia</a></li>
                    </ul>
                </li>
            </div>
            <div class="box">
                <li><a href="" class="nav-link"><img src="./picture/blog.jpg" alt="ảnh">BLOG</a></li>
            </div>
            <div class="box">
                <li><a href="" class="nav-link"><img src="./picture/inquire.png" alt="ảnh">INQUIRE NOW</a></li>
            </div>
        </ul>
    </nav>
    <div class="picture-paddyfield">
        <div class="khoi_anh">
            <div class="anh hien">
                <img src="./picture/canhdong1.jpg">
            </div>
            <div class="anh">
                <img src="./picture/canhdong2.jpg">
            </div>
            <div class="anh">
                <img src="./picture/canhdong3.jpg">
            </div>
        </div>
    </div>
    <script>
        window.onscroll = function() {myFunction()};
        function myFunction() {
        if (document.documentElement.scrollTop >36) {
            document.getElementById("menu_nav").setAttribute('class','menu_scroll');
        } else {
            document.getElementById("menu_nav").setAttribute('class','menu');
        }
        }
    </script>
    <div>
        <
    </div>
</body>
</html>