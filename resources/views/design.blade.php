@extends('main')

@section('content')
   <section class="iq-features">
      <div class="container">
         <div>
            <a href="{{('services')}}" style="background-color:black;padding:15px;">Back</a>
         </div>
         <div class="row align-items-center">
            <div class="section-title">
               <h1>Designing Logo and Video Editing</h1>
               <p>Video editing is the manipulation and arrangement of video shots. 
                    Video editing is used to structure and present all video information,
                     including films and television shows, video advertisements and video essays. 
                     Video editing has been dramatically democratized in recent years by editing 
                     software available for personal computers. Editing video can be difficult and tedious, 
                     so several technologies have been produced to aid people in this task. Pen based video 
                     editing software was developed in order to give people a more intuitive and fast way to edit video.
                     A logo is the central element of a complex identification system that must be functionally 
                     extended to all communications of an organization. Therefore, the design of 
                     logos and their incorporation in a visual identity system is one of the most 
                     difficult and important areas of graphic design.</p>
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
               <div class="pic"><img src="{{asset('assets/img/team/p3.jpg')}}" class="img-fluid" alt=""></div>
               <div class="member-info">
                <h4>Pankaj</h4>
                <span>Designer and Editor</span>
                <p>cinematographer, photographer/editor
                   with the experience of 5yrs in this area.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
               <div class="pic"><img src="{{asset('assets/img/team/p6.jpg')}}" class="img-fluid" alt=""></div>
               <div class="member-info">
                <h4>Arjun Sha</h4>
                <span>Product design</span>
                <p>He has been involved in webnet in internal audit, 
                  policy design, product design and a cofounder for a change</p>
              </div>
            </div>
         </div>
      </div>
   </section><!-- End Team Section -->

@endsection