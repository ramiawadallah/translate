
<?php
	$attributes = !empty($attributes) ? $attributes : [];
  $name1 = explode('#', $name);
  $name = implode('', $name1);
	$value = !empty($value) ? $value : null;
?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="form-group">
       <textarea 
            class="form-control mt-4"  
            name="{{ $name }}" 
            rows="10" 
            placeholder="{{ ucfirst($name) }}"
        >
            {{ $value }}
        </textarea>
   </div>
</div>