<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact Form</h2>
                    <hr class="hr">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10">
                <form name="formContact" method="post" action="success.php">
                        <!-- Nama -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Nama</label>
                            <div class="col-sm-9">
                                <input id="name" name="name" type="text" required><br><br>
                            </div>
                        </div>

                        <!-- NIM -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="NIM">NIM</label>
                            <div class="col-sm-9">
                                <input id="NIM" name="NIM" type="text" required><br><br>
                            </div>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="form-group">
                        <label class="col-sm-3 control-label" for="kelas">Kelas</label>
                        <div class="col-sm-9">
                        <select id="kelas" name="kelas" class="form-control" required>
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="T3A">T3A</option>
                        <option value="T3B">T3B</option>
                        <option value="T3C">T3C</option>
                        <option value="T3D">T3D</option>
                        <option value="T3E">T3E</option>
                        <option value="T3F">T3F</option>
                        
                        </select>
                        </div>
                        </div>


                        <!-- Jenis Kelamin -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <label><input name="jenis_kelamin" type="radio" value="laki-laki" required> Laki-laki</label><br>
                                <label><input name="jenis_kelamin" type="radio" value="perempuan" required> Perempuan</label><br>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="email">Email</label>
                            <div class="col-sm-9">
                                <input id="email" name="email" type="email" required><br><br>
                            </div>
                        </div>

                        <!-- No. Telp -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="telp">No. Telp / WA</label>
                            <div class="col-sm-9">
                                <input id="telp" name="telp" type="text" required><br><br>
                            </div>
                        </div>

                        <!-- Saran -->
                        <div class="form-group">
                        <label class="col-sm-3 control-label" for="saran">Saran:</label>
                        <textarea id="saran" name="saran" rows="4" cols="50" required></textarea><br><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="submit" class="btn btn-primary buatAkun" value="Kirim" style="width:100px; display:inline-block;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
