@extends('layouts.app')

@section('page_style')
    <link rel="stylesheet" href="{{asset('css/wmd.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            Question title here
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{route('askquestion.create')}}" method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="title" class="font-weight-bold">Title</label>
                                    <small class="form-text text-muted">Be specific and imagin you are asking a question to another person</small>
                                    <input type="text" name="title" id="title" class="col-md-12 form-control {{ $errors->has('title') ? ' is-invalid ' : ' '}}" placeholder="e.g. How to write an Artisan command to generate a model?">
                                    @if($errors->has('title'))
                                        <div class="invalid-feedback">{{$errors->first('title')}}</div>
                                    @endif  
                                </div>
                            </div>

                            <div class="row py-4">
                                <div class="col">
                                    <label for="body" class="font-weight-bold">Body</lable>
                                    <div id="toolbar" class="wmd-toolbar"></div>
                                        <small class="form-text text-muted">Mention all the details and information someone would needed to answer your question.</small>
                                        <textarea cols="150" rows="15" name="question" id="question" class="form-control wmd-inputcl col-md-12 {{ $errors->has('question') ? ' is-invalid ' : ' '}}"></textarea>
                                        @if($errors->has('question'))
                                        <div class="invalid-feedback">{{$errors->first('question')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="tags" class="font-weight-bold">Tags</label>
                                    <small class="form-text text-muted">Add tags to describe what your question is about</small>
                                    <input type="text" name="tags" id="tags" class="col-md-12 form-control {{ $errors->has('tags') ? ' is-invalid ' : ' '}}" placeholder="e.g. (laravel php)">
                                    @if($errors->has('tags'))
                                        <div class="invalid-feedback">{{$errors->first('tags')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Post Your Question" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('page_scripts')
    <script src="{{asset('js/wmd.js')}}" type="text/javascript"></script>
@endsection