<?php
/**
 * 
 * 常用函数写这里
 */


 function route_class() {
     return str_replace('.', '-', Route::currentRouteName());
 }