<?php
    $attributes = !empty($attributes) ? $attributes : [];
    $textname1 = explode('#', $textname);
    $textname = implode('', $textname1);
    $key = !empty($key) ? $key : null;
    $textareaname1 = explode('#', $textareaname);
    $textareaname = implode('', $textareaname1);
    $textvalue = !empty($textvalue) ? $textvalue : null;
    $textareavalue = !empty($textareavalue) ? $textareavalue : null;
?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    @foreach(LaravelLocalization::getSupportedLocales() as $key=>$value)
      <li class="nav-item">
        <a class="nav-link {{ $key == LaravelLocalization::getCurrentLocale() ? 'active'  : ''}}" id="home-tab" data-toggle="tab" href="#{{ $value['name'] }}" role="tab" aria-controls="{{ $value['name'] }}" aria-selected="true">{{ $value['native'] }}</a>
      </li>
    @endforeach()
</ul>
<div class="tab-content" id="myTabContent">


@foreach(LaravelLocalization::getSupportedLocales() as $key=>$value)
    <div class="tab-pane fade show {{ $key == LaravelLocalization::getCurrentLocale() ? 'active'  : ''}}" id="{{ $value['name'] }}" role="tabpanel" aria-labelledby="{{ $value['name'] }}-tab">
        <input 
            class="form-control mt-4" 
            type="text" 
            name="{{ $textname}}[{{ $key }}]" 
            placeholder="{{ ucfirst($textname)}} {{ $value['name'] }}" 
            value="{{ empty(transvalue($textvalue,$key)) ? old($textname)[$key] : transvalue($textvalue,$key)}}"
        >

        <textarea 
            class="form-control mt-4"  
            name="{{$textareaname}}[{{ $key }}]" 
            rows="10" 
            cols="100" 
            placeholder="{{ucfirst($textareaname)}} {{ $value['name'] }}"
        >
          {{ transvalue($textareavalue,$key) }}
        </textarea>
    </div>
@endforeach()