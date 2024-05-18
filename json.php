<?php
echo "<style>";
echo "body {";
echo "  background-color: lightblue;"; 
echo "  font-family: Arial, sans-serif;";
echo "  font-size: 14px;"; /* Ukuran font yang lebih kecil */
echo "}";
echo ".list-container {";
echo "  max-width: 600px;";
echo "  margin: 50px auto;";
echo "  padding: 20px;";
echo "  background: white;";
echo "  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);";
echo "  border-radius: 5px;";
echo "}";
echo ".list-container ul {";
echo "  list-style-type: none;";
echo "  padding-left: 0;";
echo "}";
echo ".list-container li {";
echo "  margin-bottom: 10px;";
echo "  padding: 10px;";
echo "  border-radius: 5px;";
echo "  background-color: #f0f0f0;";
echo "}";
echo ".list-container li:hover {";
echo "  background-color: #eaeaea;";
echo "}";
echo ".list-container li h3 {";
echo "  margin: 0 0 5px 0;";
echo "  font-size: 1em;"; /* Ukuran font yang lebih kecil */
echo "}";
echo ".list-container li p {";
echo "  margin: 0;";
echo "  font-size: 0.8em;"; /* Ukuran font yang lebih kecil */
echo "  color: #666;";
echo "}";
echo "</style>";

$data = [
    ['nama' => 'Elda Serlya', 'umur' => 19],
    ['nama' => 'Dwi Seviana', 'umur' => 18],
    ['nama' => 'Dini Anggraini', 'umur' => 17],
    ['nama' => 'Change', 'umur' => 13],
    ['nama' => 'Esmeralda', 'umur' => 30],
    ['nama' => 'Jhonson', 'umur' => 31],
    ['nama' => 'Vexana', 'umur' => 28],
    ['nama' => 'Nana', 'umur' => 12],
    ['nama' => 'Alpha', 'umur' => 21],
    ['nama' => 'Layla', 'umur' => 20],
    ['nama' => 'Odette', 'umur' => 23],
    ['nama' => 'Ruby', 'umur' => 16],
    ['nama' => 'Miya', 'umur' => 22],
    ['nama' => 'Angela', 'umur' => 11],
    ['nama' => 'Gatotkaca', 'umur' => 50],
];

echo "<div class='list-container'>";
echo "<ul>";
foreach ($data as $row) {
    echo "<li>";
    echo "<h3>Nama: " . htmlspecialchars($row['nama']) . "</h3>"; // Menampilkan "Nama: " sebelum nama
    echo "<p>Umur: " . htmlspecialchars($row['umur']) . "</p>";
    echo "</li>";
}
echo "</ul>";
echo "</div>";
?>
