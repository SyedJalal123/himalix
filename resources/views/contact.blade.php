@extends('app')

@section('content')
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <h2 class="">
        Request A Call Back
      </h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex justify-content-center">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- end contact section -->
@endsection