
    <h2 style="color:#fff"><?= esc($title) ?></h2>

    <?php if (! empty($news) && is_array($news)): ?>

        <?php foreach ($news as $news_item): ?>

            <h3 style="color:#fff"><?= esc($news_item['title']) ?></h3>

            <div class="main" >
                <?= esc($news_item['body']) ?>
            </div>
            <p><a href="news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

        <?php endforeach ?>

    <?php else: ?>

        <h3 style="color:#fff">No News</h3>

        <p style="color:#fff"i>Unable to find any news for you.</p>

    <?php endif ?>
    
    

    