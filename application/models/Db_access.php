<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db_access extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd, $role)
     {
          $sql = "SELECT * FROM table_login WHERE user_email = '" . $usr . "' and user_pwd = '" . md5($pwd) ."'" ;
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
}?>
