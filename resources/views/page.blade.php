@extends('main')

@section('content')
  <section id="hero" class="d-flex align-items-center" style="background-color:#303030;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We Make Beautiful Things</h2>
          <div class="d-lg-flex">
            <a href="{{('contact')}}" class="btn-get-started scrollto">Hire Us</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <section class="iq-features">
    <div class="container">
      <div class="row align-items-center">
        <div class="section-title">
          <h2>What we do?</h2>
        </div>
        
        <div class="col-lg-6 col-md-12">
          <div class="holderCircle">
              <div class="round"></div>
              <div class="dotCircle">
                <span class="itemDot active itemDot1" data-tab="1" title="Online system Software">
                  <i class="fa fa-laptop" ></i>
                  <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot2" data-tab="2"title="Desktop software">
                  <i class="fa fa-desktop"></i>
                  <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot3" data-tab="3"title="Website">
                  <i class="fa fa-globe"></i>
                  <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot4" data-tab="4"title="Mobile App">
                  <i class="fa fa-mobile"></i>
                  <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot5" data-tab="5"title="Designing Logo">
                  <i class="fa fa-drafting-compass"></i>
                  <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot6" data-tab="6"title="Video Editing">
                  <i class="fa fa-film"></i>
                  <span class="forActive"></span>
                </span>
                </div>
                <div class="contentCircle">
                  <div class="CirItem title-box active CirItem1">
                    <h2 class="title"><span>Online system Software</span></h2>
                    <p>Online software is web-based software which runs on internet</p>
                    <i class="fa fa-laptop"></i>
                  </div>
                  <div class="CirItem title-box CirItem2">
                     <h2 class="title"><span>Desktop software</span></h2>
                      <p>Offline software is any software that doesn't connect to a network such as the internet.</p>
                      <i class="fa fa-desktop"></i>
                  </div>
                  <div class="CirItem title-box CirItem3">
                    <h2 class="title"><span>Website</span></h2>
                    <p>A website is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. </p>
                    <i class="fa fa-globe"></i>
                  </div>
                  <div class="CirItem title-box CirItem4">
                    <h2 class="title"><span>Mobile App</span></h2>
                    <p>Mobile app or simply an app,is a software application designed to run on a mobile device</p>
                    <i class="fa fa-mobile"></i>
                  </div>
                  <div class="CirItem title-box CirItem5">
                    <h2 class="title"><span>Designing Logo</span></h2>
                    <p>Logo design is all about creating the perfect visual brand mark for a company.</p>
                    <i class="fa fa-drafting-compass"></i>
                  </div>
                  <div class="CirItem title-box CirItem6">
                    <h2 class="title"><span>Video Editing</span></h2>
                    <p>Video editing is the process of manipulating and rearranging video shots to create a new work.</p>
                    <i class="fa fa-film"></i>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-12"></div>
        </div>
      </div>
    </div>
  </section>
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h3>Expertise</strong></h3>
              <p>
              With a framework being the backbone for any development, it becomes crucial to have an independent, robust architecture, consisting of high
               – performance programming languages suitable for web, mobile & desktop app development.
              </p><br>
            </div>
            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span>Web app, desktop software, website and Mobile App<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                    Our team have done projects on web app, web software, mobile app and desktop software.
                    Our team can do any project in above mention field.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span>Desiging and video Editing<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                    Our team done logo designing project.
                    Our team can design logo and video editing as per require.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>
      </div>
    </section><!-- End Why Us Section -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>We make Beautiful things</h2>
          <p>Be part of Our Story</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('assets/img/m1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Website</h4>
              <a href="{{asset('assets/img/m1.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="website">View</i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('assets/img/m2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App</h4>
              <a href="{{asset('assets/img/m2.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App">View</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('assets/img/m3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Online software</h4>
              <a href="{{asset('assets/img/m3.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Online Software">View</a>
            </div>
          </div>
      </div>
    </section>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 col-md-6">
            <i>
          <blockquote class="mb-5">
          <p>&ldquo;A robust congratulations to the team at WebNet for a job well done.
                    We've been trying to put together a functional website since I began my practice in April of 2012. 
                    I am happy to say we finally hired the team at WebNet, and they've worked closely with us throughout the process, staying on task, on target, and on budget. I also appreciate their quick and courteous responses. 
                    I highly recommend their service!&rdquo;</p>
        </blockquote>
        <figure class="mb-4 d-flex align-items-center justify-content-center">
          <p>-Tshewang (terton football club)</p>
        </figure></i><br>    
          </div>
          <div class="col-lg-6 col-md-6">
          <i>
        <blockquote class="mb-5">
          <p>&ldquo;We thank WebNet for the wonderful job in helping us develop our program. 
                Everyone was professional, excellent and hard working. 
                Thanks to them, we were able to achieve our goal on time, and we look forward to continue working with them in the future.&rdquo;</p>
        </blockquote>
        <figure class="mb-4 d-flex align-items-center justify-content-center">
          <p>-Chencho</p>
        </figure></i>
          </div>
        </div>
      </div>
    </section>
  @endsection