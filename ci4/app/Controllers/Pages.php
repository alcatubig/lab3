<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        // Load the content of the requested page directly without any layout
        return view('pages/' . $page);
    }
}
