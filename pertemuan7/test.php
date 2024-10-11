<!DOCTYPE html>
<html>
    <head>
        <title>Data Siswa</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            #dataSiswa,#toggleButton {
                padding: 5px;
                text-align: center;
                background-color: #a7dbd8;
                border: solid 2px #e0e4cc;
                border-radius: 5px;
            }
            
            #dataSiswa {
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div id="toggleButton">Click to show database</div>
        <div id="dataSiswa" style="display: none;"></div>
        <?php
        $dataSiswa = [
            ["Andi", 15, "10A", "Malang"],
            ["Siti", 16, "10B", "Hata"],
            ["Budi", 15, "10A", "Dinsyu"],
            ["Anton", 25, "12A", "Hata"]
        ];
        function buatTabel($data) {
            $tabel = "<table>";
            $tabel .= "<thead><tr><th>Nama</th><th>Umur</th><th>Kelas</th><th>Alamat</th></tr></thead>";
            $tabel .= "<tbody>";
            foreach ($data as $siswa) {
                $tabel .= "<tr>";
                foreach ($siswa as $nilai) {
                    $tabel .= "<td>$nilai</td>";
                }
                $tabel .= "</tr>";
            }
            $tabel .= "</tbody></table>";
            return $tabel;
        }
        $jsonData = json_encode($dataSiswa);
        echo "<script>var dataSiswa = $jsonData;</script>";
        ?>

        <script>
        $(document).ready(function() {
            $("#toggleButton").click(function() {
                $("#dataSiswa").slideToggle();
                $(this).text($(this).text() === "Click to show database" ? "Click to hide database" : "Click to show database");
            });
            function buatTabel(data) {
                let tabel = "<table>";
                    tabel += "<thead><tr><th>Nama</th><th>Umur</th><th>Kelas</th><th>Alamat</th></tr></thead>";
                    tabel += "<tbody>";
                    data.forEach(siswa => {
                        tabel += "<tr>";
                        siswa.forEach(nilai => {
                            tabel += "<td>" + nilai + "</td>";
                            });
                            tabel += "</tr>";
                        });
                        tabel += "</tbody></table>";
                        return tabel;
                    }
                    $("#dataSiswa").html(buatTabel(dataSiswa));
                });
        </script>
    </body>
</html>