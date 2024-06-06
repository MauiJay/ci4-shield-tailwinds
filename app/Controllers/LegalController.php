<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LegalController extends BaseController
{
  public function privacy()
  {
      return $this->render('privacy');
  }

  public function terms()
  {
      return $this->render('terms');
  }
}
