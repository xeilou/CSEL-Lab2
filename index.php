<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List ni Maralit</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #FFF59D;">
    <div class="container vh-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <h1>Simple To-Do List</h1>
            </div>
            <div class="col-md-6 d-flex justify-content-start">
                <div class="task-container p-4">
                    <input type="text" id="taskInput" class="form-control mb-2" placeholder="Enter New Task">
                    <button id="addTaskBtn" class="btn w-100 mb-2">Add Task</button>
                    <ul id="taskList" class="list-group"></ul>
                </div>
            </div>
        </div>
    </div>

    <script src="submit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
