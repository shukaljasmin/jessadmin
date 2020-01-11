# # Welcome jessadmin Admin Package 
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
