# Laravel5.5-adminLTE
**_[Laravel 5.5](https://laravel.com/) PHP Framework with [AdminLTE2](https://almsaeedstudio.com/AdminLTE)_**  


## Setup:

```bash
git clone https://github.com/chrissetyawan/laravel5.5-adminlte.git projectname
cd projectname
composer install                   # Install backend dependencies
sudo chmod 777 storage/ -R         # Chmod Storage
cp .env.example .env               # Update database credentials configuration
                                   # (Dont forget to create database name following credentials configuration)
php artisan key:generate           # Generate new keys for Laravel
php artisan migrate:refresh --seed # Run migration and seed users and categories for testing
yarn install                       # Install node dependencies
npm run production                 # To compile assets for prod
```


## Demo:
- Local demo:  
run `php artisan serve`  
Open browser at [localhost:8000/admin](http://localhost:8000)

- Live demo:  
Open browser at [http://laravel55-adminlte.setyawan.pro/](http://laravel55-adminlte.setyawan.pro/)

**Login credentials:**  

please dont change this two users credential.
u can add new user or modify other users.

- Superadmin
  ```bash
  Username: superadmin@fake.com  
  Password: 123456
  ```
  
- User
  ```bash
  Username: user@fake.com  
  Password: 123456
  ```
  
> All the data are reset each 30mn ;)
> **please dont forget to remove [this](https://github.com/chrissetyawan/laravel5.5-adminlte/blob/master/app/Console/Kernel.php#L27-L28) function in your app**


## Feature:

* Authentication, register, forgot password
* User Management, activate/deactivate user, user pictures
* CRUD example with datatable
* [Multi role user](https://github.com/chrissetyawan/laravel5.5-adminlte/blob/master/config/variables.php#L10) (Superadmin, Admin, Manager, User)
* [Route protection role based](https://github.com/chrissetyawan/laravel5.5-adminlte/blob/master/routes/web.php#L21)
* [Global function](https://github.com/chrissetyawan/laravel5.5-adminlte/blob/master/app//Helpers/Helper.php#L3)


## Included Packages:
#### Laravel (php):

* [Laravel Framework](https://github.com/laravel/laravel/) (5.5.*)
* [Forms & HTML](https://github.com/laravelcollective/html) : for forms
* [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) : for debugging
* [Guzzle](https://github.com/guzzle/guzzle) : PHP HTTP client
* [Laravel RESTful API format](https://github.com/teepluss/laravel-restable) : To create Rest API
* [Redis](https://github.com/nrk/predis.git) : for chache

#### JS plugins:

* [Laravel Mix](laravel-mix)
* [AdminLTE](https://github.com/almasaeed2010/AdminLTE)
* [ApiDocs](https://github.com/apidoc/apidoc)
* [Ionicons](https://github.com/driftyco/ionicons)
* [bootstrap](https://github.com/twbs/bootstrap)
* [chosen](https://github.com/harvesthq/bower-chosen)
* [ckeditor Full](https://github.com/ckeditor/ckeditor-releases)
* [datatables + plugins](https://github.com/DataTables/DataTables)
* [datetimepicker](https://github.com/xdan/datetimepicker)
* [font-awesome](https://github.com/FortAwesome/Font-Awesome)
* [jquery](https://github.com/jquery/jquery)
* [sweetalert2](https://github.com/limonte/sweetalert2)
* [iCheck](https://github.com/fronteed/iCheck)
* [Axios](https://github.com/mzabriskie/axios)
* [VueJs](http://vuejs.org/)


## Page size optimization:
- Using [Laravel Mix](http://laravel.com/docs/master/mix), all CSS and JS are in minified to one file each.
- Leverages browser caching, using `.htaccess` file from [html5-boilerplate](https://github.com/h5bp/html5-boilerplate)
- GZip compression is activated by default(APP_DEBUG=false => only onfile for js, and one file for css).  
  - `admin-HASH.css`: 63.9KB with gzip (376.5Kb without)  
  - `admin-HASH.js` : 99KB with gzip (318.9Kb without)


#FAQ

#### Create new CRUD
Creating CRUD in your application is the job you do most. Let's create Post CRUD:

* Add new migration and model : `php artisan make:model Post -m`
* Open migration file and add your columns
* Create PostsController : `php  artisan make:controller`. fill your resource (you can use CategoriesController with some changes) 
* Duplicate `resource/views/admin/categories` folder to `posts`, make changes in `index.php`, `create.blade.php`, `edit.blade.php`

#### Move Image and file ?
To move images using a [helper](https://github.com/chrissetyawan/laravel5.5-adminlte/blob/master/app/Http/helpers.php#L4) function based on [intervention/image](https://github.com/intervention/image) and [variables.php](https://github.com/chrissetyawan/laravel5.5-adminlte/blob/master/config/variables.php#L22)
check full example in [User.php](https://github.com/chrissetyawan/laravel5.5-adminlte/blob/master/app/User.php#L95)


#### Create new REST API
Rest Controllers are in the `App\Http\Controllers\Api` namespace.

* Create new controller that extends `ApiController` class
* Add your route in `api/v1` route group
* Add documentation block ([documentation](http://apidocjs.com/#example-full))
* Install ApiDoc via npm, run: `npm install apidoc -g` (only first time)
* Run this command : `apidoc -i app/Http/Controllers/Api/ -o public/api/ -t resources/apiTemplate/`

