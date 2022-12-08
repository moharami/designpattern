<?php


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            "driver" => "mysql",
            "host" => "localhost",
            "database" => "designpattern",
            "username" => "root",
            "password" => "",
            "charset" => "utf8",
            "collation" => "utf8_general_ci",
            "prefix" => ""
        ]);

        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->bootEloquent();
    }
}