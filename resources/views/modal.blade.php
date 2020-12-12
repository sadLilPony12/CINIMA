<div class="modal fade bs-example-modal-lg" id="purchase-ticket-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Purchase ticket(s)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="pd-20 card-box mb-30">
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard">
							<h5>Seat type</h5>
							<section>
                                <div class="btn-group-toggle" data-toggle="buttons">
                                    <div class="row" style="margin-bottom: 2.5%;">
                                        <div class="col-md-1" style="height: 200px;"></div>

                                        <div class="col-md-4" style="height: 200px;">
                                            <label class="btn btn-outline-info form-control seats">
                                                <input class="hide_it" type="radio" name="seat_types" id="orchestra_a" value="orchestra,a"> 
                                                <span class="center_it">Orchestra A</span>
                                            </label>
                                        </div>

                                        <div class="col-md-2" style="height: 200px;"></div>

                                        <div class="col-md-4" style="height: 200px;">
                                            <label class="btn btn-outline-info form-control seats">
                                                <input class="hide_it" type="radio" name="seat_types" id="orchestra_b" value="orchestra,b">
                                                <span class="center_it">Orchestra B</span>
                                            </label>
                                        </div>

                                        <div class="col-md-1" style="height: 200px;"></div>
                                    </div>     
                                    <div class="row">
                                        <div class="col-md-2" style="height: 200px;"></div>

                                        <div class="col-md-4" style="height: 200px;">
                                            <label class="btn btn-outline-primary form-control seats">
                                                <input class="hide_it" type="radio" name="seat_types" id="balcony_a" value="balcony,a">
                                                <span class="center_it">Balcony A</span>
                                            </label>
                                        </div>

                                        <div class="col-md-4" style="height: 200px;">
                                            <label class="btn btn-outline-primary form-control seats">
                                                <input class="hide_it" type="radio" name="seat_types" id="balcony_b" value="balcony,b">
                                                <span class="center_it">Balcony B</span>
                                            </label>
                                        </div>

                                        <div class="col-md-2" style="height: 200px;"></div>
                                    </div>  
                                </div> 
							</section>
							<!-- Step 2 -->
							<h5 id="seat-type">Seat spot</h5>
							<section>							
                                <div class="row">
                                    <div class="col-md-1"></div>
									<div class="com-md-10">
										<div class="btn-group-toggle btn-group" data-toggle="buttons">
										
										</div> 
									</div>										                              
                                    <div class="col-md-1"></div>
                                </div>
							</section>
							<!-- Step 3 -->
							<h5>Payments</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Interview For :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Interview Type :</label>
											<select class="form-control">
												<option>Normal</option>
												<option>Difficult</option>
												<option>Hard</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Interview Date :</label>
											<input type="text" class="form-control date-picker" placeholder="Select Date">
										</div>
										<div class="form-group">
											<label>Interview Time :</label>
											<input class="form-control time-picker" placeholder="Select time" type="text">
										</div>
									</div>
								</div>
							</section>
							<!-- Step 4 -->
							<h5>Overview</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Behaviour :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Confidance</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Result</label>
											<select class="form-control">
												<option>Select Result</option>
												<option>Selected</option>
												<option>Rejected</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Comments</label>
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</section>
						</form>
					</div>
				</div>                    
            </div>
        </div>
    </div>
</div>