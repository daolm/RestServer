<?php
require(APPPATH.'/libraries/REST_Controller.php');

class Racermouse_api extends REST_Controller {
    
    function user_get()  
    {  
       if(!$this->get('id'))
        {
        	$this->response(NULL, 400);
        }

        // $user = $this->some_model->getSomething( $this->get('id') );
    	$users = array(
			1 => array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com',                                   'fact' => 'Loves swimming'),
		);
		
    	$user = @$users[$this->get('id')];
    	
        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'User could not be found'), 404);
        }
    }  
      
    function user_post()  
    {         
        $data = array('returned: '. $this->post('id'));  
        $this->response($data);  
    }  
  
    function user_put()  
    {         
        $data = array('returned: '. $this->put('id'));  
        $this->response($data);  
    }  
  
    function user_delete()  
    {  
        $data = array('returned: '. $this->delete('id'));  
        $this->response($data);  
    }    
}
