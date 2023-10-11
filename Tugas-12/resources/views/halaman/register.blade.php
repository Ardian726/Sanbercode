<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-12 | Sanbercode</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: Poppins;
        }
    </style>
</head>

<body>
    <h1>Halaman Biodata</h1>

    <h3>Sign Up Form</h3>

    <form action="/kirim" method="post">
        @csrf
        <label>First Name:</label><br><br>
        <input type="text" name="name1"><br><br>

        <label>Last Name:</label><br><br>
        <input type="text" name="name2"><br><br>

        <label>Gender:</label><br><br>
        <input type="radio" id="Male" value="Male">
        <label for="Male">Male</label><br>
        <input type="radio" id="Female" value="Female">
        <label for="Female">Female</label><br>
        <input type="radio" id="Other" value="Other">
        <label for="Other">Other</label><br><br>

        <label>Nationality:</label><br><br>
        <select name="Nationality" id="">
            <option value="Indonesia">Indonesia</option>
            <option value="Indonesia">Singapore</option>
            <option value="Indonesia">Malaysia</option>
        </select>
        <br><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="skill">Bahasa Indonesia<br>
        <input type="checkbox" name="skill">English<br>
        <input type="checkbox" name="skill">Other<br><br>
        <label>Bio:</label><br><br>
        <textarea name="message" cols="30" rows="10"></textarea>
        <br><br>

        <button type="submit" value="kirim">
            <a target="" rel="noopener noreferrer">Sign Up</a>
        </button>
    </form>

</body>

</html>