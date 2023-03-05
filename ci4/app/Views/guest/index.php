<div style = "position: center">
<h2 style="color:#fff"><?= esc($title) ?></h2><br>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>


        <div class="main" style="color:#fff">
            <p>Name: <?= esc($guest_item['name']) ?>
            <p>Email: <?= esc($guest_item['email']) ?>
            <p>Comment: <?= esc($guest_item['comment']) ?>
            <p>Website: <?= esc($guest_item['comment']) ?>
            <p>----------------------</p> <br>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>
</div>
