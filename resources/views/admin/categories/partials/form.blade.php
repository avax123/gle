<label for="">Status
<select class="form-control" name="published">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif> Not Published</option>
        <option value="1" @if($category->published == 1) selected="" @endif> Published</option>
        @else
        <option value="0">Unpublish</option>
        <option value="1">Publish</option>
    @endif
</select>
</label>
<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок" value="{{$category->title ?? ""}}">
<label for="slug">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Auto Generation" value="{{$category->slug ?? ""}}" readonly="">


<label>Parent Category
        <select class="form-control" aria-label="ss" name="parent_id">
                <option value="0">--non category</option>
                @include('admin.categories.partials.categorys')
        </select>
</label>

<hr />

<input class="btn-default" type="submit" name="fucku" value="Saves">