@extends('admin.dashboard')

@section('content')
    <div class="container">
        @component("admin.categories.components.breadcrumps")
            @slot('title') {{$category->title}} @endslot
            @slot('parent') Home @endslot
            @slot('active') {{$category->title}} @endslot
        @endcomponent
        <hr/>
        <form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
        </form>
    </div>
@endsection