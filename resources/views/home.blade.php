@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        Question title here
                    </div>
                    <div class="col-md-2">
                        <!-- <p class="float-right"><input type="submit" value="Ask Question"></p> -->
                        <a href="{{route('askquestion')}}" class="btn btn-primary">Ask Question</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        Asked  ago.
                        Viewed  times
                    </div>
                </div>
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-success"> <i class="icon-thumbs-up"></i></button>
                            <span class="">0</span>
                            <button type="button" class="btn btn-danger"><i class="icon-thumbs-down"></i></button>
                        </div>
                        <div class="col-md-7">
                            Quetion body
                        </div>
                        <div class="col-md-3 bg-info">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@include('layouts.left_nav')
@endsection
