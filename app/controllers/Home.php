<?php

class Home extends BaseController
{
    public function index($id = NULL, $name = NULL)
    {

        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'id'    => $id,
            'name'  => $name
        ];

        $this->view('home/index', $data);
    }
}

