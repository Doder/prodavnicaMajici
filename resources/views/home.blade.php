@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!


                        

                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div id="owl-carousel" class="owl-carousel owl-theme">
				
                    <div class="owl__item"> <img src="img/item1.png"> 
                          <div class="owl__item__div container">
                              <div class="row">
                                  <div class="col-md-10 col content-center">
                                      <h1>MADE FOR DESIGNERS</h1>
                                      <h4>Create your online portfolio in minutes  with the professionally and lovingly designed REEN website template. Customize your site with versatile and easy to use features.
                                      </h4>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3 content-center">
                                      <button type="button" class="btn btn-block btn-lg slajd_dugme">GET STARTED NOW</button>
                                  </div>
                              </div>
                        </div>
                    </div>
                    
                    <div class="owl__item"> <img src="img/item2.png">
                        <div class="owl__item__div container">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-7">
                                    <h1 class="text-right">FRESH AND</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <h1 class="text-right">BEAUTIFUL DESIGN</h1>
                                    <div>
                                        <h4 class="text-right">REEN is designed to showcase your talent and put your work in the forefront.<br>Professionally use of typography and layout that fits your content.
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <button type="button" class="btn btn-block btn-lg slajd_dugme">GET STARTED NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="owl__item"> <img src="img/item3.png">
                        <div class="owl__item__div container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="h1__background">CLEAN AND</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="h1__background">REUSABLE CODE</h1>
                                </div>
                            </div>
                            <div>
                                <h4 class="div__item--bruise">The clean code allows you to easily copy code blocks from content<br>modules and past them in different places or layouts.</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-block btn-lg slajd_dugme">GET STARTED NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="owl__item"> <img src="img/item4.png"> 
                        <div class=" owl__item__div container">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-5">
                                    <h1 class="h1__background">JUST FOCUS ON</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <h1 class="h1__background">YOUR CREATIVITY</h1>
                                    <div>
                                        <h4 style="text-align: right;">Take a break from messing around with heavy coding and spend your<br> time brainstorming ideas for your next project.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <button type="button" class="btn btn-block btn-lg slajd_dugme">GET STARTED NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl__item"> <img src="img/item5.png">
                        <div class="owl__item__div container">
                            <div class="row">
                                <div class="col-md-8 content-center">
                                    <h1>SHOWCASE<br> YOUR CONTENT</h1>
                                </div>
                            </div>
                              <div class="row">
                                  <div class="text-center ">
                                      <h4 class="div__item--grey">With REEN you have the possibility to create websites for various contents<br> quickly and easily. Now it's up to 	you!
                                      </h4>
                                  </div>
                                  <div class="col-md-3 content-center">
                                    <button type="button" class="btn btn-block btn-lg slajd_dugme">GET STARTED NOW</button>
                                </div>
                            </div>
                          </div>
                    </div>
                 </div>
    </div>
</div>

<script>

    
        $("#owl-carousel").owlCarousel({
            items: 1,
            singleItem: true,
            rewind: true,
        });
        
        //alert("ddd");
        
        
    
</script>
@endsection


