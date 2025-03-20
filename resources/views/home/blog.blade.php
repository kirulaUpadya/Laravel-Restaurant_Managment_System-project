<div id="blog" class="py-5 text-center container-fluid bg-dark text-light wow fadeIn">
  <h2 class="py-5 section-title">Our All Foods</h2>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row">

        @foreach($data as $data)

        <div class="col-md-4">
          <div class="my-3 bg-transparent border card my-md-0">
            <img height="350" src="food_img/{{$data->image}}" class="rounded-0 card-img-top mg-responsive">
            <div class="card-body">
              <h1 class="mb-4 text-center"><a href="#" class="badge badge-primary">{{$data->price}}</a></h1>
              <h4 class="pt20 pb20">{{$data->title}} </h4>
              <p class="text-white">{{$data->detail}} </p>
            </div>

            <form action="{{url('add_cart', $data->id)}}" method="post">

              @csrf

              <input name="qty" value="1" type="number" min="1" required>

              <input class="btn btn-info" type="submit" value="Add to Cart">

            </form>

            <br /><br /><br />


          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</div>