<?php
    
    function radio(string $name, string $value, array $radios) :string 
    {
        $html_radios = [];
        foreach($radios as $radio)
        {
            $attribute = $radio == $value ? ' checked' : ' ';
            $html_radios[] = "<input type='radio' name='$name' value='$radio' $attribute>
            <label for=''>$radio</label><br>";
        }

        return "<div class='radio'>".implode($html_radios). "</div>";

    }

    function select(string $name, $value, array $options ) :string
    {
        $html_options = []; 
        foreach ($options as $option)
        {
            $attributes = $option == $value ? ' selected': ' ';
            $html_options[] = "<option value='$option' $attributes> $option </option>";
        }
        return "<select class='form-control' name='$name' >".implode($html_options).'</select>';
    }


    