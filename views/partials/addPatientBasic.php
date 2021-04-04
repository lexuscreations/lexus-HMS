<h3 class="text-warning" style="text-shadow: 2px 2px 7px #f9d0ee;">Patient Basic Info</h3>

<div class="form-group p-1 m-1">
    <div class="mb-3">
        <label for="firstNameField" class="form-label fw-bolder">First Name</label>
        <input type="text" name="fname" id="firstNameField" aria-describedby="firstNameField" placeholder="First Name" class="form-control" required="true">
    </div>
    <div class="mb-3">
        <label for="lastNameField" class="form-label fw-bolder">Last Name</label>
        <input type="text" name="lname" id="lastNameField" aria-describedby="lastNameField" placeholder="Last Name" class="form-control" required="true">
    </div>
</div>

<div class="form-group p-1 m-1">
    <label class="col-sm-4 fw-bolder">Gender</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="male" checked>
        <label class="form-check-label fw-bold" for="inlineRadio1">Male</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="female">
        <label class="form-check-label fw-bold" for="inlineRadio2">Female</label>
    </div>
</div>

<div class="form-group p-1 m-1">
    <label for="bloodSelect" class="form-label col-sm-4 fw-bolder">Blood Type:</label>
    <select id="bloodSelect" class="form-select" name="bd_gp" aria-label="">
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>
</div>

<div class="form-group p-1 m-1">
    <label for="dobSelect" class="form-label col-sm-4 fw-bolder">D.O.B</label>
    <div class="col-sm-8">
        <input id="dobSelect" value="2000-01-01" type="date" name="bday" class="form-control" required="true">
    </div>
</div>

<div class="form-group mb-3 m-1 p-1">
    <label for="addressField" class="form-label fw-bolder">Address</label>
    <textarea rows="3" id="addressField" name="address" class="form-control" placeholder="Address" required="true"></textarea>
</div>

<div class="form-group m-1 p-1">
    <div class="mb-3">
        <label for="cityField" class="form-label fw-bolder">City</label>
        <input type="text" name="city" id="cityField" aria-describedby="cityField" placeholder="city" class="form-control" required="true">
    </div>
</div>

<div class="form-group m-1 p-1">
    <div class="mb-3">
        <label for="mobileField" class="form-label fw-bolder">Mobile</label>
        <input type="number" min="0" max="10000000000" name="mobile" id="mobileField" aria-describedby="mobileField" placeholder="0000000000" class="form-control" required="true">
    </div>
</div>
