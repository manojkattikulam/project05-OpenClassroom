<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_Download extends CI_Controller {

  //function to download files
public function telecharger()
{

	if(isset($_SESSION['login']) == TRUE )
	{

		$uId  =  $this->session->userdata('user_id');

		$results['tel'] = $this->Clients_achat_model->getOrderTelecharger($uId);

			if($results > 0){

					$this->load->view('templates/client_header.php');
					$this->load->view('client/dashbd_client/cl_download',$results);
					$this->load->view('templates/client_footer.php');
			} else {

        setFlashData("alert-danger","Aucun fichier à télécharger pour le moment","Client_Dashbd");
				

			}

	} else {

		redirect('home');
	}
	
}

public function download(){

	$this->load->helper('download');

	if(isset($_POST['file_name'])){
			
			$file = $_POST['file_name'];
		
			
			force_download(APPPATH.'impfiles/'.$file, NULL);
			
			redirect('Client_Download/telecharger');
			
	} else{

			setFlashData("alert-danger","Erreur de téléchargment...","Client_Dashbd/telecharger");

	}


}






}//END