@extends('admin.dashboard')

@section('content')
    @component('admin.categories.components.breadcrumps')
        @slot('title') Главная страница @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent

    <hr>

    <a class="btn btn-outline-primary" href="{{route('admin.category.create')}}" role="button">Create New Category</a>
    <thead>
    <th> Cat.Name</th>
    <th> Published</th>
    </thead>
    <tbody>
    @forelse($categories as $category)
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                {{$category->title}}
                <span class="badge badge-primary badge-pill">{{$category->published}}</span>
            </a>
            <form onsubmit="if(confirm('Удалить?')){return true} else{return false}"
                  action="{{route('admin.category.destroy',$category)}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                {{csrf_field()}}
                <button type="submit" class="btn-danger"><i clas="fa fa-trash-o">DELETE</i></button>
                <a class="btn" href="{{route('admin.category.edit', $category)}}" role="button">Edit Category</a>
            </form>
        </div>
    @empty
        <tr>
            <td colspan="3" class="text-center">Error No Data Found</td>
        </tr>
    </tbody>
    @endforelse
    <tfoot>
    <tr>
        <td colspan="5">
            <ul class="pagination pull-right">{{ $categories }}</ul>
        </td>
    </tr>
    </tfoot>﻿
@endsection