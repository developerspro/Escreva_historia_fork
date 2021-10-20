<?php

$usuarios = [
    1 => ['nome' => 'Josue Ramos',      'idade' => 54,  'ocupacao' => 'ambulante' ],
    3 => ['nome' => 'Leonardo V.',      'idade' => 20,  'ocupacao' => 'desenvolvedor' ],
    4 => ['nome' => 'Patricia S.',      'idade' => 20,  'ocupacao' => 'quimica' ],
    5 => ['nome' => 'Figaldo M.' ,      'idade' => 34,  'ocupacao' => 'medico' ],
    7 => ['nome' => 'Ana Maria'  ,      'idade' => 45,  'ocupacao' => 'cozinheira' ],
];

if( isset($_GET['usuario']) ) {
    $usuario_id = (int)$_GET['usuario'];

    // faria aqui o: SELECT * FROM usuarios WHERE id = $usuario_id 

    if( array_key_exists($usuario_id, $usuarios) )  // no meu caso esse seria meu   SELECT
        $usuario = $usuarios[$usuario_id];
    else
        echo('Usuario encontrado');
}
else
    echo('Usuario nao encontrado');

?>

<h2>Perfil de '<?php echo $usuario['nome'] ?>'</h2>

<p>Tem <?php echo $usuario['idade'] ?> anos de idade.</p>

<p>Ocupa o cargo de <?php echo $usuario['ocupacao'] ?>.</p>