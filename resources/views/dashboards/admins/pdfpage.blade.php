<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
    /* *{
        margin: 0;
        padding: 0;
    } */
    body{
        border: 2px double black;
    }
    /* #container{
        width: 960px;
        margin: 0 auto;
        border: 1px solid red;
        height: 1024px;
    } */
    #sarlavha{
        color: blue;
        text-transform: uppercase;
        text-align: center;
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
    }
     #xizmat_text{
            
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: 16px;
        color: black;
        font-weight: 900;
        line-height: -10px;
    }
    .chiziq{
        line-height: -10px;   
        text-align: center;
        border: 0.5px solid black;
        width: 95%;
    }
    .pastki_text{
        text-align: center;
        line-height: -10px;
        font-size: 14px;
        font-family: 'Times New Roman', Times, serif;
    }
    #nomeri{
        margin-top: 30px;
        text-align: center;
        line-height: 0px;
        font-size: 18px;
        color: black;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
    }
    #red_text{
        margin-top: 25px;
        text-align: center;
        line-height: 0px;
        font-size: 20px;
        font-weight: 900;
        color: red;
        font-family: Arial, Helvetica, sans-serif
    }
    #guvohnoma{
        margin-top: 30px;
        text-align: center;
        line-height: 0px;
        font-size: 24px;
        color: red;
        font-weight: 900;
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>
    <div id="container">
        <div>
            <h1 id="sarlavha">
                O‘ZBEKISTON RESPUBLIKASIDA O‘LCHASHLARNING YAGONA BIRLIKDA BO'LISHINI TA’MINLASH TIZIMI
            </h1>
            <p id="xizmat_nomi">
                <p id="xizmat_text">{{$shablon->xizmat_nomi}}</p>
                <hr class="chiziq">
                <p class="pastki_text">(o'lchash vositasini qiyoslashni o'tkazgan metrologiya xizmatining nomi)</p>
            </p>
        </div>
        <div>
            <p id="nomeri">
             {{$shablon->tartib_raqami}}-son
            </p>
            <p id="red_text">
                o'lchash vositasini qiyoslash
            </p>
            <p id="guvohnoma">
                GUVOHNOMASI
            </p>
        </div>
        <div>
            <div id="left">
                <!-- <img src="{{asset('img/logo.png')}}" > -->
            </div>
            <div id="right">
                <p>Amal qilish muddati</p>
                <p>2023 yil «11» mart gacha</p>
            </div>
        </div>
        
    </div>
</body>
</html>