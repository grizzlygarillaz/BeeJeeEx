<?php
if (!empty($tasks))
{
    foreach ($tasks as $key):?>
        <div class="card m-3">
            <div class="card-header">
                <h3 class="card-title m-0"><?= $key['task'] ?></h3>
            </div>
            <div class="card-body">
                <p class="card-text">Author : <?= $key['author_name'] ?></p>
                <p class="card-text">Mail : <?= $key['author_mail'] ?></p>
            </div>
            <div class="card-bottom p-2 pl-3 d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <a href="#" class="btn btn-success">Task done</a>
                    <? if(isset($_SESSION['user'])){
                        echo '<a href="#" class="btn btn-secondary ml-2">Edit</a>';
                    } ?>
                </div>
                <div id="task-state">
                    <p>Task <?= ($key['done']) ? 'is done' : 'in progress' ?></p>
                    <? if ($key['changed']) echo '<hr class="m-0"><p class="text-black-50">Task was edited by administrator</p>';?>
                </div>
            </div>
        </div>
    <?php endforeach;
}
else echo '<h4 class="header">Task list is empty</h4>';
?>