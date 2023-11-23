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


class notfound extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('notfound/index');
    }
}

?>