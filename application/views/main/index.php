<p>Главная страница</p>
<?php foreach ($news as $key):?>
<h3><?= $key['title'] ?></h3>
<p><?= $key['content'] ?></p>
<?php endforeach;?>