@extends('layouts.backend')

@section('title','Catégories')

@section('content')
    <div class="row">
        <button type="button" class="btn btn-primary ml-auto " style="margin-bottom: 2%; margin-right: 10px;">Ajouter une catégorie</button>
        <div class="col-md-12">
            <table id="dataTables" class="table table-borderless table-data3 text-white">
                <thead>
                <tr>
                    <td style="width: 35% !important;">Nom</td>

                    <td style="width: 10% !important;">Action</td>
                </tr>
                </thead>

                <tbody>
                    @foreach($categories as $categorie)
                           <tr>
                               <td>{{$categorie->nom}}</td>
                               <td>
                                   <div class="btn-group" role="group" aria-label="Action">
                                       <a href="#" class="btn btn-secondary"  data-toggle="tooltip" data-placement="top" title="Voir les produits liés"><i class="fas fa-eye"></i></a>
                                       <a href="#" class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="Modifier la catégorie"><i class="fas fa-pencil-alt"></i></a>
                                       <a href="#" class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="Supprimer la catégorie"><i class="fas fa-trash-alt"></i></a>
                                   </div>
                               </td>
                           </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


