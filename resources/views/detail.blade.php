<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/logo.png">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link href="{{ asset('assets/src/jquery.exzoom.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/src/jquery.exzoom.js') }}"></script>
    <style>
        #exzoom {
            width: 300px;
            /*height: 400px;*/
        }

        .hidden {
            display: none;
        }

        .cable-choose {
            margin-top: 10px
            margin-bottom: 10px;
        }
        
        .cable-choose button {
        border: 2px solid #E1E8EE;
        border-radius: 6px;
        padding: 5px 10px;
        font-size: 14px;
        color: #5E6977;
        background-color: #fff;
        cursor: pointer;
        transition: all .5s;
        }
    </style>
    <title>Deowangi</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{ __('/#home') }}" class="nav__logo">
                <i class="ri-arrow-left-line"></i>
            </a> 
        </nav>
    </header>

    <main class="main">
        <!--==================== PRODUCT ====================-->
        <section class="section container">
            <div class="row__detail">
                <div class="column__detail">
                    <div class="exzoom" id="exzoom">
                        <div class="exzoom_img_box">
                            <ul class='exzoom_img_ul'>
                                <li> <img src="{{ asset('storage/'.$data->image) }}" alt=""
                                        class="detail__img">
                                </li>
                                @foreach ($data->details as $item)
                                    <li> <img src="{{ asset('storage/'.$item->imageDetail) }}" alt=""
                                            class="detail__img">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="exzoom_nav"></div>
                        <!-- Nav Buttons -->
                        <p class="exzoom_btn">
                            <a href="javascript:void(0);" class="exzoom_prev_btn">
                                < </a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                        </p>
                    </div>


                </div>

                <div class="column__detail">
                    <h1>{{ $data->name }}</h1>
                    <br>
                    <h4 style="color: black; font-size: medium;">Rp. {{ $data->price }}</h4>
                    <br>
                    <div class="cable-choose">
                    <span>60 ml</span>
                    <span>100 ml</span>
                    </div>

                    <br>
                    <p>Deskripsi</p>
                    <hr>
                    <br>
                    <p>
                        {!! nl2br(e($data->description)) !!}
                    </p>

                </div>
                <div class="column__detail" style="margin-top: 10%;">
                    <h5 style="margin-left: 4%;">Dapatkan produk Deowangi Disini</h5>
                    <br>
                    <a href=""></a>
                    <a href="https://shopee.co.id/deowangi.id" target="_blank">
                        <img src="{{ asset('assets/img/shopee.png') }}" alt=""
                            style="height: 40px; width: 40px; margin-bottom: 4%; margin-left: 12%;">
                    </a>
                    <a href="https://instagram.com/deowangi.id?igshid=NzZlODBkYWE4Ng==" target="_blank">
                        <img src="{{ asset('assets/img/instagram.png') }}" alt=""
                            style="height: 40px; width: 40px; margin-bottom: 4%; margin-left: 2px; margin-right: 2px;">
                    </a>
                    <a href="http://wa.me/6282336657929" target="_blank">
                        <img src="{{ asset('assets/img/wa.png') }}" alt=""
                            style="height: 40px; width: 40px; margin-bottom: 4%;">
                    </a>
                </div>

            </div>

        </section>
    </main>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        $(function() {

            $("#exzoom").exzoom({

                // thumbnail nav options
                "navWidth": 50,
                "navHeight": 60,
                "navItemNum": 4,
                "navItemMargin": 3,
                "navBorder": 1,

                // autoplay
                "autoPlay": false,

                // autoplay interval in milliseconds
                "autoPlayTimeout": 2000

            });

        });
    </script>
</body>

</html>
