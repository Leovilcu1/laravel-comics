@extends('layout.main')
@section('myMaine')
    <div class="jumbotron">
    </div>
    <div class="section-card bg-dark bg-gradient text-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-6 g-4">
                @foreach ($comics as $comic)
                    <div class="col">
                      <div class="card h-100 bg-transparent">
                        <img src="{{ Vite::asset('resources/img/img4.jpg') }}" class="card-img-top" alt="">
                        <div class="card-footer">
                          <h5 class="card-title">{{ $comic["title"] }}</h5>
                        </div>
                      </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center ">
                <button class="bg-primary fs-4 text-white m-4 p-2 px-5">Load More</button>   
            </div>

        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
@endsection

  