Instruction how to replace Bootstrap by MaterializeCSS

1. Create fresh Laravel 5.6 project
2. php artisan preset none
3. php artisan preset vue
4. go to: resources/assets/js/bootstrap.js and comment line where popper.js is require
5. npm install (or yarn)
6. npm run dev - there will be warnings but it should generate new app.js file without bootstrap
7. configure Laravel, create database and run php artisan make:auth and make migrations
8. follow this instruction to install MaterializeCSS localy: https://github.com/skydiver/laravel-materialize-css
9. copy files from this repo and enjoy

If you don't want to install MaterializeCSS localy you can just add cdnjs' to your project. 
https://materializecss.com/getting-started.html