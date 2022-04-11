        @include('header')
            
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <style type="text/css">
            .left-side-bg {
                 background-position: center; 
                 background-size: 80%; 
                 background-color: #453939;
                 background-repeat: no-repeat;
            }

            #submit-btn:hover {
                background-color: #453939;
                border-color: #453939;
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

              input[type="date"]:before {
                content: attr(placeholder) !important;
                color: #aaa;
                margin-right: 0.5em;
              }
              input[type="date"]:focus:before,
              input[type="date"]:valid:before {
                content: "";
              }
        </style>
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-login m-login--singin  m-login--5" id="m_login" >
               <!--  <div class="m-login__wrapper-1 m-portlet-full-height left-side-bg" style="background-image: url({{asset('app/media/img//bg/base-img.png')}});">
                    
                </div> -->
                <div class="m-login__wrapper-2 m-portlet-full-height">
                    <div class="m-login__contanier">
                        <div class="m-login__signin">
                            <?php
                                if (!$limit) {
                            ?>
                                <div class="m-login__head">
                                    <h3 class="m-login__title">
                                        <b>119 PASSOVER CELEBRATION</b><br>SEAT REGISTRATION
                                    </h3>
                                </div>
                                <form class="m-login__form m-form" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-group m-form__group">
                                        <input class="form-control m-input" type="email" placeholder="Email Address" name="email" required>
                                    </div>
                                    <div class="form-group m-form__group">
                                        <input class="form-control m-input" type="text" placeholder="Full Name" name="name" required>
                                    </div>
                                    <div class="form-group m-form__group">
                                        <input class="form-control m-input" type="number" name="age" required placeholder="AGE">
                                    </div>
                                    <div class="form-group m-form__group">
                                        <input class="form-control m-input" type="text" placeholder="Phone Number" name="phone" required>
                                    </div>
                                    <!-- <div class="form-group m-form__group">
                                        <input class="form-control m-input" type="text" placeholder="Church" name="church">
                                        <span class="m-form__help" style="text-transform: uppercase;">leave it blank if you do not belong to any church</span>
                                    </div> -->
                                    <div class="m-form__group form-group" style="margin-top: 1rem;">
                                        <!-- <label for="">
                                            CELL GROUP
                                        </label> -->
                                        <div class="m-radio-inline">
                                            <label class="m-radio">
                                                <input type="radio" name="status" value="1">
                                                PEKERJA
                                                <span></span>
                                            </label>
                                            <label class="m-radio">
                                                <input type="radio" name="status" value="0" checked>
                                                JEMAAT
                                                <span></span>
                                            </label>
                                        </div>
                                        <!-- <span class="m-form__help">
                                            CHOOSE "YES" IF YOU ALREADY BELONG IN A CELL GROUP
                                        </span> -->
                                    </div>
                                    <div class="m-login__form-action">
                                        <button type ="submit" id="submit-btn" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" style="font-weight: 400">
                                            SUBMIT
                                        </button>
                                    </div>
                                </form>
                            <?php } else { ?>
                                <div class="m-login__head">
                                    <div class="m-login__title">
                                        <span style="font-weight: 600; font-size: 2.2rem; color: #F36E23">SORRY!<br></span>
                                        <br>
                                        <p style="font-size: 1.7rem; font-weight: 500">
                                        This registration link has reached <span style="font-weight: 700; color: #F36E23">MAXIMUM CAPACITY</span>.
                                        
                                        <br><br>
                                        Stay tune to our Instagram for the next update (@sukawarna.legacy)!
                                        <br><br>
                                        <!-- Don't be late! Otherwise, your seat will be taken! -->
                                        </p>
                                        <br>
                                        <span style="font-weight: 500; font-size: 1.7rem">God bless!</span>

                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
    </body>
</html>
            
        