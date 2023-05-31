<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User1Service{
use ConsumesExternalService;

public $baseUri;


public function __construct()
{
 $this->baseUri = config('services.database2.base_uri');
}
}