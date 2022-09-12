@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="text-center my-5">
                    <div class="card d-block mx-auto" style="width: 30rem;">
                      <div class="card-body">
                        <h5 class="card-title fw-bolder">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">{{ $post->post_text }}</h6>
                        <p class="card-text mb-0">{{ $post->created_at }}</p>
                      </div>
                    </div>
                </div>
            </div>
@endsection
