<div class="row">
    <div class="col-md-12">
        <h3 class="page_title">Eye tracking calibration</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
		<div style="position:relative;height:240px;">
	        <img id="eyeImg" width="320" height="240" src="img/test-8.jpg" style="position:absolute; top:10px; left:10px;">
	        <canvas id="eyeCanvas" width="320" height="240" style="position:absolute; top:10px; left:10px;"></canvas>
		</div>
    </div>
    <div class="col-md-4">
        <span class="label label-primary">Pupil coordinates</span>
        <br><br>

        <div class="coordinates">
            <p id="cx" class="label label-info"></p>
            <br><br>

            <p id="cy" class="label label-info"></p>
            <br><br>

            <p id="size" class="label label-info"></p>
            <br><br>
        </div>

    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-4 settings">
        <span class="label label-primary">Parameters</span>
        <br><br>
        <span>Min Luminance</span>
        <input type="range" id="level1" value="45" min="0" max="127">
        <br>
        <span>Max Luminance</span>
        <input type="range" id="level2" value="50" min="0" max="127">
        <br>
        <span>Min Size</span>
        <input type="range" id="size1"  value="400" min="0" max="1000">
        <br>
        <span>Max Size</span>
        <input type="range" id="size2" value="3000" min="0" max="5000">
    </div>
    <div class="col-md-4">
        <span class="label label-primary">Mobility area</span>
        <br><br>
        <input type="button" class="btn btn-info" value="c1" id="c1">
        <input type="button" class="btn btn-info" value="c2" id="c2"></br></br>
        <input type="button" class="btn btn-info" value="c3" id="c3">
        <input type="button" class="btn btn-info" value="c4" id="c4">
        <br><br>
    </div>
    <div class="col-md-4">
        <span class="label label-primary">Online mode</span>
        <br><br>
        <input type="checkbox" id="onlineMode">
        <br><br>
        <span class="label label-primary">Capture mouse</span>
        <br><br>
        <input type="checkbox" id="captureMouse">
        <br><br>
    </div>
</div>


