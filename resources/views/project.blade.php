@extends('main')

@section('content')
<!-- ======= Project Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Project</h2>
          <p>beautiful project done by our team</p>
        </div>
        <div class="col-lg-12">
                <div class="card" >
                    <div class="card-header"style="background:#e6e3e3; text-align:center;color:#black;" >
                        <strong >Project completed</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        @foreach ($photo as $data)
                            <div class="col-md-4">
                                <div class="portfolio-img"><img src="{{asset('images/'.$data->photos)}}" style="width:300px;height:200px;align:middle;margin-bottom:15px;margin-top:15px;margin-left:15px;" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <div align="center"><a href="{{asset('images/'.$data->photos)}}" data-gall="portfolioGallery" class="venobox preview-link">view</a></div>
                                </div>
                            </div><br><br>
                        @endforeach 
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section><!-- End Project Section -->
    @endsection