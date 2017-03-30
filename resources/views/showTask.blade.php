<?php?>
<label>Tasks:</label>
@foreach ($tasks as $task)
<ul>
	<li>{{$task->name}}</li>
	<a href="/edit/{{ $task->id }}">Edit</a>
	<a href="/delete/{{ $task->id }}">Delete</a>
		
</ul>
@endforeach
<button onclick="location.href='new';" class="submit-button" >Add Task</button>