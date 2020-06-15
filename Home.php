<?php namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{	

		if (validateSesion($this->sesion) == false){
			return redirect()->to('../login'); 
		}else if (validateSesion($this->sesion) == true){

			$this->data=meterDatosDeSesion($this->sesion);
			
			
			$this->data["boxColor"]="primary";
			
			$views = ['home/navbarView', 'home/sidebarView', 'home/mainView', 'home/controlSidebarView','common/footerView','common/MQTT'];
			loadviews($views, $this->data);
		}
		
	}



	//--------------------------------------------------------------------

}
