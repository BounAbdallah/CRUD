@extends('articles.layout')
  
@section('content')

<div class="card mt-5">
  <h2 class="card-header">Voir l'article </h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('articles.index') }}"><i class="fa fa-arrow-left"></i> Rétour</a>
    </div>
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong> <br/>
                {{ $article->nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Description:</strong> <br/>
                {{ $article->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Image:</strong> <br/>
               <img src="{{ $article->image_url }}" alt=""> 
            </div>
        </div>
    </div>
  
  </div>
</div>
@endsection