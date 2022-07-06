##V 1.3 (MODELS and RELATION)
- add 'Task', 'Label', 'Status' models with different relations
- for example check relation 'on-to-many' between 'status' and 'task'

DbController consist of additional info about verifying of relation

result for call http://lara.local/db:
![img_13.png](img_13.png)

when data in 'tasks' table is:
![img_12.png](img_12.png)

and data in 'statuses' table is:
![img_14.png](img_14.png)

## SCHEME OF DB

![img_11.png](img_11.png)

## V 1.2.0 (MIGRATIONS)
- add migrations for create of 4 tables 
- add separate migrations (add_creator_id, add_status_id, ) for create foreign keys
- create two seeders for data store

structure of tables:

![img_5.png](img_5.png)

![img_6.png](img_6.png)

![img_7.png](img_7.png)

![img_8.png](img_8.png)

data in tables after seeding:

![img_9.png](img_9.png)

![img_10.png](img_10.png)

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

