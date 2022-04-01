        @include('header')
            
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <style type="text/css">
            .m-login.m-login--5 .m-login__wrapper-2 {
                padding-top: 3%;
            }

            .m-login.m-login--5 .m-login__wrapper-2 .m-login__contanier .m-login__head .m-login__title {
                color: #453939;
            }

            .resubmit-btn {
                background-color: #F36E23; 
                border-color: #F36E23;
                font-family: "Barlow" !important;
            }

            .resubmit-btn:hover {
                background-color: #453939;
                border-color: #453939;
            }

        </style>

        <style type="text/css">
            .left-side-bg {
                 background-position: center; 
                 background-size: 80%; 
                 background-color: #453939;
                 background-repeat: no-repeat;
            }

            @media (max-width: 768px) {
                .left-side-bg {
                     background-position: center; 
                     background-size: 50%; 
                     background-color: #453939;
                     background-repeat: no-repeat;
                     height: 60vw;
                }
            }
        </style>

        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-login m-login--singin  m-login--5" id="m_login" >
                <!-- <div class="m-login__wrapper-1 m-portlet-full-height left-side-bg" style="background-image: url({{asset('app/media/img//bg/base-img.png')}});">
                </div> -->
                <div class="m-login__wrapper-2 m-portlet-full-height">
                    <div class="m-login__contanier">
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <div class="m-login__title">
                                    <span style="font-weight: 600; font-size: 2.2rem; color: #F36E23">THANK YOU<br><span style="font-size: 1.7rem; font-weight: 500; color: #453939">Your submission has been accepted!</span></span>
                                    <br><br>
                                    <?php if (isset($code)) {?>
                                        Below is your QR Code, you can <span style="font-weight: 700">save</span> it on your device and you need to <span style="font-weight: 700">activate</span> it at our activation counter <span style="font-weight: 700">TODAY</span>.
                                        <br><br>
                                        <img src="<?php echo asset('img/qrcodes/'.$code.'.jpg'); ?>"></img>
                                        <br><br>
                                    <?php } ?>
                                    <!-- We will send you a confirmation email. Please wait a while and check your inbox.
                                    <br>(in some cases, it goes under <span style="font-weight: 700">Spam</span> or <span style="font-weight: 700">Junk</span> category).
 -->
                                    <br><br>

                                    For more information, please contact our crew at:
                                    <br>
                                    <a href="https://wa.me/628996012319" target="_blank" style="font-weight: 700; color: #F36E23"><i class="fa fa-whatsapp" style="font-size: 1.7rem"></i> (+62) 8996012319</a>

                                    <br><br>
                                    <span style="font-weight: 500; font-size: 1.7rem">God bless!</span>

                                    <br><br>
                                    <div style="padding-bottom: 5%">
                                        <a href="{{ route('home') }}">
                                            <button type="button" class="resubmit-btn btn btn-primary btn-lg m-btn m-btn--custom" style="">
                                                GET ANOTHER TICKET
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
    </body>
</html>
            
