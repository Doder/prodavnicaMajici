@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify">
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
				
                    <div class="owl__item"> <img src="img/item1.jpg"> 
                          <div class=" container">
                              <div class="row">
                                  <div class="col-md-10">
                                      <h1>NAPRAVLJENO ZA SVAKOGA</h1>
                                      <h4>Napravite svoju zeljenu majicu u samo par minuta, ili izaberite neku iz nase ponude!
                                      </h4>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3">
                                      <button type="button" class="btn btn-block btn-lg slajd_dugme">USUDI SE</button>
                                  </div>
                              </div>
                        </div>
                    </div>
                    
                    <div class="owl__item"> <img src="img/item2.jpg">
                        <div class=" container">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-7">
                                    <h1 class="text-right">BUDI IN</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <h1 class="text-right">PRATI KORAK</h1>
                                    <div>
                                        <h4 class="text-right"> Majice su izuzetnog kvaliteta i raznovrsnog dizajna.
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <button type="button" class="btn btn-block btn-lg slajd_dugme">RAZGLEDAJ</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="owl__item"> <img src="img/item3.jpg">
                        <div class=" container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="h1__background">CISTA SLIKA</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="h1__background">VRHUNSKI KVALITET</h1>
                                </div>
                            </div>
                            <div>
                                <h4 class="div__item--bruise">Screen print tehnologija, dugotrajna slika i kvalitet.</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-block btn-lg slajd_dugme">RAZGLEDAJ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="owl__item"> <img src="img/item4.jpg"> 
                        <div class="  container">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-5">
                                    <h1 class="h1__background">PUSTI MASTU</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <h1 class="h1__background">NA VOLJU</h1>
                                    <div>
                                        <h4 style="text-align: right;">Imas ideju za svoju majicu? Kontaktiraj nas!</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <button type="button" class="btn btn-block btn-lg slajd_dugme">KONTAKT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
    </div>
     <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    

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


