<?php use SimpleSoftwareIO\QrCode\Facades\QrCode; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Document</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<style>
* {
    margin: 10px;
    /* padding: 20px; */
}

#container {
    margin: 0 auto;
    /* height: 1300px; */

    border-top: 1px solid black;
    border-right: 1px solid black;
    border-left: 1px solid black;
    height: 1068px;
}

body {

    border: 3px solid black;
    padding: 2px;
}

/* #container{
        width: 960px;
        margin: 0 auto;
        border: 1px solid red;
        height: 1024px;
    } */
#sarlavha {
    color: blue;
    text-transform: uppercase;
    text-align: center;
    font-size: 17px;
    font-weight: bold;
    font-family: 'dejavu serif';
}

#xizmat_text {

    text-align: center;
    font-family: 'dejavu serif';
    font-size: 15px;
    color: black;
    margin-top: -5px;
    font-weight: bold;
    /* line-height: -20px; */

}

.chiziq {
    /* line-height: -8px; */
    text-align: center;
    border: 0.5px solid black;
    margin-top: -10px;
    width: 95%;
}

.pastki_text {
    text-align: center;
    line-height: -10px;
    font-weight: normal;
    font-style: italic;
    font-size: 12px;
    font-family: 'dejavu serif';
}

#nomeri {
    margin-top: 15px;
    text-align: center;
    line-height: 0px;
    font-size: 18px;
    color: black;
    font-weight: bold;
    font-family: 'dejavu serif';



}

#red_text {
    margin-top: 20px;
    text-align: center;
    line-height: 0px;
    font-size: 18px;
    font-weight: bold;
    color: red;
    font-family: 'dejavu serif';
}

#guvohnoma {
    margin-top: 30px;
    text-align: center;
    line-height: 0px;
    font-size: 24px;
    color: red;
    font-weight: bold;
    text-transform: uppercase;
    font-family: 'dejavu serif';
}

#left {
    clear: both;
    float: left;
    margin-top: -10px;
    /* border: 1px solid green; */
}

#left img {
    padding-left: 5px;
    width: 100px;
    margin-top: -2px;

}

#right {
    clear: both;
    float: right;
    width: 300px;
    font-size: 13px;
    font-family: 'dejavu serif';
    font-weight: bold;
    /* border: 1px solid yellow; */
    text-align: right;
    padding-right: 10px;
    margin-top: -10px;

}

#ushbu_guvohnoma {
    clear: both;
    /* float: left; */
    /* border: 1px solid red; */
    font-family: 'dejavu serif';
    font-weight: bold;
    font-size: 13px;
    padding-left: 10px;
    line-height: -10px;
}

/* Begin Row  */
#malumot {
    clear: both;


    /* border: 1px solid red; */
}

#left_data {
    /* border: 1px solid orange; */
    float: left;
    width: 80%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data #data_text {
    /* border: 1px solid blue;    */
    color: black;
    line-height: 3px;
    font-family: 'dejavu serif';
    font-weight: bold;
    font-size: 14px;
}

#left_data #data_chiziq {
    width: 93%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data #data_malumot {
    color: black;
    font-weight: normal;
    font-family: 'dejavu serif';
    font-size: 10px;
    margin-top: -2px;
    padding-top: 2px;

}

#right_data {
    /* border: 1px solid blue; */
    float: right;
    font-weight: bold;
    font-size: 13px;
    font-family: 'dejavu serif';
    padding-right: 15px;
    margin-top: 0px;
    /* margin-bottom: 30px; */
}

/* row 1 */
#malumot1 {
    clear: both;
    /* border: 1px solid red; */
}

#left_data1 {
    /* border: 1px solid orange; */
    float: left;
    width: 83%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data1 #data_text1 {
    color: black;
    line-height: 3px;
    font-family: 'dejavu serif';
    font-weight: bold;
    font-size: 15px;
}

#left_data1 #data_chiziq1 {
    width: 100%;
    /* width: 95%; */
    line-height: -10px;
    margin-top: -5px;
}

#left_data1 #data_malumot1 {
    color: black;
    /* font-weight: 100; */
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    margin-top: -2px;
    padding-top: 2px;

}

#right_data1 {
    /* border: 1px solid blue; */
    float: right;
    font-weight: 900;
    font-size: 15px;
    font-family: 'Times New Roman', Times, serif;
    padding-right: 15px;
    margin-top: 0px;
}

/* Row 2 */
#malumot2 {
    clear: both;
    /* border: 1px solid red; */
}

