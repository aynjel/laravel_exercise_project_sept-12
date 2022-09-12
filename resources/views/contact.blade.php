@extends('layouts.app')

@section('content')
            <div class="container mx-auto" style="max-width: 600px;">
                <div class="text-left my-5">
                    <h1 class="fw-bolder">Contact</h1>
                    <hr>
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <br>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Message</label>
                          <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                </div>
            </div>
@endsection
