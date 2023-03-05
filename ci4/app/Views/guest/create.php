
    <h2 id = "guest">Guest List</h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <form action="create" method="post">
        <?= csrf_field() ?>
    <div id= "form">
        <label for="name" style="color:#fff">Name</label>
        <input type="input" name="name" value="<?= set_value('name') ?>">
        <br>

        <label for="email" style="color:#fff">Email</label>
        <input type="input" name="email" value="<?= set_value('email') ?>">
        <br>

        <label for="website" style="color:#fff">Website</label>
        <input type="input" name="website" value="<?= set_value('website') ?>">
        <br>

        <label for="comment" style="color:#fff">Comment</label>
        <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
        <br>

        <label for="Gender" style="color:#fff">Gender</label>
        <input type="input" name="gender" value="<?= set_value('gender') ?>">
        <br>
    </div>
        

        <input type="submit" name="submit" value="Create Guest">
    </form>


