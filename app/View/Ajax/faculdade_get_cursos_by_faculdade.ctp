<!-- file path View/Subcategories/get_by_category.ctp -->
<option value="">Seleccione</option>
<?php foreach ($cursos as $key => $value): ?>
    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
<?php endforeach; ?>