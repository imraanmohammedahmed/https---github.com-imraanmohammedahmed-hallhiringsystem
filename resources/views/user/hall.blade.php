<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Halls</h2>
              <a href="halls.html">view all halls<i class="fa fa-angle-right"></i></a>
            </div>
          </div>

@foreach($data as $halls)
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="/hallimage/{{$halls->image}}" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>{{$halls->title}}</h4></a>
                          <h6>${{$halls->price}}/Per Day</h6>
                          <p>{{$halls->description}}</p>
                        </div>
                      </div>
                    </div>

                    @endforeach

                    <div class="d-flex justify-content-center">
                      {!! $data->links() !!}

</div>
                </div>
            </div>
          </div>