<?php // views/elements/errors.ctp
    if (!empty($errors)) { ?>
        <div class="errors alert  alert-danger">
            <h3>Existem <?php echo count($errors); ?> erros neste formulário:</h3>

            <ul>
                <?php foreach ($errors as $field => $error) {
                    foreach($error as $error1=>$error2){?>
                    <li><?php echo $error2; ?></li>
                <?php }} ?>
            </ul>
        </div>
    <?php } ?>