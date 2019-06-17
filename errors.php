<?php
/**
 * Created by PhpStorm.
 * User: SENGOX-Y
 * Date: 17/06/2019
 * Time: 09:10
 */
 if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>