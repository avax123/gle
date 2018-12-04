@extends('admin.dashboard')

@section('content')
    <div class="container">
        @component("admin.categories.components.breadcrumps")
            @slot('title') Category Name @endslot
            @slot('parent') Home @endslot
            @slot('active') Categories @endslot
        @endcomponent
    <hr />
            <form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
                {{csrf_field()}}
                @include('admin.categories.partials.form')
            </form>
    </div>
@endsection