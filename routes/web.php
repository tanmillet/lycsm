<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    function () {


        $a = [
            ['date' => '2017-06-9', 'customer' => 1161, 'total' => 3, 'cg' => 1],
            ['date' => '2017-06-11', 'customer' => 1163, 'total' => 8, 'cg' => 3],
            ['date' => '2017-06-14', 'customer' => 1163, 'total' => 10, 'cg' => 5],
            ['date' => '2017-06-12', 'customer' => 1163, 'total' => 4, 'cg' => 2],

        ];
        $b = [
            ['date' => '2017-06-10', 'customer' => 1161, 'total' => 3, 'cg' => 1],
            ['date' => '2017-06-11', 'customer' => 1163, 'total' => 9, 'cg' => 2],
            ['date' => '2017-06-13', 'customer' => 1165, 'total' => 6, 'cg' => 5],
            ['date' => '2017-06-11', 'customer' => 1165, 'total' => 5, 'cg' => 2],
        ];

        $c = [
            ['date' => '2017-06-10', 'customer' => 1161, 'total' => 43, 'cg' => 1],
            ['date' => '2017-06-11', 'customer' => 1163, 'total' => 9, 'cg' => 2],
            ['date' => '2017-06-13', 'customer' => 1165, 'total' => 6, 'cg' => 5],
            ['date' => '2017-06-11', 'customer' => 1165, 'total' => 5, 'cg' => 2],
        ];

        //...........

        //array_merge — 合并一个或多个数组
        // $temp = array_merge($a, $b, $c , $b , $d , $e , ...........);
        $temp = array_merge($a, $b, $c);

        $res = [];
        foreach ($temp as $item) {
            $year = $item['date'];
            $userId = $item['customer'];
            if(!isset($arr[$year.$userId])){
                $res[$year.$userId] =
                    [
                      'date' => $year,
                      'customer' => $userId,
                      'cg' => 0,
                      'total' => 0,
                    ];
            }
        }
        foreach ($temp as $tep) {
            if(isset($res[$tep['date'].$tep['customer']])){
                $res[$tep['date'].$tep['customer']]['total'] += $tep['total'];
                $res[$tep['date'].$tep['customer']]['cg'] += $tep['cg'];
            }
        }

        print_r(sort($res));
        print_r($res);

        // for ($i = 0; $i == 1; $i++) {
        //     print $i;
        // }
        //
        // for ($i = 0; $i = 1; $i++) {
        //     print $i;
        // }

        // return view('admin.cqf');
        // return view('admin.lqf');
        // return view('welcome');
    }
);


Route::group(
    [
        'prefix' => 'ly',
    ],
    function ($router) {
        $router->match(array('GET', 'POST'), '/baset', 'AdminController@index');
        $router->match(array('GET', 'POST'), '/lqk', 'AdminController@lqk');
        $router->match(array('GET', 'POST'), '/cqk', 'AdminController@cqk');
        $router->match(array('GET', 'POST'), '/lhk', 'AdminController@lhk');
        $router->match(array('GET', 'POST'), '/chk', 'AdminController@chk');
        $router->match(array('GET', 'POST'), '/lh', 'AdminController@lh');
    }
);
