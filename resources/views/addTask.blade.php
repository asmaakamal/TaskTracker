<?php?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="post" action="/task">
            {{csrf_field()}}
            <label for="taskName">Create Task:</label>
            <input type="text" name="name" placeholder="Task Title">
            <button type="submit" name="submit">Add</button>
        </form>
    </body>
</html>