#left_data2 {
    /* border: 1px solid orange; */
    float: left;
    width: 72%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data2 #data_text2 {
    color: black;
    line-height: 3px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data2 #data_chiziq2 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data2 #data_malumot2 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    margin-top: -2px;
    padding-top: 2px;

}

#right_data2 {
    /* border: 1px solid blue; */
    float: right;
    font-weight: 900;
    font-size: 15px;
    font-family: 'Times New Roman', Times, serif;
    padding-right: 15px;
    margin-top: 0px;
}

/* Row 3 */
#malumot3 {
    clear: both;
    /* border: 1px solid red; */
}

#left_data3 {
    /* border: 1px solid orange; */
    float: left;
    width: 84%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data3 #data_text3 {
    color: black;
    line-height: 3px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data3 #data_chiziq3 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data3 #data_malumot3 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    padding-top: 2px;

}

#right_data3 {
    /* border: 1px solid blue; */
    float: right;
    font-weight: 900;
    font-size: 15px;
    font-family: 'Times New Roman', Times, serif;
    padding-right: 15px;
    margin-top: 0px;
}


/* Row 4 */
#malumot4 {
    clear: both;
    /* border: 1px solid red; */
}

#left_data4 {
    /* border: 1px solid orange; */
    float: left;
    width: 94%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data4 #data_text4 {
    color: black;
    line-height: 3px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data4 #data_chiziq4 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data4 #data_malumot4 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    padding-top: 2px;

}


/* Row 5 */
#malumot5 {
    clear: both;
    /* margin-top: 20px; */
    /* border: 1px solid red; */
}

#left_data5 {
    /* border: 1px solid orange; */
    float: left;
    width: 56%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data5 #data_text5 {
    color: black;
    line-height: 3px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data5 #data_chiziq5 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data5 #data_malumot5 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    text-align: center;
    padding-top: 2px;
    /* width: 74%; */
}

#right_data5 {
    /* border: 1px solid blue; */
    float: right;
    font-weight: 900;
    font-size: 15px;
    font-family: 'Times New Roman', Times, serif;
    padding-right: 15px;
    margin-top: 0px;
}

/* Row 6 */
#malumot6 {
    clear: both;
    /* border: 1px solid red; */
}

#left_data6 {
    /* border: 1px solid orange; */
    float: left;
    width: 94%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data6 #data_text6 {
    color: black;
    line-height: -10px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data6 #data_chiziq6 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data6 #data_malumot6 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    padding-top: 2px;

}

/* Row  7*/
#malumot7 {
    clear: both;
    /* margin-top: 20px; */
    /* border: 1px solid red; */
}

#left_data7 {
    /* border: 1px solid orange; */
    float: left;
    width: 77%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data7 #data_text7 {
    color: black;
    line-height: -10px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data7 #data_chiziq7 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data7 #data_malumot7 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    text-align: center;
    padding-top: 2px;
    /* width: 74%; */
}

#right_data7 {
    /* border: 1px solid blue; */
    /* border: 1px solid blue; */
    float: right;
    font-weight: 900;
    font-size: 15px;
    font-family: 'Times New Roman', Times, serif;
    padding-right: 15px;
    margin-top: 0px;
}

/* Row  8*/
#malumot8 {
    clear: both;
    /* margin-top: 20px; */
    /* border: 1px solid red; */
}

#left_data8 {
    /* border: 1px solid orange; */
    float: left;
    width: 79%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data8 #data_text8 {
    color: black;
    line-height: -10px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data8 #data_chiziq8 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data8 #data_malumot8 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    text-align: center;
    padding-top: 2px;
    /* width: 74%; */
}

#right_data8 {
    /* border: 1px solid blue; */
    /* border: 1px solid blue; */
    float: right;
    font-weight: 900;
    font-size: 15px;
    font-family: 'Times New Roman', Times, serif;
    padding-right: 15px;
    margin-top: 0px;

}

/* Row  9*/
/* Row 4 */
#malumot9 {
    clear: both;
    /* border: 1px solid red; */
}

#left_data9 {
    /* border: 1px solid orange; */
    float: left;
    width: 94%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data9 #data_text9 {
    color: black;
    line-height: -10px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data9 #data_chiziq9 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data9 #data_malumot9 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    padding-top: 2px;

}

/* Row 8 */
/* Row  8*/
#malumot10 {
    clear: both;

    /* border: 1px solid red; */
}

#left_data10 {
    /* border: 1px solid orange; */
    float: left;
    width: 77%;
    line-height: -10px;
    text-align: center;
    margin: 0px 10px;
}

