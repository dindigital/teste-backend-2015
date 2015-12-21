<?php

return [

'driver' => 'smtp',
'host' => 'smtp.gmail.com',
'port' => 587,
'from' => array('address' => 'email@gmail.com', 'name' => "Remetente"),
'encryption' => 'tls',
'username' => 'ericas.rodriguess@gmail.com',
'password' => '',
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => false,

];
