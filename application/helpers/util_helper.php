<?php
if ( ! function_exists('render_page'))
{
  
  function render_page($controller, $name, $data = array())
  {
 
    $css_list = array();
    $js_list = array();
    if(isset($data['load_self']) && $data['load_self']) {
      array_push($css_list, $name);
      array_push($js_list, $name);
    }

    $controller->load->view('common/header', array('css'=> $css_list));
    $controller->load->view('pages/'.$name, $data);
    $controller->load->view('common/footer', array('js'=> $js_list));
  }

}