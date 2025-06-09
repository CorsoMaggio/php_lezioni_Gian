<?php
const USER = [
  'name'=>'Francesco',
  'surname' => 'Mansi'
];

const USERS = ['Deborah', 'Marco', 'Vito'];

const MIXED = [
  'name' => 'Antonio',
  89 => 'sss',
  90 => 'ciccio',
  34
];

var_dump(USERS);
die();
echo MIXED[90];