<!--main content start-->
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<section id="main-content">
	<section class="wrapper">
		<!-- page start-->



		<!--summary brief -->

		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						<?php echo $name_summary ?>
					</header>
					<div class="panel-body">
							<form class="form-horizontal bucket-form" action=" " method="POST">
						<div class="form">

							<div class="form-group">
								<label class="col-sm-2 control-label col-sm-2">Summary</label>
								<div class="col-sm-10">
									<textarea class="form-control ckeditor" name="summary_data" rows="6"><?php echo $selected['summary'] ?></textarea>
								</div>
							</div>

						</div>
					</div>
				</section>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						<b><?php echo $name_summary ?></b>
						<span class="tools pull-right">
							<a href=""><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-map-marker"></i> View In Map</button></a>
						</span>
					</header>
					<div class="panel-body">

						<br>
						<br>
						<div class="row">
							<div class="col-md-12">

									<div class="form-group">
										<label class="col-sm-3 ">Select Summary: </label>

										<div class="row col-md-9">
											<?php foreach($summary as $data){  ?>

												<div class="col-sm-4 icheck ">
													<div class="col-md-12 bar">

													<div class="minimal single-row">
														<div class="radio ">
															<?php   if($data['eng_lang']==$selected['summary_list']){ ?>
																<input tabindex="3" type="radio" class="rdo" value="<?php echo $data['eng_lang'] ?>"  name="summary" checked>
															<?php  }else{ ?>
																<input tabindex="3" type="radio" class="rdo" value="<?php echo $data['eng_lang'] ?>"  name="summary">
															<?php  } ?>
															<label><?php echo $data['nepali_lang'] ?></label>
														</div>
														</div>
													</div>
												</div>


											<?php } ?>


										</div>

										<!-- summary brief end -->





									</div>
									<br/>
									<button type="submit" name="submit" class="btn btn-success" style="background-color: #1fb5ad;border-color: #1fb5ad;">Update</button>
								</form>
							</div>

						</div>



					</section>
				</div>
			</div>










			<!-- page end-->
		</section>
	</section>
	<!--main content end-->
