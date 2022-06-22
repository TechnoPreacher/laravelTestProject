## V 1.1.0
- add HomeController with index method for show custom main page from "views";
- generate TaskController by artisan (only index method have realization yet)
- create UserCrudController with simple CRUD methods
- add "/" route for main page;
- add "/tasks" route for TaskController;
- add some named routes for methods of UserCrudController ("/reg","/show", "/del", "/auth") which grouped by name
  (i add group by controller for code simplification)

#### result for <http://lara.local>:
![img_4.png](img_4.png)

#### result for <http://lara.local/show>:
![img_2.png](img_2.png)

#### result for <http://lara.local/tasks>:
![img_3.png](img_3.png)

## V 1.0.0
- add info for DB access in .env config
- add simple db-test-connection controller \App\Http\Controllers\DbController with index method
- add route for call controller's method route::get('/db', [   \App\Http\Controllers\DbController::class,"index" ]
#### result for <http://lara.local/db>:
![img.png](img.png)

#### screen of original .env config - FOR TEACHER USE ONLY - NOT FOR PUBLIC!!! 
![img_1.png](img_1.png)




## Based on
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

