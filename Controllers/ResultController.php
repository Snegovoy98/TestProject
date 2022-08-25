<?php

class ResultController extends Controller
{
    public function index($name='')
    {
      $loaderData = $this->model('LoaderData');
      $data = $loaderData->getDataFromDB();   
      $this->view('result', ["name"=>$data]);
    }
}
