<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
  <style>
 
    /* Styling the Body element i.e. Color,
    Font, Alignment */
    body {
        background-color: #05c46b;
        font-family: Verdana;
        text-align: center;
    }

    /* Styling the Form (Color, Padding, Shadow) */
    form {
        background-color: #fff;
        max-width: 500px;
        margin: 50px auto;
        padding: 30px 20px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }

    /* Styling form-control Class */
    .form-control {
        text-align: left;
        margin-bottom: 25px;
    }

    /* Styling form-control Label */
    .form-control label {
        display: block;
        margin-bottom: 10px;
    }

    /* Styling form-control input,
    select, textarea */
    .form-control input,
    .form-control select,
    .form-control textarea {
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        padding: 10px;
        display: block;
        width: 95%;
    }

    /* Styling form-control Radio
    button and Checkbox */
    .form-control input[type="radio"],
    .form-control input[type="checkbox"] {
        display: inline-block;
        width: auto;
    }

    /* Styling Button */
    button {
        background-color: #05c46b;
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        font-size: 21px;
        display: block;
        width: 100%;
        margin-top: 50px;
        margin-bottom: 20px;
    }
    a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
  }
  
  a:hover {
    background-color: #d8ce41;
    color: black;
  }
  
  .previous {
    background-color: #d8ce41;
    color: black;
  }
  
  .next {
    background-color: #04AA6D;
    color: white;
  }
  
  .round {
    border-radius: 50%;
  }
</style>
</head>

<body>
<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Konsultasi Gizi</span>
    </div>
