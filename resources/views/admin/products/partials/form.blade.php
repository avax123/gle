<label for="">Status
    <select class="form-control" name="published">
        @if(isset($product->id))
            <option value="0" @if($product->published == 0) selected="" @endif> Not Published</option>
            <option value="1" @if($product->published == 1) selected="" @endif> Published</option>
        @else
            <option value="0">Unpublish</option>
            <option value="1">Publish</option>
        @endif
    </select>
</label>
<label for="">Name</label>
<input type="text" class="form-control" name="Name" placeholder="Название" value="{{$product->Name ?? ""}}">
<label for="">Description</label>
<input type="text" class="form-control" name="description" placeholder="Описание" value="{{$product->description ?? ""}}">
<label for="">Цена</label>
<input type="text" class="form-control" name="price" placeholder="Цена" value="{{$product->price ?? ""}}">

<label>Parent Category
    <select class="form-control" aria-label="ss" name="parent_id">
        <option value="0">--non category</option>
        @foreach($products as $category_list)
            <option value="{{$category_list->id ?? ""}}">
                {!! $delimiter ?? ""!!}{{$category_list->title ?? ""}}
            </option>
            @if(count($category_list->children) > 0)
                @include('admin.categories.partials.categorys', [
                    'categories' => $category_list->children,
                    'delimiter' => '/' . $delimiter
                ])
            @endif
        @endforeach
    </select>
</label>

<hr/>

<input class="btn-default" type="submit" name="fucku" value="Saves">