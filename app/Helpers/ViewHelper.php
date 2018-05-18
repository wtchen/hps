<?php

namespace App\Helpers;

class ViewHelper
{
    /**
     * @param string $field User-id
     *
     * @return string
     */
    public static function value($field)
    {
        $model = session('viewHelperModel');

        return old($field) ?? $model->$field ?? '';
    }
}
