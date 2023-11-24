<label for="title">title</label>
<input type="text" id="title" name="title" required value="{{$article->title}}">
<br>
<label for="body">body</label>
<textarea type="text" id="body" name="body" required>{{$article->body}}</textarea>
<br>
<input type="submit" value="send">
