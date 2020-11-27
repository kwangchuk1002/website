@extends('main')

@section('content')
<!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Best Team</p>
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

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{asset('assets/img/team/p2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Basant Khatri</h4>
                <span>Developer</span>
                <p>Graphics designer and full stack web developer, front end and php with laravel framework for backend.</p>
              </div>
            </div>
          </div>

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
      </div>
    </section><!-- End Team Section -->
@endsection