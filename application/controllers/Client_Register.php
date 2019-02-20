<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_Register extends CI_Controller {


  // REGISTER CUSTOMER  
  public function register(){

    if(isset($_SESSION['login']) == TRUE ){

      redirect('Clients_Dashbd');

    } else {

    $this->form_validation->set_rules('fullname', 'Nom d\'utilisateur', 'trim|required|is_unique[customers.fullname]|min_length[3]|max_length[20]|alpha_numeric_spaces');
        
    $this->form_validation->set_rules('profession', 'Profession', 'trim|required|min_length[3]|max_length[20]|alpha_numeric_spaces');
        
    $this->form_validation->set_rules('email', 'Email', 'required', 'trim|required|valid_email');
        
        
    $this->form_validation->set_rules('password', 'Mot de passe', 'required|min_length[5]|max_length[15]|alpha_numeric');
        
    $this->form_validation->set_rules('confirm_password', 'Mot de passe confirmer', 'required|min_length[5]|max_length[8]|alpha_numeric|matches[password]');

        if($this->form_validation->run() === false) {

          $this->load->view('templates/home_header');
          $this->load->view('home');
          $this->load->view('templates/home_footer');

        } else {

          $data['fullname']   = $this->input->post('fullname', TRUE);
          $data['profession'] = $this->input->post('profession', TRUE);
          $data['email']      = $this->input->post('email', TRUE);
          $data['password']   = $this->input->post('password', TRUE);
          $data['password']   = hash('md5', $data['password']);
          $data['elink']      = random_string('alnum', 15);

          $results = $this->Clients_register_model->checkCustomer($data['email']);

          if($results == TRUE){

          setFlashData('alert-danger','Email existe déjà ! Connectez-vous à votre espace client','Home'); 

          } else {

          $results = $this->Clients_register_model->addCustomer($data);

          if($results) {
              
              if($this->sendEmailToCustomer($data)){

                setFlashData('alert-success','Vous êtes enregistré Veuillez vérifier votre email et activer le lien d\'inscription pour vous connecter à votre espace client.','Client_Login/login');


              } else {

                setFlashData('alert-danger','L\'accompte à été crée mais l\'envois mail d\'activation de compte à échoué. Veuillez vérifié votre adresse mail','Client_Login/login');

                
              }


          } else {

                setFlashData('alert-danger','Échec de l\'inscription. Veuillez réessayer','Home');

          }

        }

      }

    }

  } 


  // SEND EMAIL TO CUSTOMER ON REGISTER
  private function sendEmailToCustomer($data) {

    $message = '<strong> Bonjour '.$data['fullname'].'</stong><br>'.anchor(base_url('Client_Register/confirm/'.$data['elink']), 'Activer votre compte en cliquant sur ce lien');
    $this->load->library('email');
    $this->email->set_newline('\r\n');
    $this->email->from('support@easyfiles.com');
    $this->email->to($data['email']);
    $this->email->subject('Activer votre compte');
    $this->email->message($message);
    $this->email->set_mailtype('html');

    if($this->email->send()){

      return TRUE;

    } else {

      return FALSE;
    }

  }



  // CONFIRM LINK TO ACTIVATE ACCOUNT
  public function confirm($link = NULL) {

    if(isset($link) && !empty($link)) {

      $results = $this->Clients_register_model->checkLink($link);

      if($results->num_rows() === 1) {

        $data['status']  = 1;
        $data['elink']   = $link.'ok';

        $results = $this->Clients_register_model->activateAccount($data, $link);

            if($results) {

              setFlashData('alert-success','Votre compte est activé, veuillez vous connecter à votre espace client','Client_Login/login');

            } else {

              setFlashData('alert-danger','Désolé, nous ne pouvons pas activer votre compte maintenant.','Client_Register/register');

            }

        } else {

          setFlashData('alert-danger','Le lien d\'activation du compte a expiré','Client_Register/register');

        }

    } else {

      setFlashData('alert-danger','Veuillez vérifier votre adresse mail et réessayer','Client_Register/register');

    }

  }





} // END 


