<?php

namespace Controller;

use Core\AbstractController;
use Model\Ad;

class Home extends AbstractController
{
    public function index()
    {
        $this->data['popular'] = Ad::getPopularAds(5);
        $this->data['latest'] = Ad::getLatestAds(5);
        $this->render('parts\home');
    }
}