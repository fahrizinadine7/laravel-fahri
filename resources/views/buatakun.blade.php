<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru</h1>

    <h2>Sign Up Form</h2>

    <form>
        <label for="fname">First name:</label><br>
        <input type="text" id= "fname" name= "fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id= "lname" name= "lname">

        <p>Gender</p>
        <input type="radio" id="laki-laki" name="Gender" value="Male">
        <label for="laki-laki">Male</label> <br>
        <input type="radio" id="perempuan" name="Gender" Value="female">
        <label for="perempuan">Female</label> <br><br>

         <label for="Nationality">Nationality</label> <br><br>
         <select id="Nationality" name="Nationality">
         <option value="Indonesia">Indonesia</option>
         <option value="English">English</option>
         <option value="Japan">Japan</option>
         </select><br><br>

         <p>Laguage Spoken</p>
         <input type="checkbox" id="Indonesia" value="Indonesia">
         <label for="Indonesia">Indonesia</label><br>
         <input type="checkbox" id=" English" name="English" value="English">
         <label for="English"> English</label><br>
         <input type="checkbox" id="Other" value="Other">
         <label for="Other">Other</label><br>

         <p>Bio</p>
         <textarea name="Bio" id="bio"></textarea><br>

         <a href="/selesai">
        <input type="button" name="Sign up" value="Sign up">
         </a>
        </form>
</body>
</html>