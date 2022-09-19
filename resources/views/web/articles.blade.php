@extends('web.master')
@section('body')
    <!--************************************
        Inner Banner Start
      *************************************-->
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600"
        data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>News &amp; Articles</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="javascript:void(0);">home</a></li>
                            <li class="tg-active">News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
        Inner Banner End
      *************************************-->
    <!--************************************
        Main Start
      *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
         News Grid Start
       *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                            <div id="tg-content" class="tg-content">
                                <div class="tg-newslist">
                                    <div class="tg-sectionhead">
                                        <h2><span>Latest News &amp; Articles</span>What's Hot in The News</h2>
                                    </div>
                                    <div class="row">
                                        @foreach ($articles as $article)
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <article class="tg-post">
                                                    <figure><a href="javascript:void(0);"><img
                                                                src="/upload/{{ $article->image }}"
                                                                alt="image description"></a></figure>
                                                    <div class="tg-postcontent">
                                                        <h3>{{ $article->title }}</h3>
                                                        <ul class="tg-bookscategories">

                                                        </ul>
                                                        <div class="tg-themetagbox"><span
                                                                class="tg-themetag">featured</span></div>
                                                        <div class="tg-posttitle">
                                                            <h3><a href="javascript:void(0);">The Article</a></h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>{{ $article->line }}</p>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="{{route('owner.read', ['id' => $article->owner->id])}};">{{$article->owner->name}}</a></span>
                                                        <ul class="tg-postmetadata">
                                                            <li><a href="javascript:void(0);"><i
                                                                        class="fa fa-comment-o"></i><i>21,415
                                                                        Comments</i></a></li>
                                                            <li><a href="javascript:void(0);"><i
                                                                        class="fa fa-eye"></i><i>24,565 Views</i></a></li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                        @endforeach




                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                            <aside id="tg-sidebar" class="tg-sidebar">

                                <div class="tg-widget tg-catagories">
                                    <div class="tg-widgettitle">
                                        <h3>Categories</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            <li><a href="javascript:void(0);"><span>Art &amp;
                                                        Photography</span><em></em></a></li>
                                            <li><a href="javascript:void(0);"><span>Biography</span><em></em></a></li>
                                            <li><a href="javascript:void(0);"><span>Children’s Book</span><em></em></a></li>
                                            <li><a href="javascript:void(0);"><span>Craft &amp; Hobbies</span><em></em></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><span>Crime &amp; Thriller</span><em></em></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><span>Fantasy &amp; Horror</span><em></em></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><span>Fiction</span><em></em></a></li>
                                            <li><a href="javascript:void(0);"><span>Fod &amp; Drink</span><em></em></a></li>
                                            <li><a href="javascript:void(0);"><span>Graphic, Anime &amp;
                                                        Manga</span><em></em></a></li>
                                            <li><a href="javascript:void(0);"><span>Science Fiction</span><em></em></a></li>
                                            <li><a href="javascript:void(0);"><span>View All</span></a></li>
                                        </ul>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
         News Grid End
       *************************************-->
    </main>
    <!--************************************
        Main End
      *************************************-->
@endsection('body')
