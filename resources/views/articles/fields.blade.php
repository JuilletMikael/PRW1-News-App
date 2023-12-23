<label for="title">title</label>
<input class="form-control" type="text" id="title" name="title" required value="{{$article->title}}">
@error('title')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="body">body</label>
<textarea class="form-control" type="text" id="body" name="body" required>{{$article->body}}</textarea>
@error('body')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="category_id">category</label>
<select multiple class="form-control" id="category_id" name="categories[]">
    @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>
@error('category_id')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit" value="send">
