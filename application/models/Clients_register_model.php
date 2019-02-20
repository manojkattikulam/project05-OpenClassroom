<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_register_model extends CI_Model {
  
    //CHECK IF CUSTOMER EXISTS
    public function checkCustomer($email)

    {
      $this->db->where('email', $email);
      $query = $this->db->get('customers');
      if($query->num_rows() > 0){
      return true;
      } else {
      return false;
      }

    }

    //ADD CUSTOMER
    public function addCustomer($data)
    {

      return $this->db->insert('customers', $data);

    }

    //CHECK IF ACTIVATION LINK EXIST
    public function checkLink($data)

    {
      return $this->db->get_where('customers', array('elink' => $data));

    }

    //ACTIVATE ACCOUNT 
    public function activateAccount($data, $link)

    {
      $this->db->where('elink', $link);
      return $this->db->update('customers', $data);

    }
 

}//END