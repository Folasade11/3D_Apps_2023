<?php
//create the controllr class for the MVC design pattern
class Controller {
    //Decalre functions for the conrroller class
    public $load;
    public $model;
    //create a function for the contrller class
    function __construct()// constructor of the class
    {
        //create new objects for load and model
        $this-> load = new Load();
        $this-> model = new Model();
        //determine what page you are on
        $this->home();

    }
    function home()
    {
        //get data from the defiens model methos = model3D_info()
        $data = $this->model->model3D_info();
        //tell the load what bview to load ans which data to use
        $this->load->view('view3DAppTest_2', $data);
    }
}
?>