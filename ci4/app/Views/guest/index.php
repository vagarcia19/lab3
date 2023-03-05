
<h2 style="color:#fff;padding: 20px; text-align:center;font-style:italic;margin-bottom:20px"><?= esc($title) ?></h2><br>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>


        <div class="main" style="color:#fff;padding: 20px; text-align:center">
            <p>Name: <?= esc($guest_item['name']) ?>
            <p>Email: <?= esc($guest_item['email']) ?>
            <p>Website: <?= esc($guest_item['website']) ?>
            <p>Gender: <?= esc($guest_item['gender']) ?>
            <p>Comment: <?= esc($guest_item['comment']) ?>
            <p>----------------------</p> <br>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>

