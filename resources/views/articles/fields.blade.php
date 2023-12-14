<label for="title">title</label>
<input class="form-control" type="text" id="title" name="title" required value="{{$article->title}}">
<br>
<label for="body">body</label>
<textarea class="form-control" type="text" id="body" name="body" required>{{$article->body}}</textarea>
<br>
<label for="category_id">category</label>
<select class="form-control" id="category_id" name="category_id">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
</select>
<input type="submit" value="send">
