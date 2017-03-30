<p>{{$title}}</p>
<form method="post" action="/update">
	<input type="hidden" name="id" value="{{ $task->id }}">
	{{csrf_field()}}
	Name:<input type="text" name="name" value="{{ $task->name }}">
	<input type="submit" name="submit">
</form>
<a href='/show'>Tasks</a>