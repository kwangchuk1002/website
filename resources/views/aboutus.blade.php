@extends('main')

@section('content')
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>About Us</h2>
    </div>
    <div class="row content">
      <div class="col-lg-6">
        <p><b>WebNet</b> is a development of web-based software,
               desktop software, mobile app (application), website,
               designing logo, photography and video editing.
              where users can access via a web browser on any 
              device with internet access,
              WebNet provides businesses with environment and
              assistance to make significant business connections 
              on demand.
        </p>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p><b>Our Specialties</b></p>
          <i class="fa fa-bar-chart-o">&nbsp;Online (or Web) Software development</i><br>
          <i class="fa fa-bar-chart">&nbsp;Offline (or Desktop) Software development</i><br>
          <i class="fa fa-bar-chart">&nbsp;Application (App) development</i><br>
          <i class="fa fa-bar-chart">&nbsp;Website development</i><br>
          <i class="fa fa-bar-chart">&nbsp;Designing logo</i><br>
          <i class="fa fa-bar-chart">&nbsp;Video editing</i>
      </div>
    </div>
  </div>
  </section><!-- End About Us Section -->
    <!-- ======= Why Us Section ======= -->
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
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/img/skills.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Programming Language We Use</h3>
            <div class="skills-content">
              <div class="progress">
                <span class="skill">Python <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">PHP <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="progress">
                <span class="skill">React.js <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="progress">
                <span class="skill">mySQL<i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="progress">
                <span class="skill">JAVA<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->
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
              </figure>
            </i><br>    
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
              </figure>
            </i>
          </div>
        </div>
      </div>
    </section>
    @endsection