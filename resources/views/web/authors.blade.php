@extends('web.master')
@section('body')
    <!--body-->

    <body class="main-layout">
        <!--************************************
        Main Start
      *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
         Authors Start
       *************************************-->
            <div class="tg-authorsgrid">
                <div class="container">
                    <div class="row">
                        <div class="tg-authors">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-sectionhead">
                                    <h2><span>Strong Minds Behind Us</span>Most Popular Authors</h2>
                                </div>
                            </div>
                            @foreach ($authors as $one)
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                    <div class="tg-author">
                                        <figure><a href="/author/{{ $one->id }}"><img src="upload/{{ $one->image }}"
                                                    alt="image description"></a></figure>
                                        <div class="tg-authorcontent">
                                            <h2>{{ $one->full_name }}</h2>
                                            <br>
                                            <ul class="tg-socialicons">
                                                <li class="tg-facebook"><a href="https://{{ $one->facebook_link }}"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li class="tg-twitter"><a href="https://{{ $one->twitter_link }}"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="tg-instagram"><a href="https://{{ $one->instagram_link }}"><i
                                                            class="fa fa-instagram"></i></a></li>

                                                <br>
                                                <br>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
         Authors End
       *************************************-->

            <!--************************************
         Picked By Author Start
       *************************************-->

            <!--************************************
         Picked By Author End
       *************************************-->
        </main>
        <!--************************************
        Main End
      *************************************-->

    </body>
@endsection('body')
