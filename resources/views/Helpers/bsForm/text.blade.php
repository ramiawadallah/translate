<?php
   $attributes = !empty($attributes) ? $attributes : [];
   $name1 = explode('#', $name);
   $name = implode('', $name1);
   $value = !empty($value) ? $value : old($name);
?>


<input 
    class="form-control mt-4" 
    type="text" 
    name="{{ $name }}" 
    placeholder="{{ ucfirst($name) }}" 
    value="{{ $value }}"
>