<div class="block">
		<div class="container">
			<div class="dnt-wrp">

					<form action="{{route('Create')}}" method="post">
						<div class="dnt-frm-wrp">
							<div class="col-md-12 col-sm-12 col-lg-12">
								<h6 itemprop="headline">Personal Information</h6>
								<div class="required-fields">
									<span class="asterisk">*</span> Required
								</div>
								<hr>
								 <span class="dnt-fld3">
									<label> Name
										<span class="asterisk" aria-hidden="true">*</span></label>
									<span class="dnt-fld-inr">
										<input type="text" name="name" aria-required="true">
									</span>
								</span>
						   </div>
						  </div>
						</div>
                        <button type="submit"  class="btn btn-button">submit</button>
				    @csrf
				    </form>
				</div>
			
			</div>
		</div>
	</div>