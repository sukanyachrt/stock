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

class admin extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('admin/index');
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