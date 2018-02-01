Using Bootstrap 4 with Laravel  
====

Bootstrap 4 を Laravel 5 で使う際に、手こずったので、備忘録

https://getbootstrap.com/  



## ■ npm 

```
npm install -g bower  
  --> %UserProfile%/AppData/Roaming/npm/node_modules/bower/bin/bower  
```



```
bower -v  
1.8.2
```



```
npm install -g gulp  
  --> %UserProfile%/AppData/Roaming/npm/node_modules/gulp/bin/gulp.js  
```



```
gulp -v  
3.9.1
```



```
npm install -g npm-check-updates
  --> %UserProfile%/AppData/Roaming/npm/node_modules/gulp/bin/gulp.js  
```



```
ncu -v  
2.14.0
```



## ■ Bootstrap 4 

```
npm init
```



```
npm install axios cross-env jquery lodash vue laravel-mix  --save-dev --no-bin-links --no-optional  
```



```
npm uninstall bootstrap-sass --save-dev --no-bin-links --no-optional  
npm install bootstrap@4.0.0-alpha.6 --save-dev --no-bin-links --no-optional  
npm install popper.js --save-dev --no-bin-links --no-optional  
```


## ■ Laravel 

app.scssファイルの編集 [./resources/assets/sass/app.scss]  
```
// Bootstrap
@import "~bootstrap-sass/assets/stylesheets/bootstrap";

// Bootstrap4
@import "~/bootstrap/scss/bootstrap";
```


_variables.scssファイルの編集 [./resources/assets/sass/_variables.scss]  
```
// Typography
$font-size-base: 14px;

//$font-size-base: 14px;
```


bootstrap.jsファイルの編集 [./resources/assets/js/bootstrap.js]  
```
try {
  window.$ = window.jQuery = require('jquery');
  //window.Popper = require('popper.js').default;
  require('bootstrap');
} catch (e) {}
```







## ■ npm run dev  

```
npm install -g cross-env  
npm run dev  
```



----------

php artisan serve  
http://localhost:8000/  
