<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class langcontrol extends Controller
{
    public function changelang($lang)
    {
    echo str_replace('_', '- ', app()->getLocale());
    }
}
