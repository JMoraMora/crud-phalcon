<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Tasks;

class TasksController extends ControllerBase
{

    public function indexAction()
    {
        // echo Tasks::saludo();
        echo Tasks::find();
        
    }

    public function listTasksAction()
    {
        
    }

}

