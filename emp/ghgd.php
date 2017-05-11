
            <div class="panel panel-success">
                <div class="panel-heading" role="tab" id="problemHeading">
                    	<h4 class="panel-title">
	        			Issue
	      			</h4>

                </div>
                <div id="problemInfo" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Issue Service</label>
                                <div class="col-xs-10">
                                    <select name="issue_service" class="form-control">
                                        <option selected disabled>Select Your Service</option>
                                        <option value="editor-hosting">Website Editor Hosting</option>
                                        <option value="alone-hosting">Stand-Alone Web Hosting</option>
                                        <option value="editor-use">Website Editor Access/Use</option>
                                        <option value="general-issue">General Website Issue</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-2">Issue Description</label>
                                <div class="col-xs-10">
                                    <textarea class="form-control" name="issue_description"></textarea>	<span class="help-block">Please provide as much information as possible.</span>

                                </div>
                            </div>
                        </div>	<a data-toggle="collapse" data-parent="#accordion" href="#generalInfo" class="btn btn-danger">Previous</a>
	<a data-toggle="collapse" data-parent="#accordion" href="#priorityInfo" class="btn btn-success pull-right">Continue</a>

                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading" role="tab" id="priorityHeading">
                    	<h4 class="panel-title">
	        			Priority
	      			</h4>

                </div>
                <div id="priorityInfo" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <p>In most cases, our response time for tickets is 30 minutes. This may be extended due to tech availability and number of open tickets. If you would rather decrease your ticket wait time, you may purchase this ticket.</p>
                        <hr/>
                        <div class="row">
                            <div class="col-lg-6 text-center">
                                <button id="ticketPay" class="btn btn-success" style="margin-bottom:10px;">Pay $5.00 to decrease wait.</button>
                                <p class="text-left"><small>You will receive instant assistance based on tech availability. If your wait time surpasses 10 minutes, you will be refunded your purchase.</small>

                                </p>
                                <input type="text" name="token" data-name="stripeToken" style="display:none;" />
                            </div>
                            <div class="col-lg-6 text-center">
                                <button type="submit" id="SubmitForm" class="btn btn-success">Continue with original wait.</button>
                                <p class="text-left"><small>You will receive assistance within 30 minutes based on tech availability and number of currently open tickets.</small>

                                </p>
                            </div>
                        </div>
                        <hr/>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading" role="tab" id="priorityHeading">
                    	<h4 class="panel-title">
	        			Success
	      			</h4>

                </div>
                <div id="ticketDone" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <p>In most cases, our response time for tickets is 30 minutes. This may be extended due to tech availability and number of open tickets. If you would rather decrease your ticket wait time, you may purchase this ticket.</p>
                        <hr/>
                        <div class="row"></div>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    
</form>