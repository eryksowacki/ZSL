<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h5> (*)Required fields </h5>
    <form action="./form_user_data.php" method="post">

      <b>Account Type*</b>
        <input type="radio" name="Account"  value="Personal Account" checked="checked" required> Personal Account
        <input type="radio" name="Account" value="Business Account"> Business Account
        <br><br>

      <b>First Name*</b>
        <input type="text" style = "text-transform:capitalize" name="FirstName" required pattern="[a-zA-ZąężśćźńółĄĘŻŚĆŹŃÓŁ-]{2,10}">
        <br><br>

      <b>Last Name*</b>
        <input type="text" name="LastName" style = "text-transform:capitalize" required pattern="[a-zA-ZąężśćźńółĄĘŻŚĆŹŃÓŁ-]{2,20}">
        <br><br>

      <b>Country/Region*</b>
        <select name="CountryRegion" required>
          <option> Wybierz opcję </option>
          <option value="Polska"> Polska </option>
          <option value="USA"> United States </option>
          <option value="Grecja"> Grecja </option>
        </select>
        <br><br>

        <b>Street Adress*</b>
          <input type="text"  name="StreetAdress" required>
          <br><br>

        <b>Street Adress 2</b>
          <input type="text"  name="StreetAdress2">
          <br><br>

        <b>City*</b>
          <input type="text" name="City" required>
          <br><br>

        <b>State/Province*</b>
          <select name="StateProvince" required>
            <option value="Wielkopolska"> Wielkopolska </option>
            <option value="Zachodniopomorskie"> Zachodniopomorskie </option>
            <option value="Małopolskie"> Małopolskie </option>
          </select>
          <br><br>

        <b>ZIP/Postal Code*</b>
          <input type="text" name="ZIPPostalCode" required pattern="\d{2}"> -
          <input type="text" name="ZIPPostalCodee" required pattern="\d{3}">
          <br><br>

          <h5> Only used for questions related to your order. </h5>
          <br>

        <b>Phone Number*</b>
          <input type="text" name="PhoneNumber" required>
            <br><br>

        <input type="submit" value="Wyślij dane">

</form>

  </body>
</html>
