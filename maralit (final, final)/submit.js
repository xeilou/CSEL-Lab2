const taskInput = document.getElementById('taskInput');
const addTaskBtn = document.getElementById('addTaskBtn');
const taskList = document.getElementById('taskList');

function addTask() {
    const taskText = taskInput.value.trim();
    
    if (taskText !== "") {
        const li = document.createElement('li');
        li.textContent = taskText;
        
        const deleteBtn = document.createElement('button');
        deleteBtn.textContent = "done!";
        deleteBtn.onclick = function(){
            taskList.removeChild(li);
        };
        
        li.appendChild(deleteBtn);
        taskList.appendChild(li);
        taskInput.value = '';
        
        li.addEventListener('click', function(){
            li.classList.toggle('completed');
        });
    } else {
        window.alert('You have yet to Input a Task!');
    }
}

addTaskBtn.addEventListener('click', addTask);
taskInput.addEventListener('keypress', function(e){
    if (e.key === 'Enter') {
        addTask();
    }
});
