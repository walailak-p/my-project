<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
                
            .content {
                text-align: center;
            }

            .img-logo {
                text-align: center;
                width: 25%;
                margin: 0.5em;
                padding: 0.5em;
            }

            .title {
                font-size: 80px;
            }

            .img {
                text-align: center;
                width: 80%;
                margin: 0.5em;
                padding: 0.5em;
            }

            .links > a {
                background-color: #FFCCFF;
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .form-inline my-2 my-lg-0 > input {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .btn btn-outline-success my-2 my-sm-0 > button {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

            .parallax4 {
                background-image: url("/images/maxresdefault.jpg");
                min-height: 200px;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .text-center {
                text-align: center;
            }

            .card-group {
                background-color: #FFCCFF;
                column-count: 3;
                margin: 0.5em;
                padding: 0.5em;
            }

            .card-img-top{
                text-align: center;
                width: 80%;
                margin: 0.5em;
                padding: 0.5em;
            }

            .card-columns{
                column-count: 1;
                margin: 0.5em;
                padding: 0.5em;
            }

            .card-body{
                background-color: #FFCCFF;
            }

            .blockquote mb-0{
                background-color: #FFCCFF;
                size:20;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   <img src="/img/max.jpg" class="img">
                </div>

                <div class="links form-inline my-2 my-lg-0">
                    <a href="/">หน้าแรก</a>
                    <a href="/">ผลงานของเรา</a>
                    <a href="/">แบบ้าน</a>
                    <a href="/">รู้จักกับทวีชัย</a>
                    <a href="/">คำถามที่พบบ่อย</a>
                    <a href="/">ติดต่อสอบถาม</a>
                    <a href="/">ร่วมงานกับเรา</a>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </div>
        </div>
        <div class="parallax4"></div>
                    <div class="text-center text-dark p-3"><h1>แบบบ้าน</h1></div>
                    <div class="p-3 bg-light text-white text-center">
                        <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="/img/113.jpg" alt="Card image cap">
                            <div class="card-body">
                            <div class="card-body"><a href="/">บ้านชั้นเดียว</a></div>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="/img/212.jpg" alt="Card image cap">
                            <div class="card-body">
                            <div class="card-body"><a href="/" class="btn btn-outline-success">บ้านชั้นครึ่ง</a></div>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="/img/217.jpg" alt="Card image cap">
                            <div class="card-body">
                            <div class="card-body"><a href="/" class="btn btn-outline-success">บ้านสองชั้น</a></div>
                            </div>
                        </div>
                        </div>
                        <hr width="50%" color="#333333" align="center">
                        <div class="bg-white text-dark text-center p-1"><a href="/" type="button" class="btn btn-outline-secondary">แบบบ้านทั้งหมด</a></div>
                        <hr width="75%" color="#333333" align="center">
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center text-dark p-2"><h1>ผลงานที่ผ่านมา</h1></div>
        <div class="p-3 bg-light text-white text-center">
        <div class="card-columns">
            <div class="card shadow">
            <a href="/"><img class="card-img-top" src="/img/1.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h5 class="text-secondary">บ้านคุณดาบ</h5>
                <p class="text-secondary">บ้านพักอาศัย 1 ชั้น คุณสุนิสา มุขขันธ์ อ.ศิลาลาด จ.ศรีสะเกษ</p>
            </div>
            </div>
            <div class="card shadow">
            <a href="/"><img class="card-img-top" src="/img/2.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h5 class="text-secondary">หมู่บ้าน พัสดา วิลเลจ</h5>
                <p class="text-secondary">โครงการ พัสดา วิลเลจ โครงการบ้านเดี่ยวชั้นเดียว บ้านเดี่ยวสองชั้น และทาวน์โฮมสองชั้น อ.ราษีไศล จ.ศรีสะเกษ</p>
            </div>
            </div>
            <div class="card shadow">
            <a href="/"><img class="card-img-top" src="/img/3.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h5 class="text-secondary">บ้านคุณแหม่ม</h5>
                <p class="text-secondary">บ้านพักอาศัยสองชั้น คุณปวริศา ใสกระจ่าง อ.วังหิน จ.ศรีสะเกษ</p>
            </div>
            <div class="card bg-light text-white text-center p-3 shadow">
            <blockquote class="blockquote mb-0">
            <p class="text-secondary">ผลงานของเราทั้งหมด</p>
            </blockquote>
            </div>
            </div>
    </body>
</html>
