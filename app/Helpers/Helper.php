<?php

if (! function_exists('transdata')) {
	function transdata($data = null, $lang = null){
		if($lang == null){
			$language = LaravelLocalization::getCurrentLocale();
		}else{
			$language = $lang;
		}
		return json_decode($data, true)[$language] != null ? json_decode($data, true)[$language] : 'nodata';
	}
}

if (! function_exists('transvalue')) {
	function transvalue($data = null, $lang = null){
		if($lang == null){
			$language = LaravelLocalization::getCurrentLocale();
		}else{
			$language = $lang;
		}
		return json_decode($data, true)[$language];
	}
}
