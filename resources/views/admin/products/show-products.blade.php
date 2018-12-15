@extends('admin.dashboard')

@section('content')
    <div class="container">
        <hr/>
        <a class="btn btn-outline-primary" href="{{route('admin.products.create')}}" role="button">Create New Product</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Published</th>
                <th scope="col">Category Parent</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->Name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->published}}</td>
                <td>{{$product->parent_id}}</td>
                <td><form onsubmit="if(confirm('Удалить?')){return true} else{return false}"
                          action="" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit"><i class="fa fal fa-trash"></i></button>
                        <a class="fa fal fa-edit" href="" role="button" type="submit"> </a>
                    </form></td>
            </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@endsection