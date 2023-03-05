
    <h2 id="fcolor"><?= esc($title) ?></h2>

    <?php if (! empty($news) && is_array($news)): ?>

        <?php foreach ($news as $news_item): ?>

            <h3 id="fcolor"><?= esc($news_item['title']) ?></h3>

            <div class="main">
                <?= esc($news_item['body']) ?>
            </div>
            <p id="fcolor"><a href="news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

        <?php endforeach ?>

    <?php else: ?>

        <h3 id="fcolor">No News</h3>

        <p id="fcolor">Unable to find any news for you.</p>

    <?php endif ?>
    
    

    