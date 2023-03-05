<h2 style="color:#fff"><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>


        <div class="main" style="color:#fff">
            <h3><?= esc($guest_item['name']) ?></h3>
            <p><?= esc($guest_item['email']) ?>
            <p><?= esc($guest_item['comment']) ?>
        </div>
        <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>