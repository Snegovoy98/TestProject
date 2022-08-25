<?php

class ImportDataController extends Controller
{
    public function index($file='')
   {
      $loaderData = $this->model('LoaderData');
       
    if (isset($_POST['submit']))
    {
 
    $fileMimes = [
        'text/csv',
        'application/csv'
    ];
    }  
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
    {
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
 
            fgetcsv($csvFile);
 
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                $UID    = $getData[0];
                $name   = $getData[1];
                $age    = $getData[2];
                $email  = $getData[3];
                $phone  = $getData[4];
                $gender = $getData[5];
                
                if($loaderData->checkIsUserExists($UID)){
                     $loaderData->updateDataInDB($UID, $name, $age, $email, $phone, $gender);
                } else {
                     $loaderData->importDataToDB($UID, $name, $age, $email, $phone, $gender);
                }
            }
            

            fclose($csvFile);    
    }
    
      $this->view('index');
   }
}
