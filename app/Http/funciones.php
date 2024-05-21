<?php


use App\Models\Tuberias;


function html_select_tuberias($aux = 0)
{
    $tuberias = Tuberias::where('estado', '=', 1)->get();

    $resu = "<select class='form-control' name='id_tuberia' id='id_tuberia'>";
    //$resu .= "<option value='0'>Todos</option>";
    foreach ($tuberias as $tuberia) {
        if ($aux == $tuberia->id) {
            $resu .= "<option selected='true' value='" . $tuberia->id . "'>" . $tuberia->nombre . "</option>";
        } else {
            $resu .= "<option value='" . $tuberia->id . "'>" . $tuberia->nombre . "</option>";
        }
    }
    $resu .= "</select>";
    echo $resu;
}
