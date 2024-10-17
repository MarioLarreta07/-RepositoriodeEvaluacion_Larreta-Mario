<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
// Arreglo inicial de empleados y sus sueldos
$empleados = [
    ["nombre" => "Mario", "sueldo" => 3000],
    ["nombre" => "Kevin", "sueldo" => 2500],
    ["nombre" => "Hayro", "sueldo" => 4000],
    ["nombre" => "Emilio", "sueldo" => 3200],
    ["nombre" => "Luis", "sueldo" => 2700]
];

// Función para ordenar empleados
function ordenarEmpleados(&$empleados) {
    usort($empleados, function ($a, $b) {
        return $a['sueldo'] <=> $b['sueldo'];
    });
}

// Función para imprimir empleados
function imprimirEmpleados($empleados) {
    echo str_repeat("=", 50) . "\n"; // Línea separadora
    echo "| Nombre               | Sueldo   |\n";
    echo str_repeat("-", 50) . "\n"; // Línea separadora

    foreach ($empleados as $empleado) {
        printf("| %-20s | $%7d |\n", $empleado['nombre'], $empleado['sueldo']);
    }
    
    echo str_repeat("=", 50) . "\n"; // Línea separadora
}

// Ordenar e imprimir empleados
ordenarEmpleados($empleados);
echo "Empleados ordenados por sueldo:\n";
imprimirEmpleados($empleados);

// Agregar nuevos empleados
$nuevosEmpleados = [
    ["nombre" => "Clara", "sueldo" => 3500],
    ["nombre" => "Javier", "sueldo" => 4500]
];

$empleados = array_merge($empleados, $nuevosEmpleados);

// Ordenar e imprimir empleados después de agregar nuevos
ordenarEmpleados($empleados);
echo "\nEmpleados después de agregar nuevos:\n";
imprimirEmpleados($empleados);
?>



</body>
</html>