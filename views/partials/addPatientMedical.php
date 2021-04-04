
<h3 class="text-warning" style="text-shadow: 2px 2px 7px #f9d0ee;">Patient Medical Info</h3>

<div class="form-group m-1 p-1">
    <div class="mb-3">
        <label for="statusField" class="form-label fw-bolder">Status [admited / discharged]</label>
        <input type="text" name="status" id="statusField" aria-describedby="statusField" placeholder="NA" class="form-control" required="true">
    </div>
</div>

<div class="form-group m-1 p-1">
    <div class="mb-3">
        <label for="weightField" class="form-label fw-bolder">Weight</label>
        <input type="number" steps="0.1" name="weight" id="weightField" required="true" aria-describedby="weightField" placeholder="00 kg" required="true" class="form-control">
    </div>
</div>

<div class="form-group m-1 p-1">
    <div class="mb-3">
        <label for="heightField" class="form-label fw-bolder">Height</label>
        <input type="number" name="height" id="heightField" required="true" aria-describedby="heightField" placeholder="0.0 feet" class="form-control">
    </div>
</div>

<div class="form-group m-1 p-1">
    <div class="mb-3">
        <label for="previousDiseasesField" class="form-label fw-bolder">Previous Diseases</label>
        <input type="text" name="prv_decs" id="previousDiseasesField" required="true" aria-describedby="previousDiseasesField" placeholder="NA" class="form-control">
    </div>
</div>

<div class="form-group m-1 p-1">
    <div class="mb-3">
        <label for="bedNumberField" class="form-label fw-bolder">Bed Number</label>
        <input type="number" min="0" max="1000" name="bed_no" id="bedNumberField" required="true" aria-describedby="bedNumberField" placeholder="00" class="form-control">
    </div>
</div>