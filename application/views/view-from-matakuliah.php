<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="POST">
            <table>
                <tr>
                    <th colspan="3">
                        <h2>Form Input Matakuliah</h2>
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Kode Matakuliah</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>