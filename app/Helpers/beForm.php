<?php

namespace App\Helpers;

class bsForm 
{
    public static function text($name,$value=null,$attributes=null)
    {
        return view('Helpers.bsForm.text',compact('name','value','attributes'))->render();
    }

    public static function textarea($name, $value=null, $attriputes=null){
        return view('Helpers.bsForm.textarea',compact('name','value','attributes'))->render();
    }

    public static function translate($textname, $textareaname,$textvalue=null,$textareavalue=null,$attributes=null)
    {
        return view('Helpers.bsForm.translate',compact('textname','textareaname','textvalue','textareavalue','attributes'))->render();
    }

}