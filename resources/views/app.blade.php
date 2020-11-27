@extends('main')

@section('content')
   <section class="iq-features">
      <div class="container">
         <div>
            <a href="{{('services')}}" style="background-color:black;padding:15px;">Back</a>
         </div>
         <div class="row align-items-center">
            <div class="section-title">
               <h1>Mobile Application(app)</h1>
                  <p>A mobile application, also referred to as a mobile app or simply an app, 
                     is a computer program or software application designed to run on a mobile device such as a 
                     phone, tablet, or watch. Apps were originally intended for productivity assistance such
                     as email, calendar, and contact databases, but the public demand for apps caused rapid
                     expansion into other areas such as mobile games, factory automation,
                     GPS and location-based services, order-tracking, and ticket purchases, 
                     so that there are now millions of apps available. Apps are generally downloaded 
                     from application distribution platforms which are operated by the owner of the
                     mobile operating system, such as the App Store (iOS) or Google Play Store.
                     Some apps are free, and others have a price, with the profit
                     being split between the application's creator and the distribution platform. 
                     Mobile applications often stand in contrast to desktop applications
                     which are designed to run on desktop computers, and web applications 
                     which run in mobile web browsers rather than directly on the mobile device.
                  </p>
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
            <div class="col-lg-6 mt-4">
               <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="{{asset('assets/img/team/p7.jpg')}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                     <h4>Deepak Chauhan</h4>
                     <span>Developer</span>
                     <p>Developer and designer, developing, testing, and maintaining Android applications in the industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 mt-4">
               <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
               <div class="pic"><img src="{{asset('assets/img/team/p5.jpg')}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                     <h4>Kamakhya Singh</h4>
                     <span>Developer</span>
                     <p>Android mobile application developer with rich experience 
                                    in app development to fulfill all user desires</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section><!-- End Team Section -->

@endsection