<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cryptage
 *
 * @author j.ladisa
 */
class Cryptage {
    
    
    public static function Crypter($Acrypter){  //function de crypt des mots passé en arguments
        $Acrypter = password_hash($Acrypter,PASSWORD_BCRYPT,array("cost" =>12));
        return $Acrypter;
    }

}
