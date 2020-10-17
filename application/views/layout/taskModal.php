<div class="modal" tabindex="-1" id="taskModal">
    <div class="modal-dialog">
        <form class="modal-content" action="/addTask" method="post">
            <div class="modal-header">
                <h5 class="modal-title">Add task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <label for="taskText">Task:</label>
                    <input class="form-control" type="text" name="task" id="task" placeholder="Task text" required>
                </div>
                <div class="mb-2">
                    <label for="authorName">Author name:</label>
                    <input class="form-control" type="text" name="authorName" id="authorName" placeholder="Name" required>
                </div>
                <div class="mb-2">
                    <label for="authorMail">Author mail:</label>
                    <input class="form-control" type="email" name="authorMail" id="authorMail" placeholder="Email ( example: example@mail.hot )" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" id="sendTask" name="sendTask">Add</button>
            </div>
        </form>
    </div>
</div>