<?php include "include/header.php";?>     

    

<style>
    label {
        font-weight: bold;
    }

    .container-contact input[type=text],.container-contact input[type=email],.container-contact select,.container-contact textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    .container-contact input[type=submit] {
        background-color: #333333;
        color: white;
        font-weight: bold;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .container-contact input[type=submit]:hover {
        opacity: 0.8;
        color: #cccccc;
    }

    .container-contact {
        background-color: #333333;
        padding: 15px 30px;
        float: left;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 50px;

    }

    .container-contact form{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;  
        margin: 0px 10%;
        margin: 0 auto;
        max-width: 1000px;
    }

    #map{
        float: right;
        margin: 0px 5%;
        margin-bottom: 50px;
        width:90%;
        height:450px;
        background: gray;
    }
</style>
    
<!--Register Form-->
<div class="container-contact">
  <form action="/action_page.php">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name...">

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name...">

    <label for="country">Country:</label>
    <select id="country" name="country">
      <option value="romania">Romania</option>
      <option value="rep_moldova">Rep. Moldova</option>
      <option value="ungaria">Ungaria</option>
      <option value="bulgaria">Bulgaria</option>
      <option value="italia">Italia</option>
    </select>

    <label for="email">E-mail:</label>
    <input type="email" id="email_id" name="email" placeholder="E-mail adress....">

    <label for="subject">Subject:</label>
    <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<!--Google map presentation-->
<div id="map"></div>
       
<!--this is for google maps api to make it work-->    
<script>
    function initMap() {
    var uluru = {lat: 44.417760, lng: 26.086197};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7nv0tmxB_O-lW5-JtbA4O5s-ZDQARPPA&callback=initMap"></script>


<script>
    var li_page = document.getElementById('navbar_li_contact');    
    if(li_page) {
        li_page.className += 'active';
    }
</script>



<?php include "include/footer.php";?>