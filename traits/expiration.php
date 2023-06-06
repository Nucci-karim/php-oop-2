<?php
trait  expiration{
    private $expiration;

    public function get_expiration_date(){
       $expiration = $this->expiration;
        return "<span>scade il: $expiration</span>";
    }
}