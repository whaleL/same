<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

//使用了hieu-le/active类库，主要实现导航栏分类的active
function category_nav_active($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}