#left_data10 #data_text10 {
    color: black;
    line-height: -10px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;
}

#left_data10 #data_chiziq10 {
    width: 100%;
    line-height: -10px;
    margin-top: -5px;
}

#left_data10 #data_malumot10 {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    text-align: center;
    padding-top: 2px;
    /* width: 74%; */
}

#right_data10 {
    /* border: 1px solid blue; */
    float: right;
    font-weight: 900;
    font-size: 15px;
    font-family: 'Times New Roman', Times, serif;
    padding-right: 15px;
    margin-top: 0px;
}

/* Row 13 */
#malumot13 {
    clear: both;
    float: left;
    /* margin: 0px 10px; */

    width: 100%;
    /* border: 1px solid red; */
}

#data_text13 {
    /* border: 1px solid green; */
    margin: 0 auto;
    padding: 0 auto;
}

#data_text13 p {
    font-weight: 900;
    font-size: 16px;
    font-family: 'Times New Roman', Times, serif;

}

#pasti {
    clear: both;
    float: left;
    width: 100%;

    /* border: 1px solid red; */
}

#qr_code {
    float: left;
    border: 1px solid green;
}

#qiyoslovchi {
    float: right;
    /* border: 1px solid red; */
    /* margin-right: 50px; */
    width: 60%;
}

#qiyoslash_sanasi {
    float: left;
    text-align: left;
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;

}

#sanasi {
    float: right;
    margin-right: 192px;
    color: black;
    font-family: 'Times New Roman', Times, serif;

}

#qiyoslovchi_fish {
    clear: both;
    margin-top: -130px;
}

#q_left {
    float: left;
}

#q_right {
    float: right;
    width: 300px;

}

#q_title {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    font-size: 15px;

}

#q_fish {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 900;
    text-align: center;
}

#q_chiziq {
    line-height: -10px;
    margin-top: -10px;
}

#q_datatext {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size: 12px;
    text-align: center;
    margin-top: -10px;
}
</style>

