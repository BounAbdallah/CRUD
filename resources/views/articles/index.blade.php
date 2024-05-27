@extends('articles.layout')
   
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">CRUD en Laravel 11 </h2>
  <div class="card-body">
          
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('articles.create') }}"> <i class="fa fa-plus"></i> Créer un Produit</a>
        </div>
  
       <table class="table table-bordered table-striped mt-4">
    <thead>
        <tr>
            <th width="80px">No</th>
            <th>Nom</th>
            <th>Details</th>
            <th>Image</th>
            <th width="250px">Action</th>
        </tr>
    </thead>
    <tbody>
        @php $i = 0; @endphp
        @forelse ($articles as $article)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $article->nom }}</td>
                <td>{{ $article->description }}</td>
                <td><img src="{{ $article->image_url }}" alt=""></td>
                <td>
                    <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('articles.show',$article->id) }}"><i class="fa-solid fa-list"></i> Voir</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('articles.edit',$article->id) }}"><i class="fa-solid fa-pen-to-square"></i> Mod</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Supp</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Pas des produits trouver .</td>
            </tr>
        @endforelse
    </tbody>
</table>



