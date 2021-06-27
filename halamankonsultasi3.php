<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>
        Build a Survey Form using HTML and CSS
    </title>
 
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
    </style>
</head>
  
<body>
    <h1>Halaman Konsultasi</h1>
  
    <!-- Create Form -->
    <form id="form">
    

        <label class="form-control">
            <label for="age" id="label-age">
                Usia
            </label>
 
            <!-- Input Type Text -->
            <input type="text"
                   id="age"
                   placeholder="Masukan usia anda" />
        </label>
  
        <label class="form-control">
            <label for="role" id="label-role">
                Which option best describes you?
            </label>
             
            <!-- Dropdown options -->
            <select name="gender" id="gender">
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
            </select>
        </label>
  
        
        <label class="form-control">
            <label>
                Jenis Penyakit?
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       id="recommed-1"
                       name="jenispenyakit">Jantung Koroner</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       id="recommed-2"
                       name="jenispenyakit">Diabetes</input>
            </label>
            <label for="recommed-1">
                <input type="radio"
                       id="recommed-1"
                       name="jenispenyakit">Osteoporosis</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       id="recommed-2"
                       name="jenispenyakit">Gagal ginjal</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       id="recommed-2"
                       name="jenispenyakit">Kanker</input>
            </label>
            <label for="recommed-1">
                <input type="radio"
                       id="recommed-1"
                       name="jenispenyakit">Ceciliac</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       id="recommed-2"
                       name="jenispenyakit">Batu Ginjal</input>
            </label>
        </label>
  
  
        <!-- Multi-line Text Input Control -->
        <button type="submit" value="submit">
            Submit
        </button>
    </form>
    <script>onclick="if (!document.querySelectorAll('input[name=recommed]:checked').length) alert('Please answer the question.'); else goto_nextpage();"
    </script>
</body>
  
</html>