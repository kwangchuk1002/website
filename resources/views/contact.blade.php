
@extends('main')

@section('content')
<!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Contact</h2>
      </div>
      <div class="row">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Thimphu, main Town</p>
            </div>
            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>webnets2020@gmail.com</p>
            </div>
            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+975 17611798/+975 17585081</p>
            </div>
          </div>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{route('contact-input')}}" method="post" role="form" >
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="number">Number</label>
              <input type="text" class="form-control" name="number" id="number"  required/>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <select class="form-control" name="subject" id="subject" required/>
                <option>Select your subject</option>
                <option value="Online Software">Online Software</option>
                <option value="Offline Software">Offline Software</option>
                <option value="Website">Website</option>
                <option value="Application">Application(App)</option>
                <option value="Logo designing">Logo designing</option>
                <option value="Video Editing">Video Editing</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message">Details</label>
              <textarea class="form-control" name="message" id="message" required></textarea>
              <div class="validate"></div>
            </div>
            <div class="col-md-12" align="center">
              <input type="submit" class="btn btn-primary btn-md text-white" >
            </div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
@endsection