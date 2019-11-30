<?php
    include("..//connection.php");
    $ind=$_POST["id"];
    if($ind==1){
        $ind=11;
    }
    $matakuliah=mysqli_query($connStts,"SELECT * from matkul where jurusan_id=$ind");
    for ($i=1; $i < 9; $i++) { 
        $matakuliah_smes=mysqli_query($connStts,"SELECT * from matkul where jurusan_id=$ind AND matkul_semester=$i");
        echo "
        <table border='1' style='width:90%'>
            <thead>
                <tr>
                    <th style='width:20%'>Mata Kuliah</th>
                    <th style='width:10%'>SKS</th>
                    <th style='width:70%'>Deskripsi</th>
                </tr>
            </thead>
            <tbody>";
                foreach ($matakuliah_smes as $key => $value) {
                    $matakuliah_bahasa=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from matkul_bahasa where matkul_id=$value[matkul_id]"));
                    echo "
                    <tr>
                        <td>$matakuliah_bahasa[matkul_nama]</td>
                        <td>$value[matkul_sks]</td>
                        <td>$matakuliah_bahasa[matkul_deskripsi]</td>
                    </tr>";
                }
            echo "</tbody>
        </table> <br><br><br>";
    }
?>
