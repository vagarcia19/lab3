
    <h2 style="color:#fff; padding: 20px; text-align:center; font-style: italic"><?= esc($title) ?></h2>

    <?php if (! empty($news) && is_array($news)): ?>

        <?php foreach ($news as $news_item): ?>
        <div style="color:#fff; padding: 20px; text-align:center">
            <h3 style="color:#fff;font-size:20px"><?= esc($news_item['title']) ?></h3>

            <div class="main" >
                <p><?= esc($news_item['body']) ?>
            </div>
            <p><a href="news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
            <p>----------------------</p>
        </div>
        <?php endforeach ?>

    <?php else: ?>

        <h3 style="color:#fff">No News</h3>

        <p style="color:#fff"i>Unable to find any news for you.</p>

    <?php endif ?>
    
    

    