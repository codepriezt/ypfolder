<div class="block">
		<div class="container">
			<div class="dnt-wrp">

					<form action="{{route('formCreate')}}" method="post">
						<div class="dnt-frm-wrp">
							<div class="col-md-12 col-sm-12 col-lg-12">
								<h6 itemprop="headline">Personal Information</h6>
								<div class="required-fields">
									<span class="asterisk">*</span> Required
								</div>
								<hr>
								 <span class="dnt-fld3">
									<label>Full Name
										<span class="asterisk" aria-hidden="true">*</span></label>
									<span class="dnt-fld-inr">
										<input type="text" name="name" aria-required="true">
									</span>
								</span>
								<span class="dnt-fld3">
									<label>Email Address
									<span class="asterisk" aria-hidden="true">*</span>
								</label>
									<span class="dnt-fld-inr">
										<input type="email" name="email">
									</span>
								</span>
								 <span class="dnt-fld3">
									<label>Phone Number<span class="asterisk" aria-hidden="true">*</span>
									</label>
									<span class="dnt-fld-inr">
										<input type="number" name="phone" placeholder="Enter your phone number">
									</span>
								</span>
								 <span class="dnt-fld3">
									<label>Address
									<span class="asterisk" aria-hidden="true">*</span>
								</label>
									<span class="dnt-fld-inr">
										<input type="text" name="address" placeholder="No.1 xxx str.">
									</span>
								</span>
								<span class="dnt-fld3">
									<label>State
									<span class="asterisk" aria-hidden="true">*</span></label>
									<span class="dnt-fld-inr">
										<select name="state_id" id="state" class="form-control">
											<option value="" selected="selected" >- Select -</option>
										@foreach($state as $state)
										<option value={{$state->id}} selected="selected" >{{$state->name}}</option>
										@endforeach
										</select>
								   </span>
								  </span> 
								  <span class="dnt-fld3">
									<label>LGA<span class="asterisk" aria-hidden="true">*</span>
									</label>
									<span class="dnt-fld-inr">
										<input type="text" name="lga" placeholder="local government">
									</span>
								</span>
								<hr>

								<div class="field">
									<label>What skill are you applying for?
									<span class="asterisk" aria-hidden="true">*</span>
								</label>
									
									<select name="course_id" id="skill" class="form-control1">
										<option value="" selected="selected" >- Select -</option>
										@foreach($course as $course)
										<option value={{$course->id}} selected="selected" >{{$course->name}}</option>
										@endforeach
									</select>
									
								</div>

								<div class="field">
									<label>Have you attended the previous SAP?<span class="asterisk" aria-hidden="true">*</span>
									</label>									
									<select name="attended" id="state" class="form-control1">
										<option value="" selected="selected" >- Select -</option>
										<option value="1">Yes</option>
										<option value="2">No</option>
									</select>	
								</div>

								<div class="field">
								  <label>Would you be present throughout the period of the training?
									<span class="asterisk" aria-hidden="true">*</span>
								  </label>
								 <select name="present" id="state" class="form-control1">
										<option value="" selected="selected" >- Select -</option>
										<option value="1">Yes</option>
										<option value="2">No</option>
								 </select>	
							    </div>
								
								  <div class="col-md-9 col-sm-9 col-lg-9">
									<span class="dnt-fld3">
								 <br>	
                                    <div class="g-recaptcha" data-sitekey="6Lc0j88UAAAAACjorG66zwa7FS0hdHLX7K3bYxdT" name="g-recaptcha"></div>
                               <br/>
									<button class="thm-btn" type="submit">Continue</button>
									</span>
								</div>
						</div>
						</div>
						@csrf
				    </form>
				</div>
			
			</div>
		</div>
	</div>