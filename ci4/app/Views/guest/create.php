
<div style="padding: 20px; text-align:center;color:#fff">

    <h2 style="color:#fff; font-style:italic;margin-bottom:20px">Create Guest</h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>
    <form action="create" method="post">
        <?= csrf_field() ?>

        <label for="name">Name</label>
        <input type="input" name="name" value="<?= set_value('name') ?>">
        <br>

        <label for="email">Email</label>
        <input type="input" name="email" value="<?= set_value('email') ?>">
        <br>

        <label for="website">Website</label>
        <input type="input" name="website" value="<?= set_value('website') ?>">
        <br>


        <label for="Gender">Gender</label>
        <input type="input" name="gender" value="<?= set_value('gender') ?>">
        <br>

        
        <label for="comment" style="color:#fff">Comment</label>
        <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
        <br>

        <input type="submit" name="submit" value="Create Guest">
    </form>
</div>

