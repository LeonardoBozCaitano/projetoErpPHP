<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('select')) {
    function select($name, $dados, $value = null ) {
        $retorno = "<select id='".$name."' name ='". $name ."' type='text' class='form-control'>";
        
        foreach($dados as $campo => $valor){
            if($value != null && $value == $valor){
                $retorno .= "<option id='". $name ."' name='". $name ."' value='". $campo ."' selected='selected'>". $valor ."</option>"; 
            }else{
                $retorno .= "<option id='". $name ."' name='". $name ."' value='". $campo ."'>". $valor ."</option>"; 
            }
        }
        
        $retorno .= "</select>";
        return $retorno;
    }
}

if (!function_exists('hidden')) {
    function hidden($name, $value) {
        $retorno  = "<input type='hidden' class='display:none' name='". $name ."' value='". $value ."' type='text' class='form-control'>";
        return $retorno;
    }
}

if (!function_exists('input')) {
    function input($name, $value = null, $options = null) {
        if(!isset($options['type'])){
            $options['type'] = 'text';
        }
        if(!isset($options['id'])){
            $options['id'] = $name;
        }
        if(!isset($options['style'])){
            $options['style'] = "";
        }
        if(!isset($options['class'])){
            $options['class'] = "";
        }
        if($value != null){
            $options['value'] = $value;
        } else {
            $options['value'] = "";
        }
        
        $retorno  = "<input type='".$options['type']."' class='form-control ".$options['class']."' style='".$options['style']."' name='". $name ."' id='". $options['id'] ."' value='". $options['value'] ."'>";
        return $retorno;
    }
}    

if (!function_exists('checkbox')) {
    function checkbox($name, $value = null) {
        
        if($value == "1"){
            $selecionado = "value='".$value."' checked";
        } else {
            $selecionado = "value='0'";
        }
        
        $retorno  = "<input type='checkbox' name='". $name ."' ". $selecionado .">";
        return $retorno;
    }
}