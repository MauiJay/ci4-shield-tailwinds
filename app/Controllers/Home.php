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

    public function sass(): string
    {
      $data = [
        'title' => 'SASS Title from Controller',
        'heading' => 'SASS Hawaii Business Development',
        'keyword' => 'SASS Hawaii Business Development',
        'desc' => 'SASS 808 Business Solutions small business development.'
      ];
      //session()->remove('step');
      return view('pages/sass', $data);
    }

    public function lp(): string
    {
      $data = [
        'title' => 'Landing Page  Title from Controller',
        'heading' => 'Landing Page  Hawaii Business Development',
        'keyword' => 'Landing Page  Hawaii Business Development',
        'desc' => 'Landing Page  808 Business Solutions small business development.'
      ];
      //session()->remove('step');
      return view('landing_page', $data);
    }
}
