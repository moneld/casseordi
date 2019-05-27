@extends('layouts.backend')

@section('title','Tous les produits')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table id="dataTables" class="table table-borderless table-data3 text-white">
                <thead>
                <tr>
                    <td style="width: 35% !important;">Nom</td>
                    <td style="width: 20% !important;">Catégorie</td>
                    <td style="width: 15% !important;">Prix</td>
                    <td style="width: 20% !important;">Date de création</td>
                    <td style="width: 10% !important;">Action</td>
                </tr>
                </thead>

                <tbody>
                    @foreach($produits as $produit)
                        <tr>
                            <td>{{$produit->nom}}</td>
                            <td>{{$produit->categorie}}</td>
                            <td>{{$produit->prix}}</td>
                            <td>{{formatDate($produit->created_at)}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Action">
                                    <a href="#" class="btn btn-secondary"  data-toggle="tooltip" data-placement="top" title="Détail du produit"><i class="fas fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="Modifier le produit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="Supprimer le produit"><i class="fas fa-trash-alt"></i></a>

                                </div>
                            </td>
                        </tr>



                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


