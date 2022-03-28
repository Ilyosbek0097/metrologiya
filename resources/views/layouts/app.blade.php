<!DOCTYPE html>
<html lang="uz" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Metralogiya</title>

    <link rel="apple-touch-icon" href="http://e-metrologiya.uz/front/theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon"
        href="http://e-metrologiya.uz/front/theme-assets/images/ico/logo1.png">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,700" rel="stylesheet">
    <!--Font icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="http://e-metrologiya.uz/front/theme-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://e-metrologiya.uz/front/theme-assets/fonts/themify/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://e-metrologiya.uz/front/theme-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://e-metrologiya.uz/front/theme-assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://e-metrologiya.uz/front/theme-assets/vendors/flipclock/flipclock.css">
    <link rel="stylesheet" type="text/css"
        href="http://e-metrologiya.uz/front/theme-assets/vendors/swiper/css/swiper.min.css">
    <!-- END VENDOR CSS-->

    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="http://e-metrologiya.uz/front/theme-assets/css/template-intro-video.css">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="http://e-metrologiya.uz/front/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://e-metrologiya.uz/alertify/css/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="http://e-metrologiya.uz/alertify/css/themes/default.min.css">
    <style>
    .telegram-btn {
        position: fixed;
        bottom: 106px;
        right: 218px;
        background: #039be5;
        -webkit-box-shadow: -1px 6px 20px rgb(3 155 229 / 25%);
        -moz-box-shadow: -1px 6px 20px rgba(3, 155, 229, .25);
        box-shadow: -1px 6px 20px rgb(3 155 229 / 25%);
        -webkit-border-radius: 11px;
        -moz-border-radius: 11px;
        border-radius: 9px;
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        -moz-transition: all .3s ease;
        transition: all .3s ease;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: space-between;
        -moz-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 11px 9px;
        -webkit-transform: translateX(-webkit-calc(100% - 55px));
        -moz-transform: translateX(-moz-calc(100% - 55px));
        -ms-transform: translateX(calc(100% - 55px));
        -o-transform: translateX(calc(100% - 55px));
        transform: translateX(calc(100% - 55px));
        z-index: 5;
    }

    .telegram-btn__icon {
        width: 25px;
        min-width: 23px;
        height: 25px;
        margin-top: 2px;
        margin-right: 7px;
    }

    .telegram-btn__text {
        color: #fff;
        /*font: 1.5rem "IBMPlexSans";*/
        white-space: nowrap;
    }
    </style>
    <!-- END Custom CSS-->

    <!-- Specific  styles -->
    <style>
    .navbar .dropdown .dropdown-menu {
        margin-top: 0rem !important;
    }
    </style>
    <style>
    #overlayer {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        background: #ffffff;
        opacity: 0.7;
    }

    .preloader {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -45px;
        width: 120px;
        height: 90px;
        text-align: center;
        color: #fff;
        font-size: 24px;
        z-index: 3;
    }

    #circle2 {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        height: 50px;
        width: 50px;
        margin: -25px 0 0 -25px;
        border: 3px rgba(0, 0, 0, 0.25) solid;
        border-top: 4px black solid;
        border-radius: 50%;
        -webkit-animation: spin2 1s infinite linear;
        animation: spin2 1s infinite linear;
        z-index: 3;
    }

    @-webkit-keyframes spin2 {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
        }
    }

    @keyframes spin2 {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
        }
    }
    </style>
    <div id="overlayer"></div>
    <div class="preloader">
        <div id="circle2"></div>
    </div>
    <style>
    .thumbnail {
        padding: 4px;
        line-height: 1.42857;
        background-color: rgb(255, 255, 255);
        /*border: 1px solid rgb(221, 221, 221);*/
        border-radius: 4px;
        transition: border 0.2s ease-in-out 0s;
    }

    .thumbnail>img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    .hidden {
        display: none;
    }
    </style>

    <script type="application/javascript">
    window.baseUrl = "http://e-metrologiya.uz";
    window.csrfToken = "XuwRAkHvdhdhl1XrrSBGP3Nt1rAK68o3faULQ0hm";
    window.lang = ""
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
    $(window).load(function() {
        $(".preloader").delay(100).fadeOut("fast");
        $("#overlayer").delay(100).fadeOut("fast");
    })
    </script>
</head>

