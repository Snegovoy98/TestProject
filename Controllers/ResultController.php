<?php

class ResultController extends Controller
{
    public function index($name='')
    {
      $loaderData = $this->model('LoaderData');
      $this->view('result');
    }
}
