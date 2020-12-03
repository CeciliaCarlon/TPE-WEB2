<?php

class apiView {

  //RESPUESTA
  function response($data, $status){
    header("Content-Type: application/json");
    header("HTTP/1.1 " . $status . " " . $this->requestStatus($status));

    echo json_encode($data);
  }

  //ESTADO DE LA RESPUESTA
  private function requestStatus($code){
    $status = array(
      200 => "OK",
      201 => "Created",
      404 => "Not found",
      500 => "Internal Server Error"
    );
    return (isset($status[$code]))? $status[$code] : $status[500];
  }

}