<?php

require_once 'funcoes.php';
$registrosClientes = [



'1'=> [

   'cliente' => 'raul',
  'sobrenome' => 'mota',
   'email' => 'raul123@gmail.com',
   ' telefone' => '22028922'
 

],
    '2'  => [

        'cliente' => 'Vitor',
        'sobrenome' => 'Campos',
        'email' => 'vitorcampos@gmail.com',
        ' telefone' => '27023385'
 
    ],

     '3' => [

         'cliente' => 'Amanda',
             'sobrenome' => 'Lima',
         'email' => 'amanda_123@gmail.com',
         ' telefone' => '22027485'
    
 
         ],

    '4' => [

            'cliente' => 'Ruan',
            'sobrenome' => 'Campos',
            'email' => 'ruanzinho@gmail.com',
             ' telefone' => '23348523'
  
 
        ],

 '5' => [

    'cliente' => 'vitoria',
   'sobrenome' => 'mota',
    'email' => 'VitoriaMota@gmail.com',
    ' telefone' => '27834456'
  
 
 ],
 '6 '=> [

    'cliente' => 'Tulio',
   'sobrenome' => 'Silva',
    'email' => 'tuliao_silva@gmail.com',
    ' telefone' => '22728922'
  
 
 ],
' 7' => [
 
     'cliente' => 'Rodrigo',
    'sobrenome' => 'Mota',
     'email' => 'roDrigo_mota01@hotmail.com',
     ' telefone' => '27023385'
  
 ],
 
  
'8' => [
 
     'cliente' => 'tereza ',
    'sobrenome' => 'Lima',
     'email' => 'tereza_123@gmail.com',
     ' telefone' => '24628885'
   
  
],
 
  '9' => [
 
     'cliente' => 'Leon',
    'sobrenome' => 'Ferreira',
     'email' => 'ruw3enh2o@gmail.com',
     ' telefone' => '23348523'
   
  
  ],
 
  '10' => [
 
     'cliente' => 'Vinicus',
    'sobrenome' => 'Mota',
     'email' => 'ViniMota@gmail.com',
     ' telefone' => '29398593'
   
  
  ]


 
];

$registrosFuncionarios = [

   '1' => [
 
      'funcionario' => 'Raphaela',
     'sobrenome' => 'Mota',
      'email' => 'raphamota@gmail.com',
      ' telefone' => '29398593'
    
   
   ],
   '2' => [
 
    'funcionario' => 'Rodrigo',
   'sobrenome' => 'Mota',
    'email' => 'rodrigo@gmail.com',
    ' telefone' => '283292293'
  
 
   ],
 '3' => [
 
    'funcionario' => 'Vinicus',
   'sobrenome' => 'Mota',
    'email' => 'ViniMota@gmail.com',
    ' telefone' => '24268993'
  
 
 ],
 '4' => [
 
    'funcionario' => 'Raul',
   'sobrenome' => 'Mota',
    'email' => 'raulMota@gmail.com',
    ' telefone' => '23456793'
  
 
 ],
 '5' => [
 
    'funcionario' => 'Leticia',
   'sobrenome' => 'Meira',
    'email' => 'let123@gmail.com',
    ' telefone' => '27369893'
  
 
 ],
 '6' => [
 
    'funcionario' => 'Amanda',
   'sobrenome' => 'Vieira',
    'email' => 'Amandata@gmail.com',
    ' telefone' => '28998593'
  
 
 ],
 '7' => [

  'funcionario' => 'Caio',
 'sobrenome' => 'Dantas',
  'email' => 'caiioo@gmail.com',
  ' telefone' => '29438793'


 ],
'8' => [

  'funcionario' => 'Renan',
 'sobrenome' => 'Mota',
  'email' => 'Revakd@gmail.com',
  ' telefone' => '26458593'


],
'9' => [

  'funcionario' => 'vitoria',
 'sobrenome' => 'Mota',
  'email' => 'ViMota@gmail.com',
  ' telefone' => '24365593'


],
'10' => [

  'funcionario' => 'Paulo',
 'sobrenome' => 'Ferreira',
  'email' => 'PauloFerreira@gmail.com',
  ' telefone' => '29398593'


],


];

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Banco</title>
</head>
<body>
    <h1>Clientes</h1>

    <dl>
        <?php foreach($registrosClientes as $id => $conta) { ?>
        <dt>
            <h3><?= $conta['cliente']; ?> - <?= $id; ?></h3>
        </dt>
        <dt>
        <h3><?= $conta['sobrenome']; ?> </h3>
        </dt>
        <dd>
           email: <?= $conta['email']; ?>
        </dd>
        <?php } ?>
    </dl>

<h2>Funcionarios</h2>
    <dl>
        <?php foreach($registrosFuncionarios as $id => $conta) { ?>
        <dt>
            <h3><?= $conta['funcionario']; ?> - <?= $id; ?></h3>
        </dt>
        <dt>
        <h3><?= $conta['sobrenome']; ?> </h3>
        </dt>
        <dd>
           email: <?= $conta['email']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>