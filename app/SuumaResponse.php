<?php


namespace App;


use Illuminate\Http\Response;

class SuumaResponse
{
    protected $statusCode, $msg, $data, $realStatus, $errorCode;

    public function __construct($statusCode = 200, $status = "", $errorCode = "", $realStatus = 200, $msg = "", $data = null)
    {
        $this->statusCode = $statusCode;
        $this->status = $status;
        $this->msg = $msg;
        $this->data = $data;
        $this->realStatus = $realStatus;
        $this->errorCode = $errorCode;
    }

    public function getResponse(){
        $res = [[
            "status" => $this->status,
            "message" => $this->msg,
            "data" => $this->data,
            "statusCode" => $this->realStatus
        ], $this->statusCode];

        if ($this->errorCode != ""){
            $res[0]["errorCode"] = $this->errorCode;
        }

        return $res;
    }
}
