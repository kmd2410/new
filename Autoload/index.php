<?
    // include "Hello.php";
    // include "Bye.php";
    // include "Task01.php";

    // spl_autoload_register(function($class){
    //     include $class.".php";
    // });
    

    // $sayHello = new Hello();
    // $sayHello->say();
    // echo "<br>";
    // $sayBye = new Bye();
    // $sayBye->sayed();
    // echo "<br>";
    // $task01 = new Task01();
    // $task01->todoTask();

    
    
    // require_once "chobo/hello/Hello.php";
    // require_once "chobo/tasks/Task01.php";
    // require_once "chobo/tasks/Task02.php";
    require_once "vender/autoload.php";
    
    $sayHello = new \chobo\hello\Hello();
    $sayHello->say();

    echo "<br>";

    $task01 = new \chobo\tasks\Task01();
    $task01->todoTask();

    echo "<br>";

    $task02 = new \chobo\tasks\Task02();
    $task02->todoTask();
?>