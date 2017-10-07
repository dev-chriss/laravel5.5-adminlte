<?php

Form::macro('myInput', function($type="text", $name, $label="", $options=[], $default = null)
{
    $label = ($label =='') ? '' : html_entity_decode(Form::label($name, $label));
    return "
        <div class='form-group'>
            ". $label .
              Form::input($type, $name, $default, array_merge(["class" => "form-control"], $options)). "
        </div>
    ";
});

Form::macro('mySelect', function($name, $label="", $values=[], $selected=null, $options=[])
{
    $label = ($label =='') ? '' : html_entity_decode(Form::label($name, $label));
    return "
        <div class='form-group'>
            ". $label .
              Form::select($name, $values, $selected,array_merge(["class" => "form-control"], $options)). "
        </div>
    ";
});

Form::macro('myFileImage', function($name, $label="", $img_url="", $options=[])
{
    $label = ($label =='') ? '' : html_entity_decode(Form::label($name, $label));
    return "
        <div class='form-group'>
            ". $label . "
            <img src='".$img_url."'
            style='width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;'> " .
            Form::file($name, array_merge(["class" => "inputfile"], $options)). "
        </div>
    ";
});

Form::macro('myTextArea', function($name, $label="", $options=[], $default = null)
{
    $label = ($label =='') ? '' : html_entity_decode(Form::label($name, $label));
    return "
        <div class='form-group'>
            ". $label .
              Form::textarea($name, $default, array_merge(["class" => "form-control", "rows"=> 3], $options)). "
        </div>
    ";
});

Form::macro('myCheckbox', function($name, $label="", $value='', $checked='', $options=[])
{
    return " <b>" .   $label . "
        <div class='checkbox icheck'>
            <label>
                <input $checked id='$name' name='$name' type='checkbox' value='$value'>
            </label>
        </div>
    ";
});

Form::macro('myRange', function($name, $start, $end, $selected='', $options=[])
{
    return "
        <div class='form-group'>
            " . Form::selectRange($name, $start, $end, $selected,array_merge(["class" => "form-control"], $options)). "
        </div>
    ";
});
