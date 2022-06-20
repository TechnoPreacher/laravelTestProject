## Based on
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About

v 1.0.0
- add info for DB access in .env config
- add simple db-test-connection controller \App\Http\Controllers\DbController with index method
- add route for call controller's method oute::get('/db', [   \App\Http\Controllers\DbController::class,"index" ]
### result for <http://lara.local/db>:
- ![img.png](img.png)
