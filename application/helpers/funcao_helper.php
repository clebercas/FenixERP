<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


function set_msg($id, $msg, $tipo)
{

	if($id){	
		$CI =& get_instance();
		switch ($tipo) {
			case 'erro':				
				$CI->session->set_flashdata($id, '<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$msg.'</div>');
				break;
			case 'sucesso':				
				$CI->session->set_flashdata($id, '<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$msg.'</div>');
				break;
		}
	}
	return FALSE;

}


function get_msg($id, $printar=TRUE)
{

	$CI =& get_instance();
	if($CI->session->flashdata($id)) {
		
		if($printar){
			echo $CI->session->flashdata($id);
			return TRUE;
		}

	}

}

function erros_validacao(){
    if(validation_errors()){
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>';
        echo validation_errors('<p>','</p>');
        echo '</div>';
    }
}  

/*
function erros_validacao(){
    if(validation_errors()){
        echo '<div class="row clearfix js-sweetalert">';
        echo '<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">';
        echo validation_errors('<p>','</p>');
        echo '<button class="btn btn-primary waves-effect" data-type="html-message">OK</button></div>';
        echo '</div>';
        
    }
} 
 */                                   