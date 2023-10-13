@extends('Layout.master')

@section('judul')
Halaman biodata
@endsection

@section('content')

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

    <button class="btn btn-primary" type="submit" value="kirim">
        <a target="" rel="noopener noreferrer">Sign Up</a>
    </button>
</form>
@endsection