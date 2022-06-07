<?php
require '../App/Views/common/head.php';
require '../App/Views/common/navigation.php';

?>

<div  class="container mt-5 ">
    <h1 style ="text-align:center;">Create Listing</h1>
<form class="form-horizontal row g-2" action="/listings/addNew" method="post" >
    <div class="form-group col-md-12">
        <label class="formLabel" for="vehicleID" class="form-label">Vehicle ID</label>
        <input class="form-control" type="number" id="vehicleID" min="0" name="vehicleID" placeholder="Vehicle ID">
    </div>



    <div class="form-group col-md-12">
        <label class="formLabel" for="pricePerDay">Price per pay</label>
        <input  class="form-control" type="number" id="pricePerDay" name="pricePerDay" placeholder="Price per day">
    </div>

    <div class="form-group col-md-12">
        <label class="formLabel" " for="pickupLocation">Pickup location</label>
        <input class="form-control" ="text" id="pickupLocation" name="pickupLocation" placeholder="Pickup location">
    </div>

    <div class="form-group col-md-12">
        <label class="formLabel" for="returnLocation">Return location</label>
        <input class="form-control" type="text" id="returnLocation" name="returnLocation" placeholder="Return location">
    </div>
    <div class="form-group col-md-12">
        <label  class="formLabel" for="description">Description</label>
        <textarea style="width:30%; margin:0 auto;"class="form-control" type="textarea" id="description" name="description" placeholder="Description..."></textarea>
    </div>

    <button style="width:10%; margin:0 auto; margin-top:1.5em;" type="submit">Submit</button>
</form>
</div>
