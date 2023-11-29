<?php

class home extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('index/index');
    }
}
class index extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('index/login');
    }
}

class history extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('index/historywithdraw');
    }
}
/* admin */
class admin extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('admin/index');
    }
}

class product extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('admin/product/index');
    }
}

class employee extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('admin/employee/index');
    }
}

class producttype extends Controller

{
    function __construct()
    {
        parent::__construct();
        $this->view->render('admin/producttype/index');
    }
}

class unit extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('admin/units/index');
    }
}


class notfound extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('notfound/index');
    }
}

?>