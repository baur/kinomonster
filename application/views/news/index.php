<h1>Все новости</h1>

<?php foreach ($news as $key => $value): ?>
    <p><a href="news/view/<?php echo $value['slug']; ?>"><?php echo $value['title']; ?></a></p>
<?php endforeach ?>