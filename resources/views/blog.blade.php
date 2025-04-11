@extends('app')

@section('content')
  <!-- blog section -->

  <section class="blog_section layout_padding-bottom layout_padding2-top mb-5">
    <div class="container">
      <div class="heading_container">
        <h2 class="text-white">
          Our Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/b-1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h3>
                New FOOC Products
              </h3>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/b-2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h3>
                New FOOC Products
              </h3>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->
@endsection