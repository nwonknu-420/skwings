<style scoped>
@import "/public/fantasy/css/bootstrap.css";
@import "/public/fantasy/css/style.css";


.text-size{
    font-size: 30px;
    font-weight: 300;
    bottom: 20px;
}

</style>

<template>
<section class="travel_category">
    <h1 class="text-white mb-4 text-center" style="font-size: 4rem;">Trending</h1>
    
    <slot></slot>
</section>



<section class="latest_blog_post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title">
                    <h1 class="text-white">Latest
                        <br> Blog Posts.</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="single_travel wow fadeInUp" data-wow-duration="1s">
                    <figure>
                        <img class="img-fluid w-100" src="fantasy/img/blog-post/b1.jpg" alt="">
                    </figure>
                    <div class="overlay" style="bottom: 60px;"></div>
                    <div class="text-wrap"  style="bottom: 130px;">
                        <h3>
                            <a href="#" class="text-size">Waterfall Travel</a>
                        </h3>
                        <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                            <div class="meta">
                                <a href="#">
                                    <span class="icon fa fa-calendar"></span> March 14, 2018
                                    <span class="icon fa fa-comments"></span> 05
                                </a>
                            </div>
                            <div>
                                <a class="read_more text-white" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <figure>
                        <img class="img-fluid w-100" src="fantasy/img/blog-post/b2.jpg" alt="">
                    </figure>
                    <div class="overlay" style="bottom:100px"></div>
                    <div class="text-wrap" style="bottom:120px" >
                        <h3>
                            <a style="font-size: 25px;" href="#">Waterfall Mountain Island</a>
                        </h3>
                        <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                            <div class="meta">
                                <a href="#">
                                    <span class="icon fa fa-calendar"></span> March 14, 2018
                                    <span class="icon fa fa-comments"></span> 05
                                </a>
                            </div>
                            <div>
                                <a class="read_more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <figure>
                        <img class="img-fluid w-100" src="fantasy/img/blog-post/b3.jpg" alt="">
                    </figure>
                    <div class="overlay" style="bottom: 40px;"></div>
                    <div class="text-wrap" style="bottom: 80px;">
                        <h3>
                            <a style="font-size: 25px;" href="#">Waterfall Mountain Island</a>
                        </h3>
                        <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                            <div class="meta">
                                <a href="#">
                                    <span class="icon fa fa-calendar"></span> March 14, 2018
                                    <span class="icon fa fa-comments"></span> 05
                                </a>
                            </div>
                            <div>
                                <a class="read_more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single_travel wow fadeInUp mt--60" data-wow-duration="1s" data-wow-delay=".6s">
                    <figure>
                        <img class="img-fluid w-100" src="fantasy/img/blog-post/b4.jpg" alt="">
                    </figure>
                    <div class="overlay" style="bottom: 50px;"></div>
                    <div class="text-wrap" style="bottom: 70px;">
                        <h3>
                            <a  style="font-size: 25px;" href="#">Waterfall Mountain Island</a>
                        </h3>
                        <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                            <div class="meta">
                                <a href="#">
                                    <span class="icon fa fa-calendar"></span> March 14, 2018
                                    <span class="icon fa fa-comments"></span> 05
                                </a>
                            </div>
                            <div>
                                <a class="read_more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single_travel wow fadeInUp mt--60" data-wow-duration="1s" data-wow-delay=".8s">
                    <figure>
                        <img class="img-fluid w-100" src="fantasy/img/blog-post/b5.jpg" alt="">
                    </figure>
                    <div class="overlay" style="bottom: 70px;"></div>
                    <div class="text-wrap" style="bottom: 80px;">
                        <h3>
                            <a style="font-size: 25px;" href="#">Waterfall Mountain Island</a>
                        </h3>
                        <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                            <div class="meta">
                                <a href="#">
                                    <span class="icon fa fa-calendar"></span> March 14, 2018
                                    <span class="icon fa fa-comments"></span> 05
                                </a>
                            </div>
                            <div>
                                <a class="read_more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <figure>
                        <img class="img-fluid w-100" src="fantasy/img/blog-post/b6.jpg" alt="">
                    </figure>
                    <div class="overlay" style="bottom: 50px;" ></div>
                    <div class="text-wrap" style="bottom: 70px;" >
                        <h3>
                            <a style="font-size: 25px;" href="#">Waterfall Travel</a>
                        </h3>
                        <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                            <div class="meta">
                                <a href="#">
                                    <span class="icon fa fa-calendar"></span> March 14, 2018
                                    <span class="icon fa fa-comments"></span> 05
                                </a>
                            </div>
                            <div>
                                <a class="read_more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-7 col-lg-4">
                <div class="blog-meta bottom d-flex justify-content-end align-items-center">
                    <div>
                        <a class="read_more text-white" href="#">Load More Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Latest Blog Area =================-->

<!--================ Places Area =================-->
<section class="different_places">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title">
                    <h1 class="text-white">Let Us Find Your Places Within a Sec.</h1>
                    <p>
                        There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
                        exciting to think
                        about setting up your own viewing station.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_place wow fadeIn text-center mt-480" data-wow-duration="1s">
                    <img class="img-fluid w-100" src="fantasy/img/places/p1.jpg" alt="">
                    <div class="overlay"></div>
                    <h4>Waterfall
                        <br> Mountain Island</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".2s">
                    <img class="img-fluid w-100" src="fantasy/img/places/p2.jpg" alt="">
                    <div class="overlay"></div>
                    <h4>Waterfall
                        <br> Mountain Island</h4>
                </div>
                <div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="1s">
                    <img class="img-fluid w-100" src="fantasy/img/places/p3.jpg" alt="">
                    <div class="overlay"></div>
                    <h4>Waterfall
                        <br> Mountain Island</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".4s">
                    <img class="img-fluid w-100" src="fantasy/img/places/p4.jpg" alt="">
                    <div class="overlay"></div>
                    <h4>Waterfall
                        <br> Mountain Island</h4>
                </div>
                <div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".8s">
                    <img class="img-fluid w-100" src="fantasy/img/places/p5.jpg" alt="">
                    <div class="overlay"></div>
                    <h4>Waterfall
                        <br> Mountain Island</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".6s">
                    <img class="img-fluid w-100" src="fantasy/img/places/p6.jpg" alt="">
                    <div class="overlay"></div>
                    <h4>Waterfall
                        <br> Mountain Island</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>

</footer>

<div id="back-top">
    <a title="Go to Top" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
</template>


