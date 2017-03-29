<?php

/**
 * Class Bootsrap for registration app
 */
class Bootsrap
{
    private $controller;
    private $action;
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
        //var_dump($this->request); exit;
        // setting up controller
        if($this->request['controller'] == ""){
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        // setting up action
        if($this->request['action'] == ""){
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }

    }

//    public function createController()
//    {
//        //check class
//        if(class_exists($this->controller)){
//            $parents = class_parents($this->controller);
//            // check if extended
//            if(in_array("Controller",$parents)){
//                if(method_exists($this->controller,$this->action)){
//                    return new $this->controller($this->action,$this->request);
//                } else {
//                    // Method does not exists
//                    echo "Method does not exists";
//                    return;
//                }
//            } else {
//                // Base controller does not exists
//                echo "Base Controller Does Not Exists";
//                return;
//            }
//        } else {
//            //controller class does not exists
//            echo "<h1> Controller Class Does Not Exists </h1>";
//            return;
//        }
//    }

    public function createController(){
        // Check Class
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);
            // Check Extend
            if(in_array("Controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                } else {
                    // Method Does Not Exist
                    echo '<h1>Method does not exist</h1>';
                    return;
                }
            } else {
                // Base Controller Does Not Exist
                echo '<h1>Base controller not found</h1>';
                return;
            }
        } else {
            // Controller Class Does Not Exist
            echo '<h1>Controller class does not exist</h1>';
            return;
        }
    }

}