<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * SESSION MODEL
 *
 * @author Charlie Liu <liuchangli0107@gmail.com>
 */
class Login_model extends CI_Model {

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
        header('Content-Type: text/html; charset=utf8');
    }

    public function getUsers($input='')
    {
        if( !empty($input) )
        {
            $sql = "SELECT * FROM user  WHERE `username`='".$input."'";
            $query = $this->db->query($sql);
            return array('data'=>$query->result(),'total'=>$query->num_rows());
        }
        else
        {
            return array('data'=>array(),'total'=>0);
        }
    }

    public function insUsers($input=array())
    {
        if( $input['username']=='' )
        {
            return 201;
        }
        else if( $input['password']=='' )
        {
            return 202;
        }
        else if( empty($input['email']) )
        {
            return 203;
        }
        else if( empty($input['addr']) )
        {
            return 204;
        }
        else
        {
            $data = array(
                'username'=>$input['username'],
                'salt'=>$input['salt'],
                'password'=>$input['password'],
                'email'=>$input['email'],
                'addr'=>$input['addr'],
            );
            if( $this->db->insert('user', $data) )
            {
                return 100;
            }
            else
            {
                return 300;
            }
        }
    }
}
?>