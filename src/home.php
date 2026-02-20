<?php
session_start();
if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';

// Obtener todos los agentes
$stmt = $pdo->query("SELECT * FROM agentes ORDER BY agente_id DESC");
$agentes = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agentes – Valorant 2026</title>
</head>
<body>
    <h1>Agentes – Valorant 2026</h1>

    <p>
        Hola, <?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?> |
        <a href="logout.php">Cerrar sesión</a>
    </p>

    <p><a href="add.php">Añadir nuevo agente</a></p>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Rol</th>
            <th>País</th>
            <th>Año lanzamiento</th>
            <th>Dificultad</th>
            <th>Ultimate</th>
        </tr>

        <?php foreach ($agentes as $a): ?>
            <tr>
                <td><?php echo $a['agente_id']; ?></td>
                <td><?php echo htmlspecialchars($a['nombre']); ?></td>
                <td><?php echo htmlspecialchars($a['rol']); ?></td>
                <td><?php echo htmlspecialchars($a['pais']); ?></td>
                <td><?php echo $a['anio_lanzamiento']; ?></td>
                <td><?php echo $a['dificultad']; ?></td>
                <td><?php echo htmlspecialchars($a['ultimate']); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $a['agente_id']; ?>">Editar</a> |
                    <a href="delete.php?id=<?php echo $a['agente_id']; ?>"
                       onclick="return confirm('¿Seguro que quieres eliminar este agente?');">
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>
