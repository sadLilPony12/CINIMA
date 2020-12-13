<div class="modal fade bs-example-modal-xl" id="purchase-ticket-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Purchase ticket(s)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="pd-20 card-box mb-30">
					<div class="wizard-content">
					<input type="hidden" id="movie-index">
					<button type="button" style="display:none;" id="compute-price"></button>
					<button type="button" style="display:none;" id="save-seats"></button>
						<form class="tab-wizard wizard-circle wizard" id="reserve-seat">	
							<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">	
							<input type="hidden" name="seat_column" id="seat-column">	
							<input type="hidden" name="seat_row" id="seat-row">	
							<input type="hidden" name="movie_id" id="movie-id">				
							<h5>Seat type</h5>
							<section>								
								<div class="btn-group-toggle" data-toggle="buttons">
                                    <div class="row" style="word-wrap: break-word;">
                                        <div class="col-md-1" style="height: 200px;"></div>

                                        <div class="col-md-4" style="height: 200px;">
                                            <label class="btn btn-outline-info form-control seats" data-id="orchestra,a">
                                                <input class="hide_it" type="radio" name="seat_type" id="orchestra_a" value="orchestra,a"> 
                                                <span class="center_it">Orchestra A</span>
                                            </label>
                                        </div>

                                        <div class="col-md-2" style="height: 200px;"></div>

                                        <div class="col-md-4" style="height: 200px;">
                                            <label class="btn btn-outline-info form-control seats" data-id="orchestra,b">
                                                <input class="hide_it" type="radio" name="seat_type" id="orchestra_b" value="orchestra,b">
                                                <span class="center_it">Orchestra B</span>
                                            </label>
                                        </div>

                                        <div class="col-md-1" style="height: 200px;"></div>
                                    </div>     
                                    <div class="row">
                                        <div class="col-md-2" style="height: 200px;"></div>

                                        <div class="col-md-4" style="height: 200px;">
                                            <label class="btn btn-outline-primary form-control seats" data-id="balcony,a">
                                                <input class="hide_it" type="radio" name="seat_type" id="balcony_a" value="balcony,a">
                                                <span class="center_it">Balcony A</span>
                                            </label>
                                        </div>

                                        <div class="col-md-4" style="height: 200px;">
                                            <label class="btn btn-outline-primary form-control seats" data-id="balcony,b">
                                                <input class="hide_it" type="radio" name="seat_type" id="balcony_b" value="balcony,b">
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
								<table class="table">
									<thead>
										<tr>
											<th scope="col" id="seat-title">#</th>
											<th scope="col">1</th>
											<th scope="col">2</th>
											<th scope="col">3</th>
											<th scope="col">4</th>
											<th scope="col">5</th>
											<th scope="col">6</th>
											<th scope="col">7</th>
										</tr>
									</thead>
									<tbody id="seat-table">																		
									</tbody>
								</table>
								<table class="table">
									<thead>
										<tr>
											<th scope="col" id="seat-title">#</th>
											<th>Location</th>
											<th>Position</th>
											<th>Row</th>
											<th>Column</th>
										</tr>
									</thead>
									<tbody id="table-reserved">															
									</tbody>
								</table>
							</section>
							<!-- Step 3 -->
							<h5>Payments</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Total price :</label>
											<div class="input-group custom">
												<div class="input-group-prepend custom">
													<div class="input-group-text" id="btnGroupAddon">₱</div>
												</div>
												<input type="text" class="form-control" id="total-price" name="total_price" placeholder="Input group example" aria-label="Input group example" readonly aria-describedby="btnGroupAddon">
											</div>
										</div>										
										<div class="form-group">
											<label>What time would you like to be reserved?</label>
											<select class="form-control" name="view_time">
												<option value="10">10am onwards</option>
												<option value="1">1pm onwards</option>
												<option value="4">4pm onwards</option>
												<option value="7">7pm onwards</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>When will you watch the movie?</label>
											<input type="text" class="form-control" onfocus="(this.type='date')" id="view-date" name="view_date">
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

<!-- success Popup html Start -->
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="{{ asset('images/success.png') }}"></div>
					Seat(s) reserved succesfully!
				</div>
				<div class="modal-footer justify-content-center">
					<a href="#" id="reserve-seat-submit" class="btn btn-primary">Okay</a>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->