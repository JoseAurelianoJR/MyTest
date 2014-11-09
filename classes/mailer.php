<?php
require 'vendor/autoload.php';

class Mailer {

    private $api_key;
    private $Mandrill;

    public function __construct() {
        
        $this->api_key  = 'zcwO62XxFGR6SBTjdEzDgQ';

        $this->Mandrill = new Mandrill($this->api_key);
        

    }
    
    public function getSenders() {
	   return $this->Mandrill->senders;
    }
    
    public function getUsers() {
	   return $this->Mandrill->users;
    }
    
    public function getMessages() {
	   return $this->Mandrill->messages;
    }

    public function send($complete_name, $username,  $email, $activation_key){
        
        
        
        $from = 'accounts@mytest.com.br';
                
        
        $to_a = array();
                
        $to['email'] = $email;
        $to['name'] = $complete_name;
        $to['to'] = 'to';            
        $to_a [] = $to;        

        $content = "<h3>Ative sua conta</h3>
                    <hr>
                    <p>Ol&aacute;, ".$complete_name." voc&ecirc; precisa ativar sua conta agora.
                        <br/>
                        Clique no link abaixo para Ativar:
                        <br/>
                        <a href='localhost/MyTest/activate_account.php?ak=".$activation_key."'>Ativar minha conta</a>
                    </p>"; 

        $subject = "Ative seu conta no My Test";

                            
            try {
                $message = array(
                'html' => $content,
                'text' => $content,
                'subject' => $subject,
                'from_email' => $from,
                'from_name' => 'Contas My Test',
                'to' => $to_a,
                'track_opens' => true,
                'track_clicks' => true,
                'auto_html' => true
                );

                
                
                $Messages = $this->getMessages();
                $rs = $Messages->send($message);
                
                
                
            } catch(Mandrill_Error $e) {
              echo $e;           
            }       
        
        return true;
    }

}
?>  
