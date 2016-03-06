@extends('index')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; background: url(assets/images/slide-02-bg.jpg) center #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Berita</h2>
                <p>Seputar Hiperkes</p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Berita</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<div id="content">
    <div class="container">
        <div class="row blog-page">
            <div class="col-md-9 blog-box">
                <!-- Start Post -->
                <div class="blog-post standard-post">
                    <!-- Post Thumb -->
                    <div class="post-head">
                        <a href="#">
                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                            <img alt="" src="images/blog-05.jpg">
                        </a>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                        <h2><a href="#">Standard Post With Image</a></h2>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <a class="main-button" href="#">Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- Post Thumb -->
                    <div class="post-head">
                        <a href="#">
                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                            <img alt="" src="images/blog-05.jpg">
                        </a>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                        <h2><a href="#">Standard Post With Image</a></h2>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <a class="main-button" href="#">Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- End Post -->

                <!-- Start Pagination -->
                <div id="pagination">
                    <span class="all-pages">Halaman 1 dari 3</span>
                    <span class="current page-num">1</span>
                    <a class="page-num" href="#">2</a>
                    <a class="page-num" href="#">3</a>
                    <a class="next-page" href="#">Selanjutnya</a>
                </div>
                <!-- End Pagination -->
            </div>
            <div class="col-md-3 sidebar right-sidebar">
                <!-- Search Widget -->
                <div class="widget widget-search">
                <form action="#">
                    <input type="search" placeholder="Masukkan Pencarian..." />
                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
                </div>
                <!-- Categories Widget -->
                <div class="widget widget-categories">
                    <h4>Kategori <span class="head-line"></span></h4>
                    <ul>
                        <li>
                            <a href="#">Branding</a>
                        </li>
                        <li>
                            <a href="#">Design</a>
                        </li>
                        <li>
                            <a href="#">Development</a>
                        </li>
                        <li>
                            <a href="#">Graphic</a>
                        </li>
                    </ul>
                </div>
                <!-- Popular Posts widget -->
                <div class="widget widget-popular-posts">
                    <h4>Berita Lainnya <span class="head-line"></span></h4>
                    <ul>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="{{ asset('assets/images/blog-mini-01.jpg') }}" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                                <span>Jul 29 2013</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="{{ asset('assets/images/blog-mini-02.jpg') }}" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                                <span>Jul 29 2013</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="{{ asset('assets/images/blog-mini-03.jpg') }}" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                                <span>Jul 29 2013</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
                <!-- Tags Widget -->
                <div class="widget widget-tags">
                    <h4>Tags <span class="head-line"></span></h4>
                    <div class="tagcloud">
                        <a href="#">Portfolio</a>
                        <a href="#">Theme</a>
                        <a href="#">Mobile</a>
                        <a href="#">Design</a>
                        <a href="#">Wordpress</a>
                        <a href="#">Jquery</a>
                        <a href="#">CSS</a>
                        <a href="#">Modern</a>
                        <a href="#">Theme</a>
                        <a href="#">Icons</a>
                        <a href="#">Google</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
