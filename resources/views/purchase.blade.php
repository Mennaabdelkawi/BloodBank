<html>
  <body>
    @include('orderheader')


</body>
</html>

  <form action="{{  route('orders.store' ) }}" method="POST" style = "padding-top : 3%">
@csrf

  <h3> Shipping Address</h3>


          <input type="text"  id="fname" name="First_Name" placeholder="First Name" required>
          <div class="valid-feedback"></div>



    <input type="text" id="lname" name="Last_Name" placeholder="Last Name" required>
    <div class="valid-feedback"></div>
    <input type="text" id="email" name="email" placeholder="Email" required>
    <div class="valid-feedback"></div>
    <input type="text" id="address" name="address" placeholder="Address" required>
    <div class="valid-feedback"></div>
    <input type="text" id="city" name="city" placeholder="City" required>
    <div class="valid-feedback"></div>

   <div  class="col-20">
  <select id="country" name="country" placeholder="Country/region">
    <option selected>Country/region</option>
    <option value="egypt">Egypt</option>
  </select>

 <div class="col-20">
    <select id="government" name="government"placeholder="Government">
      <option selected>Government</option>
      <option value="redsea">Red Sea</option>
      <option value="alexandria">Alexandria</option>
      <option value="elsharqia">Elsharqia</option>
      <option value="6th october">6th october</option>
      <option value="Giza">Giza</option>
      <option value="helwan">Helwan</option>
      <option value="matrouh">Matrouh</option>
      <option value="minya">Minya</option>
      <option value="kafrelsheikh">Kafr elsheikh</option>
      <option value="damietta">Damietta</option>
      <option value="monufia">Monufia</option>
      <option value="cairo">Cairo</option>
      <option value="asuit">Asuit</option>
      <option value="aswan">Aswan</option>
      <option value="luxor">Luxor</option>
      <option value="ismalia">Ismalia</option>
      <option value="suez">Suez</option>
      <option value="qena">Qena</option>
      <option value="sohag">Sohag</option>
      <option value="benisuef">Beni suef</option>
      <option value="fayoum">Fayoum</option>
      <option value="beheira">Beheira</option>
      <option value="portsaid">Port said</option>
      <option value="northsinai">North Sinai</option>
      <option value="southsinai">South Sinai</option>
      <option value="dakahlia">Dakahlia</option>
      <option value="newvalley">New Valley</option>

    </select>
  </div>


    <input type="text" id="postalcode" name="Postal_code" placeholder="Postal Code"required>
    <div class="valid-feedback"></div>

    <input type="text" id="phone" name="Phone_number"placeholder="Phone Number"required >
    <div class="valid-feedback"></div>

    <input type="submit" value="Continue to shipping ">

  </form>
