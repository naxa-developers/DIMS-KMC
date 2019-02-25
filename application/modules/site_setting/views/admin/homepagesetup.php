<section id="main-content" class="">
    <section class="wrapper">
		<div class="drrinfo-form">
			<form action="" method="POST">
				<input type="hidden" name="id" value="<?php echo !empty($homepage[0]['id'])?$homepage[0]['id']:'' ?>">
				<legend class="scheduler-border">HOME PAGE LABELS</legend>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label>MUNICIPAL DATASETS & GIS MAPPING</label>
							<input type="text" name="muncipaldatatitle" class="form-control" value="<?php echo !empty($homepage[0]['muncipaldatatitle'])?$homepage[0]['muncipaldatatitle']:'' ?>" value="<?php echo !empty($homepage[0]['muncipaldatatitle'])?$homepage[0]['muncipaldatatitle']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="muncipalprofileption" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['muncipalprofileption'])?$homepage[0]['muncipalprofileption']:'' ?></textarea>
						</div>
					</div>
					<!-- <div class="col-sm-3">
                        <label class="control-label" for="image1">Image </label>
                        <input type="file" name="image1">
                      	<?=form_error('image')?>
                    </div>
                    <div class="col-sm-3">
                    	<?php
                        $bnr_img_db=!empty($homepage[0]['image'])?$homepage[0]['image']:'';
                          if($bnr_img_db): ?>
                            <img class="img-polaroid" src="<?php echo base_url("/uploads/project/".$bnr_img_db); ?>" style="width: 300px;height: 107px;">
                            <input type="hidden" name="old_image1" value="<?php echo $bnr_img_db; ?>">
                        <?php endif;?>
                    </div> -->
					<div class="col-lg-3">
						<div class="form-group">
							<label>INCIDENT MANAGEMENT</label>
							<input type="text" name="incidenttitle" class="form-control" value="<?php echo !empty($homepage[0]['incidenttitle'])?$homepage[0]['incidenttitle']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="incidentdescription" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['incidentdescription'])?$homepage[0]['incidentdescription']:'' ?></textarea>
						</div>
					</div>
					<!-- <div class="col-sm-3">
                        <label class="control-label" for="image2">Image </label>
                        <input type="file" name="image2">
                      	<?=form_error('image')?>
                    </div>
                    <div class="col-sm-3">
                    	<?php
                        $bnr_img_db=!empty($homepage[0]['image2'])?$homepage[0]['image2']:'';
                          if($bnr_img_dbimage2): ?>
                            <img class="img-polaroid" src="<?php echo base_url("/uploads/project/".$bnr_img_dbimage2); ?>" style="width: 300px;height: 107px;">
                            <input type="hidden" name="old_image2" value="<?php echo $bnr_img_db; ?>">
                        <?php endif;?>
                    </div> -->
					<div class="col-lg-3">
						<div class="form-group">
							<label>MUNICIPAL PROFILE</label>
							<input type="text" name="muncipalprofile" class="form-control" value="<?php echo !empty($homepage[0]['muncipalprofile'])?$homepage[0]['muncipalprofile']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="mun_prof_description" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['mun_prof_description'])?$homepage[0]['mun_prof_description']:'' ?></textarea>
						</div>
					</div>
					<!-- <div class="col-sm-3">
                        <label class="control-label" for="image3">Image </label>
                        <input type="file" name="image3">
                      	<?=form_error('image3')?>
                    </div>
                    <div class="col-sm-3">
                    	<?php
                        $bnr_img_db=!empty($homepage[0]['image3'])?$homepage[0]['image3']:'';
                          if($bnr_img_dbimage3): ?>
                            <img class="img-polaroid" src="<?php echo base_url("/uploads/project/".$bnr_img_dbimage3); ?>" style="width: 300px;height: 107px;">
                            <input type="hidden" name="old_image3" value="<?php echo $bnr_img_dbimage3; ?>">
                        <?php endif;?>
                    </div> -->
					<div class="col-lg-3">
						<div class="form-group">
							<label>DISASTER INFORMATION</label>
							<input type="text" name="disastertitle" class="form-control" value="<?php echo !empty($homepage[0]['disastertitle'])?$homepage[0]['disastertitle']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="disastertitledesc" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['disastertitledesc'])?$homepage[0]['disastertitledesc']:'' ?></textarea>
						</div>
					</div>
					<!-- <div class="col-sm-3">
                        <label class="control-label" for="image4">Image </label>
                        <input type="file" name="image4">
                      	<?=form_error('image4')?>
                    </div>
                    <div class="col-sm-3">
                    	<?php
                        $bnr_img_db=!empty($homepage[0]['image4'])?$homepage[0]['image4']:'';
                          if($bnr_img_dbimage4): ?>
                            <img class="img-polaroid" src="<?php echo base_url("/uploads/project/".$bnr_img_dbimage4); ?>" style="width: 300px;height: 107px;">
                            <input type="hidden" name="old_image4" value="<?php echo $bnr_img_dbimage4; ?>">
                        <?php endif;?>
                    </div> -->
					<div class="col-lg-3">
						<div class="form-group">
							<label>TERMINOLOGIES</label>
							<input type="text" name="terminology" class="form-control" value="<?php echo !empty($homepage[0]['terminology'])?$homepage[0]['terminology']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="terminologydesc" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['terminologydesc'])?$homepage[0]['terminologydesc']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>PUBLICATIONS AND MULTIMEDIA</label>
							<input type="text" name="pubmulttitle" class="form-control" value="<?php echo !empty($homepage[0]['pubmulttitle'])?$homepage[0]['pubmulttitle']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="pubmulttitledesc" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['pubmulttitledesc'])?$homepage[0]['pubmulttitledesc']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>EMERGENCY CONTACT DIRECTORY</label>
							<input type="text" name="econtact" class="form-control" value="<?php echo !empty($homepage[0]['econtact'])?$homepage[0]['econtact']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="econtactdesc" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['econtactdesc'])?$homepage[0]['econtactdesc']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>EMERGENCY MATERIALS</label>
							<input type="text" name="ematerials" class="form-control" value="<?php echo !empty($homepage[0]['ematerials'])?$homepage[0]['ematerials']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="ematerialsdesc" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['ematerialsdesc'])?$homepage[0]['ematerialsdesc']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>WHO DOES WHAT</label>
							<input type="text" name="whtitle" class="form-control" value="<?php echo !empty($homepage[0]['whtitle'])?$homepage[0]['whtitle']:'' ?>">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="whdesc" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['whdesc'])?$homepage[0]['whdesc']:'' ?></textarea>
						</div>
					</div>
				</div>
				<legend class="scheduler-border">HOW IS OUR MOBILE APP HELPFUL LEFT SECTION</legend>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label1" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label1'])?$homepage[0]['label1']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label2" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label2'])?$homepage[0]['label2']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label3" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label3'])?$homepage[0]['label3']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label4" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label4'])?$homepage[0]['label4']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label5" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label5'])?$homepage[0]['label5']:'' ?></textarea>
						</div>
					</div>
				</div>
				<legend class="scheduler-border">HOW IS OUR MOBILE APP HELPFUL RIGHT SECTION</legend>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label6" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label6'])?$homepage[0]['label6']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label7" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label7'])?$homepage[0]['label7']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label8" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label8'])?$homepage[0]['label8']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label9" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label9'])?$homepage[0]['label9']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>DESCRIPTION</label>
							<textarea name="label10" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['label10'])?$homepage[0]['label10']:'' ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<legend class="scheduler-border">HOW IS OUR MOBILE APP HELPFUL LEFT SECTION</legend>
					<div class="col-lg-3">
						<div class="form-group">
							<label>LARGE TEXT HOMEPAGE</label>
							<textarea name="largetext" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['largetext'])?$homepage[0]['largetext']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>LARGE TEXT SUMMARY</label>
							<textarea name="largetextsummary" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['largetextsummary'])?$homepage[0]['largetextsummary']:'' ?></textarea>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>INCIDENT REPORTS TEXT</label>
							<textarea name="incidentreporttext" id="" cols="30" rows="3" class="form-control"><?php echo !empty($homepage[0]['incidentreporttext'])?$homepage[0]['incidentreporttext']:'' ?></textarea>
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">submit</button>
				</div>
			</form>
		</div>
	</section>
</section>