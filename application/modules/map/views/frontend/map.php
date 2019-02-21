<link href="<?php echo base_url();?>assets/frontend/leaflet/leaflet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.11/c3.min.css">


 <div id="mapHolder">
        <div class="tab-pane">
            <div id="map" class="tab-pane   fade in show   active">
                <div class="frameHolder" style="width: 100%">
                    <div class="leftSection">
                        <div class="controls">
                            <button class="btn leftToggle">
                                <i class="la la-bars show"></i>
                                <i class="la la-arrow-right"></i>
                            </button>
                            <button class="btn" id="zoomin">
                                <i class="la la-plus"></i>
                            </button>
                            <button class="btn" id="zoomout">
                                <i class="la la-minus"></i>
                            </button>
                            <button class="btn">
                                <i class="la la-location-arrow"></i>
                            </button>
                            <button class="btn" id="refresh">
                                <i class="la la-refresh" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="layer_warpper">
                            <div class="leftSection--header" style="z-index: 9999;">
                                <div class="mapTtitle">Layers</div>
                            </div>
                            <ul class="nav nav-tabs lefttab">
                                <li>
                                    <a class="active" data-toggle="tab" href="#thematic">Thematic Map</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#socio-economic">Socio-economic Map</a>
                                </li>
                            </ul>
                        </div>
                        <div class="layer-select">
                            <select class="niceSelect">
                                <option>ward</option>
                            </select>
                        </div>
                        <div class="tab-content lefttabContent">
                            <div id="thematic" class="tab-pane   fade in show   active">
                                <div class="inputHolderL">
                                    <input class="leftSearch" type="text" placeholder="search" id="myInput" onkeyup="myFunction()">
                                    <i class="la la-search searchl"></i>
                                </div>
                                <div class="tabinner">
                                    <div class="accordion mapAccordion" id="sideAccordin">
                                        <?php $categories = array('Hazard_Data','Baseline_Data','Exposure_Data');
                                        $lang=$this->session->get_userdata('Language');
                                            if($lang['Language']=='en') {
                                              $language='en';
                                            }else{
                                              $language='nep';
                                            }
                                          foreach ($categories as $key => $cat) {
                                            $layerscategorydata = $this->general->get_tbl_data_result('uplaod_type,style,category_table,category_name','categories_tbl',array('language'=>$language,'public_view'=>'1','category_type'=>$cat));
                                           ?>
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne<?php echo $cat ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $cat ?>">
                                                        <?php if($cat == "Hazard_Data")
                                                        {
                                                            echo "Risk and Hazards";
                                                        }elseif($cat == "Baseline_Data"){
                                                            echo "Baseline Datasets";
                                                        }else{
                                                             echo "Municipal Resources";
                                                         } ?>
                                                    </button>
                                                </div>
                                                <div id="collapseOne<?php echo $cat ?>" class="collapse show" aria-labelledby="headingOne<?php echo $cat ?>"
                                                    data-parent="#sideAccordin">
                                                    <div class="card-body">
                                                    <?php
                                                        if($layerscategorydata){ //echo "<pre>"; print_r($layerscategory);die;
                                                            foreach ($layerscategorydata as $key => $layer) { ?>
                                                        <?php
                                                        if($layer['uplaod_type']=='csv'){ //Point and line check
                                                            if($layer['style']==NULL){ //style null check
                                                            $mark_div='<div class="dot" style=" height: 12px;width: 12px;background-color:rgba(51, 136, 255, 0.4);border-radius: 50%;display: inline-block;margin-left:5px; border:2px solid rgba(51, 136, 255, 1)"></div>';
                                                            }else{
                                                                 $key_arr=json_decode($layer['style'],TRUE);

                                                                 if(array_key_exists('icon',$key_arr)){ //style circle or marker check

                                                                   $mrk_icon=json_decode($layer['style'],TRUE)['icon'];
                                                                   $mark_div='<img src="'.$mrk_icon.'" class="mrker-icon"  height ="19px" width ="13px">';

                                                                }else{
                                                                    $mark_div='<div class="dot" style=" height: 12px;width: 12px;background-color:blue;opacity: 0.5;border-radius: 50%;display: inline-block;margin-left:5px; border:1px solid black"></div>';

                                                                } //style circle or marker check
                                                            }//style null check
                                                        }else{

                                                           if($layer['style']==NULL){ //style null check
                                                                $mark_div='<div style=" width:12px;height:12px;background-color:rgba(51, 136, 255, 0.4);opacity: 0.5;display:inline-block;border:2px solid rgba(51, 136, 255, 1);margin-left:5px;"> </div>';
                                                           }else{
                                                                $poly=json_decode($layer['style'],TRUE);
                                                                $filcolor=ltrim(!empty($poly['fillColor'])?$poly['fillColor']:'','#');
                                                                $filopacity=!empty($poly['fillOpacity'])?$poly['fillOpacity']:'';
                                                                $opacity=!empty($poly['opacity'])?$poly['opacity']:0;
                                                                $color=ltrim(!empty($poly['color'])?$poly['color']:0,'#');
                                                                $weight=!empty($poly['weight'])?$poly['weight']:0;
                                                                if($weight>'4'){
                                                                    $weight='4';
                                                                }
                                                                if($filcolor !== "0"||$filopacity!=="0"){
                                                                    $rgb=$this->general->hex_to_rgb($filcolor,$filopacity);
                                                                }else{
                                                                    $rgb="rgba(51, 136, 255, 0.4)";
                                                                }
                                                                if($color != "0"||$opacity!="0"){
                                                                    $rgb1=$this->general->hex_to_rgb($color,$opacity);
                                                                }else{
                                                                    $rgb1="rgba(51, 136, 255, 0.4)";
                                                                }
                                                             $mark_div='<div style=" width:12px;height:12px;background-color:'.$rgb.';opacity:1 ;display:inline-block;border:'.$weight.'px solid '.$rgb1.';margin-left:5px;"> </div>';
                                                           }
                                                        } //Point and line check
                                                        ?>
                                                        <!-- marker code start here -->
                                                            <div class="itemsCat">
                                                                <div class="labelslf">
                                                                    <div class="flex align-items-start searchFIlterData" id="<?php echo $layer['category_table']; ?>">
                                                                        <?php echo $mark_div; ?>&nbsp;&nbsp;&nbsp;
                                                                        <span><?php echo  $layer['category_name'] ?></span>
                                                                    </div>
                                                                   <div class="flex">
                                                                        <div class="material-switch pull-right">
                                                                            <input class = "checkBox" value="<?php echo $layer['category_table'] ?>_toggle" id="<?php echo  $layer['category_table'] ?>_switch" name="switch2" type="checkbox" <?php  ?> />
                                                                            <label for="<?php echo  $layer['category_table'] ?>_switch" class="label-default"></label>

                                                                        </div>
                                                                        <div class="elipsis">
                                                                            <i class="la la-ellipsis-v ellipse"></i>
                                                                            <div class="inlist">
                                                                                <div class="listItmesInner filterData">
                                                                                    Apply filter
                                                                                </div>
                                                                                <div class="listItmesInner viewTable"  data-title="<?php echo  $layer['category_name'] ?> Dataset View Table" data-layername="<?php echo  $layer['category_table'] ?>">
                                                                                    View table
                                                                                </div>
                                                                                <div class="listItmesInner ZoomTolayer" data-layername="<?php echo  $layer['category_table'] ?>">
                                                                                    Zoom to layer
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="listWithCheckbox">
                                                                    <div class="checkItem">
                                                                        <label class="control control--checkbox">
                                                                            <input type="checkbox" /> Centre
                                                                            <div class="control__indicator"></div>
                                                                        </label>
                                                                    </div>

                                                                    <div class="checkItem">
                                                                        <label class="control control--checkbox">
                                                                            <input type="checkbox" /> Sub Centre
                                                                            <div class="control__indicator"></div>
                                                                        </label>
                                                                    </div>

                                                                    <div class="checkItem">
                                                                        <label class="control control--checkbox">
                                                                            <input type="checkbox" /> Headquater
                                                                            <div class="control__indicator"></div>
                                                                        </label>
                                                                    </div>

                                                                    <!-- <div class="checkItem">
                                                                        <label class="control control--checkbox">
                                                                            <input type="checkbox" /> Kattike Khola
                                                                            <div class="control__indicator"></div>
                                                                        </label>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        <?php }  } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div id="socio-economic" class="tab-pane   fade in show   ">

                                <div class="inputHolderL">
                                    <input class="leftSearch" type="text" name="keywords" placeholder="search" >
                                    <i class="la la-search searchl"></i>
                                </div>
                                <div class="tabinner">
                                    <div class="accordion mapAccordion" id="sideAccordin">

                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#c1" aria-expanded="true" aria-controls="collapseOne">
                                                    Population Dynamics
                                                </button>

                                            </div>

                                            <div id="c1" class="collapse show" aria-labelledby="headingOne1"
                                                data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Total Population</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s1" name="s1" type="checkbox" />
                                                                    <label for="s1" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Population Density</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s2" name="switch2" type="checkbox" />
                                                                    <label for="s2" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Crude birth rate</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s3" name="s3" type="checkbox" />
                                                                    <label for="s3" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Crude death rate</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s4" name="s3" type="checkbox" />
                                                                    <label for="s4" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Infant Mortality Rate</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s5" name="s5" type="checkbox" />
                                                                    <label for="s5" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#c2" aria-expanded="true" aria-controls="c2">
                                                    Population characterstics
                                                </button>

                                            </div>

                                            <div id="c2" class="collapse" aria-labelledby="headingOne1" data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Population with disability</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s11" name="s11" type="checkbox" />
                                                                    <label for="s11" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Sex ratio</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s21" name="switch21" type="checkbox" />
                                                                    <label for="s21" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#c3" aria-expanded="true" aria-controls="c3">
                                                    Education
                                                </button>

                                            </div>

                                            <div id="c3" class="collapse " aria-labelledby="headingOne1" data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Literacy rate</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s4" name="s4" type="checkbox" />
                                                                    <label for="s4" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Total literate population</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s5" name="switch2" type="checkbox" />
                                                                    <label for="s5" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Student Teacher Ratio</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s6" name="s3" type="checkbox" />
                                                                    <label for="s6" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#c5" aria-expanded="true" aria-controls="c5">
                                                    Economy activity
                                                </button>

                                            </div>

                                            <div id="c5" class="collapse " aria-labelledby="headingOne1" data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Percentage of employed population</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s6" name="s4" type="checkbox" />
                                                                    <label for="s6" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Percentage of unemployed population</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s7" name="switch2" type="checkbox" />
                                                                    <label for="s7" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div class="flex align-items-start">

                                                                <span>Percentage of Economically active population</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s8" name="s3" type="checkbox" />
                                                                    <label for="s8" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="listWithCheckbox">
                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Gakhu Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Demo
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Manahara Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>

                                                            <div class="checkItem">
                                                                <label class="control control--checkbox">
                                                                    <input type="checkbox" /> Kattike Khola
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#c6" aria-expanded="true" aria-controls="c6">
                                                    Gender Aspect
                                                </button>

                                            </div>

                                            <div id="c6" class="collapse " aria-labelledby="headingOne1" data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Percentage of household with female ownership on
                                                                    land</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s9" name="s4" type="checkbox" />
                                                                    <label for="s9" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#c7" aria-expanded="true" aria-controls="c7">
                                                    Household Characterstics
                                                </button>

                                            </div>

                                            <div id="c7" class="collapse " aria-labelledby="headingOne1" data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Total Household units</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s10" name="s4" type="checkbox" />
                                                                    <label for="s10" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Household sizes</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s11" name="s4" type="checkbox" />
                                                                    <label for="s11" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#c8" aria-expanded="true" aria-controls="c8">
                                                    Environment,Sanitation and
                                                    Health
                                                </button>

                                            </div>

                                            <div id="c8" class="collapse " aria-labelledby="headingOne1" data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Total health institution</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s13" name="s4" type="checkbox" />
                                                                    <label for="s13" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Population per health institution</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s14" name="s4" type="checkbox" />
                                                                    <label for="s14" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#c9" aria-expanded="true" aria-controls="c9">
                                                    Agriculture
                                                </button>

                                            </div>

                                            <div id="c9" class="collapse " aria-labelledby="headingOne1" data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Per distribution of agriculture holding area</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s16" name="s4" type="checkbox" />
                                                                    <label for="s16" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Per of soil degradation</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s17" name="s4" type="checkbox" />
                                                                    <label for="s17" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">

                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#c10" aria-expanded="true" aria-controls="c10">
                                                    Other development indicator
                                                </button>

                                            </div>

                                            <div id="c10" class="collapse " aria-labelledby="headingOne1" data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Labour productivity</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s18" name="s4" type="checkbox" />
                                                                    <label for="s18" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Human poverty index</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s19" name="s4" type="checkbox" />
                                                                    <label for="s19" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>

                                                                <span>Life Expectancy at birth</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="s20" name="s4" type="checkbox" />
                                                                    <label for="s20" class="label-default"></label>

                                                                </div>
                                                                <div class="elipsis">
                                                                    <i class="la la-ellipsis-v ellipse"></i>
                                                                    <div class="inlist">
                                                                        <div class="listItmesInner">
                                                                            Apply filter
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            View table
                                                                        </div>
                                                                        <div class="listItmesInner">
                                                                            Zoom to layer
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rightSection" style="z-index: 9999;">
                        <div class="controls right">
                            <button class="btn rightToggle">
                                <i class="la la-arrow-right"></i>
                                <i class="la la-arrow-left show"></i>
                            </button>
                            <button class="btn righticons active" id="info_btn">
                                <i class="la la-info"></i>
                            </button>

                             <button class="btn" id="popup_btn">
                                <i class="la la-comment"></i>
                            </button>

                             <button class="btn" id="chart_btn">
                                <i class="la la-bar-chart"></i>
                            </button>
                        </div>

                        <div class="rightSectionBody ">
                            <div class="rightinner">

                                <div class="show summryData" id="summryData">
                                    <div class="rightSectionHeader">Active Layers</div>
                                </div>
                                <div class="" id="bar">
                                              <div class="rightSectionHeader">
                                    Active Layers
                                </div>
                                </div>
                                  <div  id="popup">

                                        <h1>Popup Data</h1>





                                </div>
                            </div>
                        </div>
                    </div>
                    <div id = "myMap"></div>
                </div>
            </div>
        </div>
        <div id="map" class="tab-pane   fade in show">
        </div>
        <div id="table" class="tab-pane   fade in show">
        </div>
        <div id="table" class="tab-pane   fade in show">
        </div>
    </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="spinnerModal">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <span class="fa fa-spinner fa-spin fa-3x w-100"></span>
        </div>
    </div>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/scriptall.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/jquery.nicescroll.min.js"></script>
   <script> 
        function myFunction() {
            var input, filter, div, h6, a, i;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            //alert(filter);
            div = document.getElementsByClassName("myUL");

            h6 = document.getElementsByClassName("searchFIlterData");//document.getElementsByTagName('h6');

            //alert(h6);
            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < h6.length; i++) {
              // a = h6[i].getElementsByTagName("a")[0];
              if (h6[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    $("#"+h6[i].id).parent().parent().css('display','');
                } else {

                    $("#"+h6[i].id).parent().parent().css('display','none');
                }
            }
        }
        $(document).ready(function () {
            $(".mapAccordion,.detItemLinkWrp,.rightinner").niceScroll({
                cursorcolor: "#502e8e"
            });
            $(".mapAccordion,.detItemLinkWrp,.rightinner").mouseover(function () {
                $(".mapAccordion,.detItemLinkWrp,.rightinner").getNiceScroll().resize();
            });
            iframeHeight();
            $("body ").addClass("hidden");

            function iframeHeight() {



                var deviceFullHeight = $(window).height();
                var canvasHeight = deviceFullHeight - $("#mapHolder").offset().top;
                var leftHeight = canvasHeight - 5;
                var scrollHeight = deviceFullHeight - $(".tabinner").offset().top - 10;
                var rightHeight = deviceFullHeight - $(".rightSectionBody").offset().top - 10;
                $("#myMap").css("height", canvasHeight);

                $(".tabinner ").css("height", scrollHeight);

                $(".leftSection").css("height", leftHeight);
                $(".rightSection").css("height", leftHeight);
                $(".rightSectionBody").css("height", rightHeight);


            }

            $(window).resize(function () {
                iframeHeight();
            });
            $(".rightinner").find(".nicescroll-rails").css("display", "none");

            $(".itemsCat .label-default").click(function () {

                $(".rightSection").addClass("show");
                $(this).closest(".itemsCat").toggleClass("showList");
            })

            $(".rightToggle").click(function () {
                if($(".rightSection").hasClass("show")){
                    $(".rightSection").removeClass("show");
                     $("#info_btn").css({"background-color": "white", "color": "#673bb7"});
                }
                else{
                    $(".rightSection").addClass("show");
                    $("#info_btn").css({"background-color": "#673bb7", "color": "white"});
                }
            })



            $(".closeitem").click(function () {
               // alert(all);
                var all = $(this).closest(".detItem").fadeOut("slow");

            });

            $("#info_btn").click(function () {
                $(".rightinner > div").addClass("show");
                 $("#popup").hide();
                  $("#bar").hide();

            });

             $("#popup_btn").click(function () {
                //console.log("hdshadjs");
                $("#popup").show();
                 $(".rightinner > div").removeClass("show");
                  $("#bar").hide();


            });

            $("#chart_btn").click(function () {
                console.log("hdshadjs");
                $("#bar").show();
                $("#popup").hide();
                $(".rightinner > div").removeClass("show");
            });

            $(".leftToggle").click(function () {
                $(".leftToggle i").toggleClass("show");
                $(".leftSection").toggleClass("hide");
            });


            $(".ellipse").click(function () {

                $(this).siblings(".inlist").toggleClass("visible");
            })
        });
    </script>
    <script>
        $(document).ready(function (e) {
            $(".mobile-button").click(function (event) {
                $("#content").addClass("mobile-open");
                event.stopPropagation();
            });

            $(document).click(function (event) {
                $(".ellipse").click(function (event) {
                    $(this).siblings(".inlist").addClass("visible");
                    event.stopPropagation();
                });

                $(document).click(function (event) {
                    if (!$(event.target).hasClass('visible')) {
                        $(".inlist").removeClass("visible");
                    }
                });
            });
        });
        $('.viewTable').on('click',function(){
            var title= $(this).data('title');
            var layername= $(this).data('layername');

            $('#golobalMoadl').modal('show');
            $('#globalTitleModal').html(title);
            jQuery.ajax({
                        type: "json",
                        method:"POST",
                        url: '<?php echo base_url() ?>map/viewTable',
                        datatype: 'html',
                        data: {layername:layername},
                        beforeSend: function(){
                        },
                    success: function(jsons) {
                        data = jQuery.parseJSON(jsons);
                        if (data.statuses == 'success') {
                            $( "#globalModalId" ).html(data.template);

                        } else {
                            $( "#globalModalId" ).html(data.message);
                        }
                        setTimeout(function(){
                        $("#submitstatus").html('');
                        },4000);
                    }
                });
        });
    </script>
    <script>
        var default_cat_layer_string = '<?php echo addslashes($default_cat_map_layer); ?>';//default categories geojson
        var default_cat_layer = JSON.parse(default_cat_layer_string);
        var category_tbl_default_string = '<?php echo $category_tbl_default; ?>';// list of categories table of default
        var popup_content_default_string = '<?php echo $popup_content_default; ?>';//popup content default
        var popup_content_default = JSON.parse(popup_content_default_string);
        var marker_type_default_string = '<?php echo $marker_type_default; ?>';// list of categories table of default
        var marker_type_default = JSON.parse(marker_type_default_string);
        var category_tbl_default = JSON.parse(category_tbl_default_string);
        var cat_names_string = '<?php echo $category_names_default; ?>';//list of categories name default
        var cat_names = JSON.parse(cat_names_string);
        var map_lat='<?php echo $map_zoom_center["map_lat"]; ?>';//maintain map  center
        var map_long='<?php echo $map_zoom_center["map_long"]; ?>';//maintain map  center
        var map_zoom='<?php echo $map_zoom_center["map_zoom"]; ?>';//maintain map zoom level
        var style_default_string = '<?php echo $style_default; ?>';
        var style_default = JSON.parse(style_default_string);

        var summarycount = '<?php echo $summarycount; ?>';
        var summarydata_string = '<?php echo addslashes($summarydata_default); ?>';
       var summary_data_default =  JSON.parse(summarydata_string);
        // var summary = '<?php //echo $sumary; ?>';
        var summaryFull_defaltString = '<?php echo addslashes($category_summary_default); ?>';
        var summaryFull_defalt =  JSON.parse(summaryFull_defaltString);
        // console.log(cat_names_string);
         //console.log(popup_content_default);
      // console.log(popup_content_default_string);
    </script>
    <script type="text/javascript">
        $(function () {
            $('#bar').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Incidents Graph'
                },
                subtitle: {
                    // text: 'Source: P.A. Dept. of Education'
                },
                xAxis: {
                    categories: [' ward 1',
                        'ward 2',
                        'ward 3',
                        'ward 4',
                        'ward 5',
                        'ward 6',
                        'ward 7',
                        'ward 8',
                        'ward 9',
                        'ward 10',
                        'ward 11',
                        'ward 12',
                        'ward 13',
                        'ward 14',
                        'ward 15',
                        'ward 16',
                        'ward 17',
                        'ward 18',
                        'ward 19',
                        'ward 20',
                        'ward 21',
                        'ward 22',
                        'ward 23',
                        'ward 24',
                        'ward 25',
                        'ward 26',
                        'ward 27',
                        'ward 28',
                        'ward 29',
                        'ward 30',
                        'ward 31',
                        'ward 32'
                    ],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'incidents counts',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ''
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    data: [89.2,
                        88.4,
                        87.7,
                        86.6,
                        86.1,
                        83.9,
                        83.8,
                        81.8,
                        81.5,
                        79.5,
                        79.5,
                        77,
                        76.7,
                        74.8,
                        74.7,
                        74.6,
                        74.1,
                        74.1,
                        73.9,
                        72.5,
                        72.4,
                        72.4,
                        71.9,
                        71.7,
                        71.2,
                        70.2,
                        69.9,
                        69.8,
                        69.8,
                        69.4,
                        67.9,
                        67.6
                    ],
                    name: 'Incidents in different wards'
                }]

            });
        });
    </script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/map.js"></script>


    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/jquery.nice-select.min.js"></script>

</html>
