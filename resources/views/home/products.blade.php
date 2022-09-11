<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
            @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_ditail', $products->id)}}" class="option1">
                           More Ditails
                           </a>

                           <form action="{{url('add_card', $products->id)}}" method="post">

                           @csrf 
                              <div class="row">
                                 <div class="col-md-4">
                                    <input type="number" name="quantity" value="1" min="1" style="width:100px">
                                 </div>
                                 <div class="col-md-4">
                                    <input type="submit" value="Add To Cart">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{url('/product', $products->image)}}" alt="">
                     </div>
                     <div class="detail-box" >
                        <h5>
                           {{$products->title}}
                        </h5>
                        @if($products->discount_price != null)
                        <h6 style="color:red">
                        After Discount
                        <br>
                           {{$products->discount_price}}TL
                        </h6>    
                        <h6 style="text-decoration:line-through; color:blue">
                        Price   
                        <br>
                           {{$products->price}}TL
                        </h6>                    
                        @else
                        <h6 style="color:blue">
                        Price
                        <br>
                           {{$products->price}}TL
                        </h6>
                        @endif
                     </div>
                  </div>
               </div>
         @endforeach

            <span class="text-center">
                  {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
            </span>
      </section>