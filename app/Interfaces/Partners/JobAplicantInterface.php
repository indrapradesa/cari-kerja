<?php

namespace App\Interfaces\Partners;

use App\Interfaces\BaseInterface;

interface JobAplicantInterface extends BaseInterface
{
    public function getCategory();
    public function delete($id);
}