<body class="1-column page-animated template-intro-video-default template-intro-video loaded" data-menu-open="hover"
    data-menu="">
    <!-- Preloader | Comment below code if you don't want preloader-->

    <div id="app">
        
        <!-- /////////////////////////////////// HEADER /////////////////////////////////////-->
        <!-- Header Start-->
        <header class="page-header">

            <!-- Horizontal Menu Start-->
            <nav class="main-menu static-top navbar-dark navbar navbar-expand-lg fixed-top mb-1"
                style="padding-top: 10px;">
                <div class="container">
                    <a class="navbar-brand animated" data-animation="fadeInDown" data-animation-delay="0.1s"
                        href="http://e-metralogiya.uz" style="display:flex"><img
                            src="http://e-metrologiya.uz/front/theme-assets/images/metrology3.png" width="90px"
                            height="60px" class="navbar-brand-logo" alt="Crypto Logo" /><img
                            src="http://e-metrologiya.uz/front/theme-assets/images/metrology3blue.png" width="90px"
                            height="60px" class="navbar-brand-logo-dark d-none" alt="Crypto Logo" /><span
                            class="brand-text font-weight-bold" style="font-size: small">O‘ZBEKISTON <BR> MILLIY
                            METROLOGIYA <BR>INSTITUTI</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div id="navigation" class="navbar-nav ml-auto">
                            <ul class="navbar-nav mt-1">


                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </nav>
            <!-- /Horizontal Menu End-->
        </header>
        <!-- /Header End-->

        <!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
        <div class="content-wrapper">
            <div class="content-body">
                <main>

                    @yield('content')
                    <!-- Header: Intro Video -->
                    <section class="head-area" id="head-area" data-midnight="white">
                        <div id="particles-js"></div>
                        <div class="bg-shape"></div>
                        <div class="head-content container-fluid d-flex align-items-center">
                            <div class="container">
                                <div class="banner-wrapper">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="banner-content">
                                                <h1 class="best-template animated" data-animation="fadeInUpShorter"
                                                    data-animation-delay="1s" style="font-size: 40px">Fuqarolar emas <br
                                                        class="d-none d-xl-block">hujjatlar harakatlanadi</h1>
                                                <h3 class="d-block animated" data-animation="fadeInUpShorter"
                                                    data-animation-delay="1s" style="font-size: small">
                                                    <i>"e-metralogiya.uz" axborot tizimiga xush kelibsiz!
                                                    </i></h3>
                                                <div class="mt-4">

                                                    <button style="padding-left: 25px; padding-right: 25px;"
                                                        type="button"
                                                        class="btn btn-lg btn-round btn-light btn-glow animated"
                                                        data-toggle="modal" data-target="#authModal1"
                                                        data-animation="fadeInUpShorter"
                                                        data-animation-delay="1.1s">Tizimga
                                                        kirish</button>&nbsp;&nbsp;&nbsp;
                                                    <button style="padding-left: 25px; padding-right: 25px;"
                                                        type="button"
                                                        class="btn btn-lg btn-round btn-light btn-glow animated"
                                                        data-toggle="modal" data-target="#authModal2"
                                                        data-animation="fadeInUpShorter"
                                                        data-animation-delay="1.1s">Ariza yuborish</button>

                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                 

                    <div class="modal fade text-left" id="control-modal" tabindex="-1" aria-labelledby="myModalLabel33"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>TO‘LIQ JARAYONNI KO‘RISH</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade text-left" id="authModal1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tizimga kirish</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" _style="padding: 40px">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade text-left" id="authModal2" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Ariza berishdan oldin tizimga kirish talab etiladi!</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" _style="padding: 40px">
                                    <h6 class="modal-title">Tizimga kirish</h6>
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

             

                    <!-- ICO Video Modal -->
                    <div class="modal ico-modal fade" id="ico-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body p-0">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" id="video"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ ICO Video Modal -->
                   

                    <!-- Contact -->
                  
                    <!--/ Contact -->

                </main>
            </div>
        </div>
        <footer class="footer static-bottom footer-light footer-custom-class pt-4 pb-0" data-midnight="default">
            
        </footer>

    </div>

    <!-- BEGIN APP JS-->
    <!-- END APP JS-->

    <script src="http://e-metrologiya.uz/js/lang.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="http://e-metrologiya.uz/front/theme-assets/vendors/vendors.min.js"></script>
    <!-- END VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="http://e-metrologiya.uz/front/theme-assets/vendors/flipclock/flipclock.min.js"></script>
    <script src="http://e-metrologiya.uz/front/theme-assets/vendors/swiper/js/swiper.min.js"></script>
    <script src="http://e-metrologiya.uz/front/theme-assets/vendors/waypoints/particles.min.js"></script>
    <script src="http://e-metrologiya.uz/front/theme-assets/vendors/waypoints/jquery.waypoints.min.js"></script>
    <script src="http://e-metrologiya.uz/alertify/alertify.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME JS-->
    <script src="http://e-metrologiya.uz/front/theme-assets/js/theme.js"></script>

    <script src="http://e-metrologiya.uz/front/theme-assets/vendors/waypoints/particles-type2.js"></script>
    <!-- END CRYPTO JS-->
    <!-- Specific scripts -->
    <script src="http://e-metrologiya.uz/front/js/jquery.cookie.min.js"></script>

    <script>
    $('#frm_check_application').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'http://e-metralogiya.uz/check-application',
            type: 'POST',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "number": $('#application_number').val(),
                "captcha": $('#application_captcha').val()
            },
            success: function(data) {
                console.log(data.error)
                $('.number_err').text('');
                $('.captcha_err').text('');
                if ($.isEmptyObject(data.error)) {
                    console.log(data.result)

                    var tbl_head = $('#head_content');
                    var tbl_appeal = $('#appeal_content');
                    var tbl_contract = $('#contract_content');
                    var varArr = data.result;
                    if (varArr.status) {
                        $('.fr_tr td:eq(0)', tbl_head).html(varArr.company_name);
                        $('.fr_tr td:eq(2)', tbl_head).html(varArr.appeal_created_at);
                        $('.sc_tr td:eq(0)', tbl_head).html(varArr.appeal_number);
                        $('.sc_tr td:eq(2)', tbl_head).html(varArr.create_contract_date);
                        $('.no_data').addClass('hidden');
                        tbl_head.removeClass('hidden');
                        tbl_appeal.addClass('hidden');
                        if (varArr.is_contract) {
                            var devices = varArr.appealDeviceArr;
                            var num = 1;
                            for (var key of Object.values(devices)) {
                                console.log(key.device_name)
                                $("#appeal_device > tbody").append("<tr><td>" + num + "</td><td>" +
                                    key.device_name +
                                    "</td><td class='text-center'><button type='button' class='btn btn-outline-primary btn-sm btnControl' data-appeal-id='" +
                                    key.appeal_id + "' data-appeal-device-id='" + key.id +
                                    "'><i class='ti-list-ol'></i></button></td></tr>");
                                num++;
                            }
                            tbl_contract.removeClass('hidden');

                        } else {
                            tbl_appeal.removeClass('hidden');
                            $('.tr1 td:eq(1)', tbl_appeal).html(varArr.amal_ariza_yub);
                            $('.tr1 td:eq(2)', tbl_appeal).html(varArr.ijro_ariza_yub);
                            $('.tr1 td:eq(3)', tbl_appeal).html(varArr.appeal_created_at);

                            if (varArr.cancel_date) {
                                $('.tr3').removeClass('hidden');
                                $('.tr3 td:eq(1)', tbl_appeal).html(varArr.amal_ariza_bekor);
                                $('.tr3 td:eq(2)', tbl_appeal).html(varArr.ijro_ariza_bekor);
                                $('.tr3 td:eq(3)', tbl_appeal).html(varArr.cancel_date);
                            } else {
                                $('.tr2').removeClass('hidden');
                                $('.tr2 td:eq(1)', tbl_appeal).html(varArr.amal_ariza_qabul);
                                $('.tr2 td:eq(2)', tbl_appeal).html(varArr.ijro_ariza_qabul);
                                $('.tr2 td:eq(3)', tbl_appeal).html(varArr.seen_at);
                            }
                        }

                    } else {
                        $('.no_data').removeClass('hidden');
                        $('.no_data p').html(varArr.message);
                    }
                    $('#refresh-captcha').click();
                } else {
                    printErrorMsg(data.error);
                }
            }
        });
    });

    $('#appeal_device').on('click', '.btnControl', function() {
        var appeal_id = $(this).data('appeal-id');
        var appeal_device_id = $(this).data('appeal-device-id');
        baseUrl = "http://e-metrologiya.uz/modal-application?appeal_id=" + appeal_id + "&appeal_device_id=" +
            appeal_device_id;
        $('#control-modal').modal('show').find('.modal-body').load(baseUrl, function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
    });

    function printErrorMsg(msg) {
        $.each(msg, function(key, value) {
            $('.' + key + '_err').text(value);
        });
    }

    $('#refresh-captcha').click(function() {
        $.ajax({
            type: 'GET',
            url: 'refresh-captcha',
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

    $(window).on('load', function() {
        if ($(window).width() > 980) {
            if ($.cookie('site-offerta') == null) {
                $.cookie('site-offerta', '1', {
                    expires: (1 / 24),
                    path: '/'
                });
                $('#site-offerta').modal('show')
            }
        }
    })
    </script>


</body>

</html>