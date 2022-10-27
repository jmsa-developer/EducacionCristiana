<?php

namespace App;

class Util
{

    static function mapObject($array, $from, $to)
    {
        $result = [];
        foreach ($array as $key => $value) {

            if(is_array($to)){
                $texts = [];
                foreach ($to as $item){
                    $texts[] = $value[$item];
                }
                $result[$value[$from]] = implode(' - ', $texts);
            }else{
                $result[$value[$from]] = $value[$to];

            }

        }
        return $result;
    }

    static function renderOptions($array, $from, $to)
    {
        $options = self::mapObject($array, $from, $to);
        $result = '<option>selecciona</option>';
        foreach ($options as $key => $opt) {

            $result .= "<option value=$key> $opt </option>";
        }
        return $result;
    }

}