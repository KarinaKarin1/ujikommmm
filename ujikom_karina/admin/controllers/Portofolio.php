<?php 

class Portofolio extends Controller{
    public function index()
  {  
   //tampung method getProfile() dari PortofolioModel.php di $data 
   $data['profile'] = $this->model('PortofolioModel')->getProfile();
   $data['about'] = $this->model('PortofolioModel')->getAbout();
   $data['project'] = $this->model('PortofolioModel')->getProject();
   $this->view('user/index',$data);
  }

}