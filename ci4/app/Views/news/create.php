<div style="padding: 20px; text-align:center;color:#fff;">


    <h2  style="font-style:italic;margin-bottom:40px"><?= esc($title) ?></h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <form action="create" method="post">
        <?= csrf_field() ?>

        <label for="title">Title</label>
        <input type="input" name="title" value="<?= set_value('title') ?>">
        <br>

        <label for="body" id = "fcolor">Text</label>
        <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
        <br>

        <input type="submit" name="submit" value="Create news item">
    </form>
</div>