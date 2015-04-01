<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->email->phpmailer->SMTPAuth = FALSE;
        $result = $this->email
                ->from('politicatic@presidencia.gob.mx', 'Política TIC')
                ->reply_to('politicatic@presidencia.gob.mx', 'Política TIC')
                ->to('gizmo.marco@gmail.com')
                ->subject('Prueba')
                ->message('Hola')
                ->send();
        if($result) {
            echo "Success";
        } else {
            echo $this->email->print_debugger();
        }
    }

}