</nav>
<form id="form">
    <div class="form-control">
    <a href="halamanindexlogin.php" class="previous round">&#8249;</a>
        <div id="app">
            <div class="container">
                <div class="form-check">
                    <div>Sudah didiagnosa oleh dokter</div>
                    <input class="form-check-input" type="radio" name="diagnosa" id="Belum" v-model="diagnosa" value="belum">
                    <label class="form-check-label" for="diagnosa2">Belum</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="diagnosa" id="Sudah" v-model="diagnosa" value="sudah">
                    <label class="form-check-label" for="diagnosa1">Sudah</label>
                </div>
                <br>
                <div v-if="diagnosa == 'sudah'">
                    <div class="form-check">
                        <div>Jenis Kelamin ?</div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="laki" v-model="kelamin" value="laki">
                        <label class="form-check-label" for="kelamin1">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="perempuan" v-model="kelamin" value="perempuan">
                        <label class="form-check-label" for="kelamin2">perempuan</label>
                    </div>
                    <br>
                    <div class="form-check">
                        <div>Jenis Penyakit ?</div>
                    </div>
                        <div class="form-check"> 
                            <input class="form-check-input" type="radio" name="penyakit" id="jantung" v-model="penyakit" value="jantung">
                           <label class="form-check-label" for="penyakit1">Jantung koroner</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penyakit" id="diabetes" v-model="penyakit" value="diabetes">
                            <label class="form-check-label" for="penyakit2">Diabetes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penyakit" id="osteo" v-model="penyakit" value="osteo">
                            <label class="form-check-label" for="penyakit3">Osteo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penyakit" id="ginjal" v-model="penyakit" value="ginjal">
                            <label class="form-check-label" for="penyakit4">Gagal ginjal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penyakit" id="kanker" v-model="penyakit" value="kanker">
                            <label class="form-check-label" for="penyakit5">Kanker</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penyakit" id="ceciliac" v-model="penyakit" value="ceciliac">
                            <label class="form-check-label" for="penyakit6">Penyakit Ceciliac</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penyakit" id="batu" v-model="penyakit" value="batu">
                            <label class="form-check-label" for="penyakit6">Batu ginjal</label>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="umur" class="form-label">Usia</label>
                            <input type="email" class="form-control" id="umur" v-model="umur">
                        </div>
                        <div v-if="kelamin == 'perempuan'">
                            <div class="mb-3">Jika perempuan, sudah punya anak atau belum ?</div>
                            <div class="form-check">   
                                <input class="form-check-input" type="radio" name="anak" id="sudahanak" v-model="anak" value="sudahanak">
                                <label class="form-check-label" for="anak1">Sudah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="anak" id="belumanak" v-model="anak" value="belumanak">
                                <label class="form-check-label" for="anak2">Belum</label>
                            </div>
                        </div>
                        <span v-else></span>
                        <br>
                        <label>Hasil:</label>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'jantung' && kelamin == 'laki' && 55 >= umur> 0">Jantung koroner</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'jantung' && kelamin == 'laki' && 55<umur">Maka Jantung koroner, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'diabetes' && kelamin == 'laki' && 55>=umur>0">Maka Diabetes</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'diabetes' && kelamin == 'laki' && 55<umur">Maka Diabetes, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'osteo' && kelamin == 'laki' ">Maka Osteoporosis</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'ginjal' && kelamin == 'laki' ">Maka Gagal Ginjal</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'kanker' && kelamin == 'laki' && 55>=umur>0">Maka Kanker</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'kanker' && kelamin == 'laki' && 55<umur">Maka Kanker, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'ceciliac' && kelamin == 'laki' && 55>=umur>0">Maka Ceciliac</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'ceciliac' && kelamin == 'laki' && 55<umur">Maka Ceciliac, keb tulang khusus</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'batu' && kelamin == 'laki' && 55>=umur>0">Maka Batu Ginjal</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'batu' && kelamin == 'laki' && 55<umur">Maka Batu Ginjal, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'jantung' && kelamin == 'perempuan' && 55>=umur>0 && anak == 'sudahanak'">Maka Jantung Koroner, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'jantung' && kelamin == 'perempuan' && 55>=umur>0 && anak == 'belumanak'">Maka Jantung Koroner</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'jantung' && kelamin == 'perempuan' && 55<umur && anak == 'sudahanak'">Maka Jantung Koroner, keb tulang 2</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'jantung' && kelamin == 'perempuan' && 55<umur && anak == 'belumanak'">Maka Jantung Koroner, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'diabetes' && kelamin == 'perempuan' && 55>=umur>0 && anak == 'sudahanak'">Maka Diabetes, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'diabetes' && kelamin == 'perempuan' && 55>=umur>0 && anak == 'belumanak'">Maka Diabetes</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'diabetes' && kelamin == 'perempuan' && 55<umur && anak == 'sudahanak'">Maka Diabetes, keb tulang 2</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'diabetes' && kelamin == 'perempuan' && 55<umur && anak == 'belumanak'">Maka Diabetes, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'osteo' && kelamin == 'perempuan'">Maka Osteoporosis</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'ginjal' && kelamin == 'perempuan'">Maka Gagal Ginjal</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'kanker' && kelamin == 'perempuan' && 55>=umur>0 && anak == 'sudahanak'">Maka Kanker, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'kanker' && kelamin == 'perempuan' && 55>=umur>0 && anak == 'belumanak'">Maka Kanker</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'kanker' && kelamin == 'perempuan' && 55<umur && anak == 'sudahanak'">Maka Diabetes, keb tulang 2</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'kanker' && kelamin == 'perempuan' && 55<umur && anak == 'belumanak'">Maka Diabetes, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'ceciliac' && kelamin == 'perempuan' && anak == 'sudahanak'">Maka Ceciliac, keb tulang khusus</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'ceciliac' && kelamin == 'perempuan' && 55>=umur>0 && anak == 'belumanak'">Maka Ceciliac</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'ceciliac' && kelamin == 'perempuan' && 55<umur && anak == 'belumanak'">Maka Ceciliac, keb tulang khusus</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'batu' && kelamin == 'perempuan'">Maka Batu Ginjal, keb tulang 1</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'batu' && kelamin == 'perempuan' && 55>=umur>0 && anak == 'belumanak'">Maka Batu Ginjal</label>
                        <span v-else></span>
                        <label v-if=" diagnosa == 'sudah' && penyakit == 'batu' && kelamin == 'perempuan' && 55<umur && anak == 'sudahanak'">Maka Batu Ginjal, keb tulang 2</label>
                        <span v-else></span>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="halamanindexlogin.php">Keterangan nutrisi yang diperlukan</a></li>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    const vm = new Vue({
        el: '#app',
        data: {
        diagnosa: "",
        penyakit: "",
        umur: '',
        kelamin: "",
        anak: "",
        }
    })
</script>
</body>

</html>