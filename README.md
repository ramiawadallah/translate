<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## About Translate

Mini multi-language application based on Laravel to help and explain this part for beginner developer, for how can make multi-language application with small helper function to return data and rendering view design to shortnes coding 


## How can use it

<ul>
	<li>Download or clone it the app</li>
	<li>Run composer install</li>
	<li>Run php artisan key:generate</li>
	<li>Conect to the database</li>
	<li>Run php artisan migrate migrate</li>
	<li>Replace this line code from composer.jeson<br> 

		"autoload": {
	        "psr-4": {
	            "App\\": "app/"
	        },
	        "files":[
	            "app/Helpers/Helper.php",
	            "app/Helpers/beForm.php"
	        ],
	        "classmap": [
	            "database/seeds",
	            "database/factories"
	        ]
	    },
	    
</li>
	<li>Run composer dump-autoload</li>
</ul>


 