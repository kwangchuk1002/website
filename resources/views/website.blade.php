@extends('main')

@section('content')
   <section class="iq-features">
      <div class="container">
      <div>
         <a href="{{('services')}}"style="background-color:black;padding:15px;">Back</a>
      </div>
      <div class="row align-items-center">
         <div class="section-title">
            <h1>Website</h1>
            <p>A website (also written as web site) is a collection of web pages and related 
                    content that is identified by a common domain name and published on at least one web server. 
                    Notable examples are wikipedia.org, google.com, and amazon.com.
                    All publicly accessible websites collectively constitute the World Wide Web. 
                    There are also private websites that can only be accessed on a private network, 
                    such as a company's internal website for its employees.
                    Websites are typically dedicated to a particular topic or purpose, 
                    such as news, education, commerce, entertainment, or social networking. 
                    Hyperlinking between web pages guides the navigation of the site, which often starts with a home page.
                    Users can access websites on a range of devices, including desktops, laptops, tablets, and smartphones. 
                     The software application used on these devices is called a web browser.</p>
         </div>
         <div class="col-lg-3 col-md-12"></div>
         <div class="col-lg-6 col-md-12">
            <div class="holderCircle">
               <div class="round"></div>
               <div class="dotCircle">
                  <span class="itemDot active itemDot1" data-tab="1">
                     <i class="fa fa-laptop"></i>
                     <span class="forActive"></span>
                  </span>
                  <span class="itemDot itemDot2" data-tab="2">
                     <i class="fa fa-desktop"></i>
                     <span class="forActive"></span>
                  </span>
                  <span class="itemDot itemDot3" data-tab="3">
                     <i class="fa fa-globe"></i>
                     <span class="forActive"></span>
                  </span>
                  <span class="itemDot itemDot4" data-tab="4">
                     <i class="fa fa-mobile"></i>
                     <span class="forActive"></span>
                  </span>
                  <span class="itemDot itemDot5" data-tab="5">
                     <i class="fa fa-drafting-compass"></i>
                     <span class="forActive"></span>
                  </span>
                  <span class="itemDot itemDot6" data-tab="6">
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
   </section>
   <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Expert</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{asset('assets/img/team/p1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Chencho Gyeltshen</h4>
                <span>Developer</span>
                <p>Full stack Web developer and web-based system developer and desktop application developer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{asset('assets/img/team/p4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kinley Wangchuk</h4>
                <span>Developer</span>
                <p>Full stack web developer and web system software 
                  developer with PHP with laravel framework for backend.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
   </section><!-- End Team Section -->

@endsection