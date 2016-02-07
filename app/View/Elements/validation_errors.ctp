<?php
    $errors = $this->Form->validationErrors;
    $flatErrors = Set::flatten($errors);
    if (count($errors) > 0) { ?>
        <div class="errorSummary">
            <ul>
                <?php foreach ($flatErrors as $key => $value) { ?>
                    <li><?php echo($value); ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>