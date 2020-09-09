@extends('admin.app')

@section('content')


@if (count($errors) > 0)
      <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
                </ul>
            </div>
 @endif

 @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}        
        </div>
@endif

@if (session()->has('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}        
        </div>
@endif

@if (session()->has('secondary'))
        <div class="alert alert-secondary">
            {{ session()->get('secondary') }}        
        </div>
@endif

    <div class="box">
        <div class="box-header">
        <h3 class="box-title">Category Information</h3>
        <p><a href="" class="btn btn-primary">Nouvelle catégories</a></p>
 
       </div>

       <div class="box-body">
       <table class="table table-condensed">
      <tr>
          <td>#</td>
          <td>Name</td>
          <td>Description</td>
          <td>Active</td>
          <td>Created</td>
          <td>Last Update</td>
          <td>Image</td>
          <td>Editer</td>
          <td>Supprimer</td>
      </tr>
   
  
   </table>
     </div>

     <div class="container">
         <p>{{ $categories->links() }}</p>
     </div>


@endsection