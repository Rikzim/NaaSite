<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    .top-nav{
        display:none;
    }
    .tittle{
        font-size:150px;
    }
    .subtittle{
        font-size:55px;
    }
    .home-content{
        width: 200vh;
    }

    .a{
        height:100vh;
        display:flex;
        align-items:center;
    }
    h1, h2{
        margin:-28px;
        text-align:center;
    }
    .btn{
        display:flex;
        justify-content:center;
    }
</style>
<body>
    <div class="a">
        <div class="home-content">
            <h1 class="tittle">DASHBOARD</h1>
            <h2 class="subtittle">Administrator</h2>
            <br>
            <br>
            <div class="btn">
                <a class="button-4" href="<?= $this->Url->build('/News') ?>">Notícias </a>
            </div>
            <div class="btn">
                <a class="button-4" href="<?= $this->Url->build('/News') ?>">Notícias </a>
            </div>
        </div>
    </div>
    
</body>
</html>