@extends('admin.dashboard')

@section('content')
    <div class="container">
        @component("admin.categories.components.breadcrumps")
            @slot('title') Reg Name @endslot
            @slot('parent') Home @endslot
            @slot('active') Categories @endslot
        @endcomponent
        <hr />
        <form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            @include('admin.categories.partials.edit-form')
        </form>
    </div>
@endsection