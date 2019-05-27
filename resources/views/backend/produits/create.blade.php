@extends('layouts.backend')

@section('content')
    <h3>Ajouter un produit</h3>
        <div class="row ">
            <div class="col-md-8 offset-md-2">
                <div class="card p-4">

                    <form action="{{route('produit.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                      @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nom">Nom du produit <span class="text-danger">*</span></label>
                                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid  @enderror" value="{{ old('nom') }}">
                                @error('nom')
                                    <p class="text-danger text-small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="categorie_id">Catégorie du produit <span class="text-danger">*</span></label>
                                <select name="categorie_id" id="categorie_id" class="form-control @error('categorie_id') is-invalid  @enderror" >
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                    @endforeach
                                </select>
                                @error('categorie_id')
                                <p class="text-danger text-small">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="prix">Prix du produit <span class="text-danger">*</span></label>
                                <input type="text" name="prix" id="prix" class="form-control @error('prix') is-invalid  @enderror" value="{{ old('prix') }}">
                                @error('prix')
                                <p class="text-danger text-small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image">Image du produit <span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid  @enderror" value="{{ old('image') }}" >
                                @error('image')
                                 <p class="text-danger text-small">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description du produit <span class="text-danger">*</span></label>
                            <textarea name="description" id="description"  rows="3" class="form-control @error('description') is-invalid  @enderror" >{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-danger text-small">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="detail">Détail du produit </label>
                            <textarea name="detail" id="detail"  rows="3" class="form-control" ></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
                        </div>

                    </form>


                </div>
            </div>

        </div>


@endsection

