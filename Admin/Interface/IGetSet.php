<?php

interface IGetSet
{
    public function Create();

    public function Get($ID);

    public function GetAll();

    public function Update($ID);

    public function Delete($ID);

}