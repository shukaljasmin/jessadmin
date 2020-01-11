# Welcome jessadmin Admin Package 
** This Package Under Development **
jessadmin is a laravel package for quick admin setup in laravel..
## Installation
Use the package manager [composer](https://getcomposer.org/) to install jessadmin.
###### Step – 1
Go To Your Laravel Application Folder
###### Step – 2
go command prompt
###### Step – 3
```bash
composer require shukaljasmin/jessadmin
```
Go to Config\app.php
Add Following Code Providers Array And Aliases
```bash
    'providers' => [
        Shukaljasmin\jessadmin\JessadminServiceProvider::class,
    ],
    `aliases' => [
        'Jam' =>Shukaljasmin\jessadmin\Facades\jessadmin::class,
    ],
```

###### Step – 4
Get A List Of Registered Route Follow Command
```bash
php artisan route:list
```
Following Route Is Exist Or Not
```bash
|        | GET|HEAD | admin               |           | Shukaljasmin\jessadmin\Controllers\JessadminController@index       | web            |        
|        | GET|HEAD | admin/jess_home     |           | Shukaljasmin\jessadmin\Controllers\JessadminController@home        | web,AdminCheck |        
|        | GET|HEAD | admin/jess_sesstion |           | Shukaljasmin\jessadmin\Controllers\JessAdminSessionController@show | web            |        
|        | POST     | admin/jesslogin     | jesslogin | Shukaljasmin\jessadmin\Controllers\JessadminController@admin_login | web            |        
```
###### Step – 5
Set .env File As You Can Use Regularly

```bash
use Illuminate\Database\Schema\Builder;

function boot()
{
    Builder::defaultStringLength(191);
}
```
And 
```bash
php artisan migrate:fresh
```

###### Step – 6

```bash
php artisan vendor:publish --tag=config
```

###### Step – 7
```bash
Go to file config\jessadmin.php
```
Follow Path Array Set Your Login View Path 
```bash
'path' => [
        'login'=>'vendor/pages/login',
        'test_login'=>'vendor/pages/test_login',
        
    ],
```
###### Step – 8
Thank You
