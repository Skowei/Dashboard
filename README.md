# Admin Panel made using [Skowei/ui](https://github.com/Skowei/Ui) Components package
## Currently Supported Versions
- [x] Laravel Blades
- [ ] Vue
- [ ] React

### How to install ?
#### 1. Download package 
  ```php
  composer require skowei/dashboard
  ```

#### 2. Install Package 
  ```php
  php artisan sk/dashboard:install
  ```

  > Package comes with basic routes, migration and seeder for included pages and aside functionality. </br>
  > After installation Include ```dashboard.php``` in your ```web.php``` file </br>
  > and ```dashboardSeeder.php``` to your ```databaseSeeder.php``` file and run
  ```php artisan migrate --seed```

### How to update?
#### 1. Run
  ```php
  Composer Update
  ```
&nbsp;&nbsp;&nbsp; to update package to newest version if available

#### 2. Update by deleting certain files and running
  ```php
  php artisan sk/dashboard:update
  ```
&nbsp;&nbsp;&nbsp; to copy their new version, or simply run
  ```php
  php artisan sk/dashboard:update --force
  ```
&nbsp;&nbsp;&nbsp; to override all files

### Commands
- ```php
  php artisan sk/dashboard:install ver --force
  ```
  - 'var' argument determine version of components (blade, vue, react). leave blank for blade components
  - '--force' argument overrides existing files if they exists, 
  - by default installation command forces to override existing files
  
- ```php
  php artisan sk/dashboard:update ver --force
  ```
  - 'var' argument determine version of components (blade, vue, react). leave blank for blade components
  - '--force' argument overrides existing files if they exists, 
  - by default update command doesn't override but only copy files that doesn't exists
  
