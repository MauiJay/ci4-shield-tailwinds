<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
      $data = [
        'title' => 'Home Title from Controller',
        'heading' => 'Hawaii Business Development',
        'keyword' => 'Hawaii Business Development',
        'desc' => '808 Business Solutions small business development.'
      ];
      //session()->remove('step');
      return view('home', $data);
    }
}
