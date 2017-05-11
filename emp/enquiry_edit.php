<!DOCTYPE html>
<!-- saved from url=(0063)https://tristandenyer.com/demos/dynamic-form-bootstrap-3-0.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynamically Duplicating a form, by Tristan Denyer</title>
 <script src="./Dynamically Duplicating a form, by Tristan Denyer_files/jquery.min.js.download"></script>

    <script type="text/javascript" src="./Dynamically Duplicating a form, by Tristan Denyer_files/clone-form-td.js.download"></script>
    <script src="./Dynamically Duplicating a form, by Tristan Denyer_files/bootstrap.min.js.download"></script> 
</head>

<body>
  <div id="wrapper">
      <div class="well well-lg">
         </div>
      <form action="te.php" method="get" id="sign-up_area" role="form">
      
        <div id="entry1" class="clonedInput">
          <h2 id="reference" name="reference" class="heading-reference">Entry #1</h2>
          <fieldset>

        <!-- Select Basic -->
        <label class="label_ttl control-label" for="title">Title:</label>
        <div class="form-group">
             <select id="enq_product1" name="enq_product[]" class="form-control required" onchange="getmodel(this.value)">
                                                                <option value="">Select Model</option>
                                                                <?php
																include 'dbconnect.php';
                                                                $q3 = mysqli_query($conn, "select product_group_name,product_id from tbl_product_group");
                                                                while ($row3 = mysqli_fetch_array($q3)) {
                                                                    ?>                                                            
                                                                    <option value="<?php echo $row3['product_id']; ?>"><?php echo $row3['product_group_name'] ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
          </div>

        <!-- Text input-->
       	<div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Select Model</label>
                                                        <div class="col-md-9" id="hide">
                                                            <select id="enq_model1" name="enq_model[]" class="form-control" onchange="getmodelno(this.value)">
                                                                <option value="0">Select Product First</option>
                                                              
                                                            </select>
                                                        </div><span id="show-model"></span>

                                                    </div>
													
        <!-- Text input-->
        <div class="form-group">
          <label class="label_ln control-label" for="last_name">Last name:</label>
          <input id="last_name" name="last_name" type="text" placeholder="" class="input_ln form-control">
        <span style="opacity: 1; left: 950px; top: 542.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAACXBIWXMAAAsTAAALEwEAmpwYAAABMmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarZG9SsNQGIaf04qCQxAJbsLBQVzEn61j0pYiONQokmRrkkMVbXI4Of508ia8CAcXR0HvoOIgOHkJboI4ODgECU4i+EzP9w4vL3zQWPE6frcxB6PcmqDnyzCK5cwj0zQBYJCW2uv3twHyIlf8RMD7MwLgadXr+F3+xmyqjQU+gc1MlSmIdSA7s9qCuATc5EhbEFeAa/aCNog7wBlWPgGcpPIXwDFhFIN4BdxhGMXQAHCTyl3AtercArQLPTaHwwMrN1qtlvSyIlFyd1xaNSrlVp4WRhdmYFUGVPuq3Z7Wx0oGPZ//JYxiWdnbDgIQC5M6q0lPzOn3D8TD73fdMb4HL4Cp2zrb/4DrNVhs1tnyEsxfwI3+AvOlUD7FY+VVAAAAIGNIUk0AAHolAACAgwAA9CUAAITRAABtXwAA6GwAADyLAAAbWIPnB3gAAAECSURBVHjapNK9K8UBFIfxD12im8LEYLgZjcpgUFgUCUlZTJRkMpqUxR+hDFIGhWwGwy0MFiUxSCbZ5DXiYjnqdvvpvnim0+mcZ/ieU9U6tySBNEbQjBpMoANZnGIdl4VLKcm8YCPqbgzhAT1ox1mSrFpxjtCHLdygH5tJgymlMYhhtKH+r6FishYsYBpN0dvFHu5wi9okWToC/0AmcpqM+pd7PKMRDajDNb5xlS97Qyem0BsL8IT9uOAhXpGLvL/wGXO5fFkOO7FwHvJtLOOilGALM8vE1d6xiFVlkP8aXTjAI8bKFeXLBuJ3shjFiQpIYR6zWMFaXFOlsnHM4Ng/+RkAdVE2mEeC7WYAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-position: 0px 0px; border: none; display: inline; visibility: visible; z-index: auto;"></span></div>

        <!-- Prepended text-->
        <label class="label_twt control-label" for="twitter_handle">Twitter:</label>
        <div class="input-group form-group">
          <span class="input-group-addon">@</span>
          <input id="twitter_handle" name="twitter_handle" class="input_twt form-control" placeholder="" type="text">
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="label_email control-label" for="email_address">Email:</label>
          <input id="email_address" name="email_address" type="text" placeholder="like this: billybob@example.com" class="input_email form-control">
        <span style="opacity: 1; left: 950px; top: 690.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAACXBIWXMAAAsTAAALEwEAmpwYAAABMmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarZG9SsNQGIaf04qCQxAJbsLBQVzEn61j0pYiONQokmRrkkMVbXI4Of508ia8CAcXR0HvoOIgOHkJboI4ODgECU4i+EzP9w4vL3zQWPE6frcxB6PcmqDnyzCK5cwj0zQBYJCW2uv3twHyIlf8RMD7MwLgadXr+F3+xmyqjQU+gc1MlSmIdSA7s9qCuATc5EhbEFeAa/aCNog7wBlWPgGcpPIXwDFhFIN4BdxhGMXQAHCTyl3AtercArQLPTaHwwMrN1qtlvSyIlFyd1xaNSrlVp4WRhdmYFUGVPuq3Z7Wx0oGPZ//JYxiWdnbDgIQC5M6q0lPzOn3D8TD73fdMb4HL4Cp2zrb/4DrNVhs1tnyEsxfwI3+AvOlUD7FY+VVAAAAIGNIUk0AAHolAACAgwAA9CUAAITRAABtXwAA6GwAADyLAAAbWIPnB3gAAAECSURBVHjapNK9K8UBFIfxD12im8LEYLgZjcpgUFgUCUlZTJRkMpqUxR+hDFIGhWwGwy0MFiUxSCbZ5DXiYjnqdvvpvnim0+mcZ/ieU9U6tySBNEbQjBpMoANZnGIdl4VLKcm8YCPqbgzhAT1ox1mSrFpxjtCHLdygH5tJgymlMYhhtKH+r6FishYsYBpN0dvFHu5wi9okWToC/0AmcpqM+pd7PKMRDajDNb5xlS97Qyem0BsL8IT9uOAhXpGLvL/wGXO5fFkOO7FwHvJtLOOilGALM8vE1d6xiFVlkP8aXTjAI8bKFeXLBuJ3shjFiQpIYR6zWMFaXFOlsnHM4Ng/+RkAdVE2mEeC7WYAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-position: 0px 0px; border: none; display: inline; visibility: visible; z-index: auto;"></span></div>

        <!-- Multiple Checkboxes (inline) -->
        <label class="label_checkboxitem control-label" for="checkboxitem">What flavors?</label>
        <div class="input-group form-group">
          <label class="checkbox-inline" for="checkboxitem-0">
            <input class="input_checkboxitem" type="checkbox" name="checkboxitem" id="checkboxitem-0" value="Apple">
            Apple
          </label>
          <label class="checkbox-inline" for="checkboxitem-1">
            <input class="input_checkboxitem" type="checkbox" name="checkboxitem" id="checkboxitem-1" value="Berry">
            Berry
          </label>
          <label class="checkbox-inline" for="checkboxitem-2">
            <input class="input_checkboxitem" type="checkbox" name="checkboxitem" id="checkboxitem-2" value="Peach">
            Peach
          </label>
          <label class="checkbox-inline" for="checkboxitem-3">
            <input class="input_checkboxitem" type="checkbox" name="checkboxitem" id="checkboxitem-3" value="Grape">
            Grape
          </label>
        </div>

        <!-- Multiple Radios -->
        <label class="label_radio control-label" for="radioitem">Do you skate?</label>
        <div class="input-group form-group">
          <label class="radio" for="radioitem-0">
              <input class="input_radio" type="radio" name="radioitem" id="radioitem-0" value="Yes">
              Yes
            </label>
            <label class="radio" for="radioitem-1">
              <input class="input_radio" type="radio" name="radioitem" id="radioitem-1" value="No">
              No
            </label>
        </div>
        </fieldset></div>
		
        <p>
        <button type="button" id="btnAdd" name="btnAdd" class="btn btn-info" value="You&#39;ve reached the limit" disabled="disabled">add section</button>
          <button type="button" id="btnDel" name="btnDel" class="btn btn-danger">remove section above</button>
        </p>

       
        <p>
          <button id="submit_button" type="submit" name="submit_button" class="btn btn-primary">Submit</button>
        </p>

        
        </form>
       
    </div> <!-- end wrapper -->
  

</body></html>

<script>

                                                                function getmodel(id) {
                                                                  

                                                                    if (id != 0) {
                                                                        // alert('sss');
                                                                        $.ajax({
                                                                            type: "POST",
                                                                            url: 'get_model.php',
                                                                            data: {
                                                                                id: id,
                                                                            },
                                                                            success: function (data)

                                                                            {
																				
                                                                                $('#show-model').show();
                                                                                $('#hide').hide();
                                                                                $('#show-model').html(data);
                                                                            },
                                                                        });




                                                                    } 


                                                                }



                                                                function getmodelno(id) {
                                                                  
                                                                    if (id != 0) {
                                                                        // alert('sss');
                                                                        $.ajax({
                                                                            type: "POST",
                                                                            url: 'get_model_no.php',
                                                                            data: {
                                                                                id: id,
                                                                            },
                                                                            success: function (data)

                                                                            {
                                                                                $('#show-modelno').show();
                                                                                $('#hide-modelno').hide();
                                                                                $('#show-modelno').html(data);
                                                                            },
                                                                        });




                                                                    } 


                                                                }

                                                                function gettype(id) {





                                                                    if (id != 0) {       // alert('sss');
                                                                        $.ajax({
                                                                            type: "POST",
                                                                            url: 'get_type_no.php',
                                                                            data: {
                                                                                id: id,
                                                                            },
                                                                            success: function (data)

                                                                            {
                                                                                $('#shows-type').show();
                                                                                $('#hide-type').hide();

                                                                                $('#shows-type').html(data);
                                                                            },
                                                                        });

                                                                    } 


                                                                }

                                                                function getprice(id, type) {





                                                                    if (id != '') {       // alert('sss');
                                                                        $.ajax({
                                                                            type: "POST",
                                                                            url: 'get_price.php',
                                                                            data: {
                                                                                id: id,
                                                                                type: type,
                                                                            },
                                                                            success: function (data)

                                                                            {
                                                                                $('#shows-price').show();
                                                                                $('#qty_price').show();
                                                                                $('#shows-price').html(data);
                                                                            },
                                                                        });

                                                                    } else {

                                                                        $('#price').hide();
                                                                        $('#qty_price').hide();
                                                                    }



                                                                }
                                                                function gets(id) {


                                                                    if (id == "Completed") {
                                                                        $('#completed').show();

                                                                    }
                                                                    if (id == "dropped") {


                                                                        $('#remarks').show();
                                                                    }
                                                                    if (id == "Appointment") {

                                                                        $('#appointment').show();
                                                                    } else {
                                                                        $('#appointment').hide();
                                                                        $('#remarks').hide();
                                                                        $('#shows-pnrno').hide();
                                                                        $('#shows_quotation_list').hide();
                                                                    }


                                                                }
                                                                function getgroupprice() {

                                                                    var qty = $('#qty').val();

                                                                    var enq_update = $('#enq-update').serialize();
                                                                    var qprice = $('#qprice').val();
                                                                    var tests = qty * qprice;
                                                                    $('#prices').val(tests);
                                                                }

        </script>   


