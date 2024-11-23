<?php


//ATIVIDADE 2 ==========================================================================================================

function montaSelect($array, $nomeCampo, $usarTexto){
    $html = "<select name= '$nomeCampo'>/n";

    foreach ($array as $index => $item){
        if ($usarTexto){
            $valor = $item;
        }else{
            $valor = $index + 1;
        }
        $html .= "<option value='$valor'>$item</option>\n";
    }

    $html .= "</select>\n";
    return $html;
}


//ATIVIDADE 3 ==========================================================================================================

function montaRadio($array, $nomeCampo, $usarTexto, $selecionado){

    $html = "";

    foreach($array as $index => $item){
        if ($usarTexto){
            $valor = $item;
        }else{
            $valor = $index + 1;
        }
        if ($selecionado === $valor) {
            $checked = "checked";
        } else {
            $checked = "";
        }    
        $html .= "<input type='radio' name='$nomeCampo' value='$valor' $checked> $item<br>\n";    
    }

    return $html;

}

function montaCheckBox($array, $nomeCampo, $usarTexto, $selecionado){

    $html = "";

    foreach($array as $index => $item){
        if ($usarTexto){
            $valor = $item;
        }else{
            $valor = $index + 1;
        }
        if (in_array($valor, $selecionado)) {
            $checked = "checked";
        } else {
            $checked = "";
        }
        
        $html .= "<input type='checkbox' name='{$nomeCampo}[]' value='$valor' $checked> $item<br>\n";            
    }
        return $html;
}


//ATIVIDADE 4 ==========================================================================================================

function montaInput($type, $name, $placeholder){
    return '<input type="' . $type . '" name="' . $name . '" placeholder="' . $placeholder . '">';
}

