<div class="list">
<h2 style="color:#fff"><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>


        <div class="main" style="color:#fff">
            <p><?= esc($guest_item['name']) ?>
            <p><?= esc($guest_item['email']) ?>
            <p><?= esc($guest_item['comment']) ?>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>
</div>
