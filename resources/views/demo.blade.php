@extends('layouts.mainlayout',['title' => $title])
 
@section('content')

  <div class="bs-docs-section">      

        <div class="row">
          <div class="col-lg-12">
            <h2>Cards</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Primary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h4 class="card-title">Primary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              
             
            </div>
          </div>

        
        </div>

      </div>

 

@endsection
 
