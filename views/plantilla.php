<?php

use App\Models\Pastor;
use App\Util;

$pastores = Pastor::get()->all();

$pastoresOptions = Util::renderOptions($pastores, 'id', 'nombre');

?>




<select class="form-control"  id="pastor" name="pastor" data-placeholder="Selecciona"
        style="width: 100%;">
    <?= $pastoresOptions ?>

</select>