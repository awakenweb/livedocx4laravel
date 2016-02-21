<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Awakenweb\Livedocx4Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Description of Livedocx
 *
 * @author Administrateur
 */
class Livedocx extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'livedocx.livedocx';
    }

}
