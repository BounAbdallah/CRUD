@extends('articles.layout')
    
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Ajout d'article </h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('articles.index') }}"><i class="fa fa-arrow-left"></i> Rétour</a>
    </div>
  
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
  
        <div class="mb-3">
            <label for="inputNom" class="form-label"><strong>Nom:</strong></label>
            <input 
                type="text" 
                name="nom" 
                class="form-control @error('nom') is-invalid @enderror" 
                id="inputNom" 
                placeholder="Nom">
            @error('nom')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="mb-3">
            <label for="inputDescription" class="form-label"><strong>Description:</strong></label>
            <textarea 
                class="form-control @error('detail') is-invalid @enderror" 
                style="height:150px" 
                name="description" 
                id="inputDetail" 
                placeholder="Description"></textarea>
            @error('detail')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputImage_url" class="form-label"><strong>Description:</strong></label>
            <textarea 
                class="form-control @error('image_url') is-invalid @enderror" 
                style="height:150px" 
                name="image_url" 
                id="inputImage_url" 
                placeholder="Image_url"></textarea>
            @error('image_url')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Enrégistrer</button>
    </form>
  
  </div>
</div>
@endsection