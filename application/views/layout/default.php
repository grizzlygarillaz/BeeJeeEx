<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <link rel="stylesheet" href="/public/styles/css/bootstrap.css">
    <link rel="stylesheet" href="/public/styles/style.css">
    <script src="/public/scripts/js/bootstrap.js"></script>
</head>
<body>
<?$sort = ['Author', 'Mail', 'Progress'];
  $count = 0;?>
<div class="container align-items-baseline">
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between mb-2">
        <div class="d-flex align-items-baseline">
            <p class="m-0"> Sort by : </p>
            <?foreach ($sort as $item):?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?order=<?=$count++?>"><?=$item?>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?order=<?=$count++?>"><?=$item?>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <?endforeach;?>
        </div>
        <? if(!isset($_SESSION['user']))
        {?>
            <form class="form-inline my-2 my-lg-0" method="post" action="/authorize">
                <input class="form-control mr-sm-2" type="text" placeholder="Login" name="login" required>
                <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password" required>
                <button class="btn btn-light btn-outline-success my-2 my-sm-0" type="submit">Log in</button>
            </form>
        <?
        }
        else
        {?>
            <form method="post" action="/logout">
                <button class="btn btn-light btn-outline-secondary my-2 my-sm-0" type="submit" >Log out</button>
            </form>
        <?}?>
    </nav>
    <button class="btn btn-success" id="addTask">Add task</button>
    <?= $content ?>
</div>
<?require 'application/views/layout/taskModal.php'?>
</body>
</html>