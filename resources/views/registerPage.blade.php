<!DOCTYPE html>
<html lang="en">
<head>
    <title> Form </title>
</head>
<body>
    <h1> Buat Account Baru! </h1>
    <h3> Sign Up Form </h3>

    <form action="/welcome" method="POST">
        @csrf
        <!-- First Name -->
        <label for="form_first_name"> First Name : </label> <br> <br>
        <input type="text" name ="first_name" id="first_name"> <br> <br>

        <!-- Last Name -->
        <label for="form_last_name"> Last Name : </label> <br> <br>
        <input type="text" name ="last_name" id="last_name"> <br> <br>

        <!-- Gender -->
        <label for="form_gender"> Gender : </label> <br> <br>
        <input type="radio" name="gender_user" id="form_gender" value="0"> Male <br>
        <input type="radio" name="gender_user" id="form_gender" value="1"> Female <br>
        <input type="radio" name="gender_user" id="form_gender" value="2"> Other <br> <br>
        
        <!-- Nationality -->
        <label for="form_Nationality"> Nationality : </label> <br> <br>
        <select name="" id="form_Nationality">
            <option value="Indonesian"> Indonesian </option>
            <option value="Singaporean"> Singaporean </option>
            <option value="Malaysian"> Malaysian </option>
            <option value="Australian"> Australian </option>
        </select> <br> <br>

        <!-- Language Spoken -->
        <label for="form_Language_spoken"> Language Spoken : </label> <br> <br>
        <input type="checkbox" name="Language_user" id="form_Language_spoken"> Bahasa Indonesia <br>
        <input type="checkbox" name="Language_user" id="form_Language_spoken"> English <br>
        <input type="checkbox" name="Language_user" id="form_Language_spoken"> Other <br> <br>

        <!-- Bio -->
        <label for="form_bio"> Bio : </label> <br> <br>
        <textarea name="bio_user" id="form_bio" cols="30" rows="10"></textarea> <br> <br>

        <!-- submit -->
        <input type="submit" value="Sign Up" >
    </form>
</body>
</html>