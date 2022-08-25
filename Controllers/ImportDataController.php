<?php

class ImportDataController extends Controller
{
    public function index($name='')
   {
      $loaderData = $this->model('LoaderData');
      $this->view('index');
   }
}