<body style=" font-family: 'DejaVu Sans', san-serif; font-weight:normal">
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
                <img src="{{$pic}}">
            </div>
            <div id="right">
                <p>Amal qilish muddati<br>
                    <?php
                      $date=date_create($shablon->amal_qilish_muddati);
                      echo date_format($date,"Y") .' yil   '.'«'.date_format($date,"d").'» '; 
                      switch (date_format($date,"m")) {
                          case '01':
                              echo 'yanvar';
                              break;
                          case '02':
                                echo 'fevral';
                                break;
                         case '03':
                                    echo 'mart';
                                    break;
                                case '04':
                                      echo 'aprel';
                                      break;
                                      case '05':
                                        echo 'may';
                                        break;
                                    case '06':
                                          echo 'iyun';
                                          break;
                                   case '07':
                                              echo 'iyul';
                                              break;
                                          case '08':
                                                echo 'avgust';
                                                break;
                                                case '09':
                                                    echo 'sentabr';
                                                    break;
                                                case '10':
                                                      echo 'oktabr';
                                                      break;
                                                      case '11':
                                                        echo 'noyabr';
                                                        break;
                                                    case '12':
                                                          echo 'dekabr';                                                 
                          
                          default:
                              # code...
                              break;
                      } 
                      echo " gacha";
                ?>
                </p>

            </div>
        </div>
        <div>
            <div id="ushbu_guvohnoma">
                <p>
                    Ushbu guvohnoma
                </p>
            </div>
        </div>

        <div id="malumot">
            <div id="left_data">
                <p id="data_text">
                    «УПВССЖ 15/40 (0,02-16) m³/h
                </p>

                <hr id="data_chiziq">
                <p id="data_malumot">
                    (etalonlar (namunaviy o'lchash vositalari)ning belgilanishi va nomi, qiyoslangan sanasi)
                </p>
            </div>
            <div id="right_data">
                foydalangan holda
            </div>
        </div>
        <div id="malumot1">
            <div id="left_data1">
                <p id="data_text1">
                    Ko'p funksiyali kalibrator MC-6; Yuk porshenli manometr МП-0.4
                </p>
                <hr id="data_chiziq1">
                <p id="data_malumot1">
                    (qiyoslash bo'yicha xujjatning belgilanishi va nomlanishi)
                </p>
            </div>
            <div id="right_data1">
                ga muvofiq
            </div>
        </div>
        <div id="malumot2">
            <div id="left_data2">
                <p id="data_text2">
                    O‘zMMI DM Qo'qon filiali
                </p>
                <hr id="data_chiziq2">
                <p id="data_malumot2">
                    (o'lchash vositalarini qiyoslagan metrologiya xizmatining nomi)
                </p>
            </div>
            <div id="right_data2">
                tomonidan qiyoslangan
            </div>
        </div>
        <div id="malumot3">
            <div id="left_data3">
                <p id="data_text3">
                    "FIRDAVS HEALTHY DENTAL" MCHJ
                </p>
                <hr id="data_chiziq3">
                <p id="data_malumot3">
                    (o'lchash vositalarining egasi - yuridik shaxs)
                </p>
            </div>
            <div id="right_data3">
                ga tegishli
            </div>
        </div>
        <div id="malumot4">
            <div id="left_data4">
                <p id="data_text4">
                    Novator
                </p>
                <hr id="data_chiziq4">
                <p id="data_malumot4">
                    (o'lchash vositalarini tayyorlovchi)
                </p>
            </div>

        </div>
        <!-- <div style="clear: both;"></div> -->
        <div id="malumot5">
            <div id="left_data5">
                <p id="data_text5">
                    ROSSIYA
                </p>
                <hr id="data_chiziq5">
                <p id="data_malumot5">
                    (o'lchash vositalarining tayyorlovchi - import qiluvchi mamlakat)
                </p>
            </div>
            <div id="right_data5">
                tomonidan tayyorlangan (import qilingan)
            </div>
        </div>
        <div id="malumot6">
            <div id="left_data6">
                <p id="data_text6">
                    O'lchash ko'lami 0÷300 mmHg;
                </p>
                <hr id="data_chiziq6">
                <p id="data_malumot6">
                    (o'lchash vositalari parametrlarining nomi, o'lchashlar,
                </p>
            </div>

        </div>
        <div id="malumot7">
            <div id="left_data7">
                <p id="data_text7">
                    shkala bolinmasi 2mmHg; ± 3mmHg
                </p>
                <hr id="data_chiziq7">
                <p id="data_malumot7">
                    xatolik chegaralari, aniqlik klassi)
                </p>
            </div>
            <div id="right_data7">
                metrologik tavsifli
            </div>
        </div>
        <div id="malumot8">
            <div id="left_data8">
                <p id="data_text8">
                    Sfigmomanometr Адъютор № 01202834
                </p>
                <hr id="data_chiziq8">
                <p id="data_malumot8">
                    (o'lchash vositalarining nomlanishi va belgilanishi, zavod raqami)
                </p>
            </div>
            <div id="right_data8">
                o'lchash vositasi
            </div>
        </div>
        <div id="malumot9">
            <div id="left_data9">
                <p id="data_text9">
                    O'z DSt 8.089-2020 “Mexanik , yarim avtomat va avtomat va avtomat noinvaziv arterial bosim
                </p>
                <hr id="data_chiziq9">
                <p id="data_malumot9">
                    (o'lchash vositalariga qo'yiladigan talablarni reglamentlovchi normativ xujjat belgilanishi va nomi)
                </p>
            </div>
        </div>
        <div id="malumot10">
            <div id="left_data10">
                <p id="data_text10">

                </p>
                <hr id="data_chiziq10">
                <p id="data_malumot10">
                    o'lchash vositasi turining ta'rifi)
                </p>
            </div>
            <div id="right_data10">
                talablariga mosligi
            </div>
        </div>
        <div id="malumot13">
            <div id="left_data13">
                <div id="data_text13">
                    <p>
                        va davlat metrologik tekshiruvi va nazorati tatbiq etilish sohasida qo'llanishiga yo'l
                        qo'yilishini
                        tasdiqlaydi.
                    </p>
                </div>
            </div>
            </ <div id="pasti">
            <div id="qr_code">
                <img style="width:130px;"
                    src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->generate('https://e-metralogiya.uz/certificate/result/45203')) }}">
            </div>
            <div id="qiyoslovchi">
                <p id="qiyoslash_sanasi">
                    Qiyoslash sanasi:
                </p>
                <p id="sanasi"> 2021 yil «15» oktabr</p>
                <div id="qiyoslovchi_fish">
                    <div id="q_left">
                        <p id="q_title">
                            Qiyoslovchi:
                        </p>
                    </div>

                    <div id="q_right">
                        <p id="q_fish">
                            MUXIDINOV XAYRILLO
                            BURXONDINOVICH
                        </p>
                        <hr id="q_chiziq">
                        <p id="q_datatext">
                            (F.I.SH.)
                        </p>
                    </div>
                </div>
            </div>
        </div>





    </div>
    </div>
</body>

</html>