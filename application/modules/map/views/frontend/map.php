<div class="whitebg">
        <div class="container ">
            <div class="mapheader">
                <ul class="nav nav-tabs charttab">


                    <li class="active">
                        <a data-toggle="tab" href="#map">Map</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#table">Data</a>
                    </li>

                </ul>
                <div class="mapHeaderFilter">
                    <div class="mapinput">
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="mapselect">
                        <select name="" id="">
                            <option value="">Select Ward</option>
                            <option value="">Ward 1</option>
                            <option value="">Ward 2</option>
                            <option value="">Ward 3</option>
                        </select>
                    </div>
                </div>
            </div>


        </div>
</div>
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
                            <button class="btn">
                                <i class="la la-plus"></i>
                            </button>
                            <button class="btn">
                                <i class="la la-minus"></i>
                            </button>
                            <button class="btn">
                                <i class="la la-location-arrow"></i>
                            </button>
                            <button class="btn">
                                <i class="la la-refresh" aria-hidden="true"></i>
                            </button>


                        </div>

                        <div class="leftSection--header">
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


                        <div class="tab-content lefttabContent">
                            <div id="thematic" class="tab-pane   fade in show   active">
                                <div class="inputHolderL">
                                    <input class="leftSearch" type="text" placeholder="search">
                                    <i class="la la-search searchl"></i>
                                </div>
                                <div class="tabinner">
                                    <div class="accordion mapAccordion" id="sideAccordin">

                                        <div class="card">
                                            <div class="card-header" id="headingOne">

                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    CATEGORIES
                                                </button>

                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#sideAccordin">
                                                <div class="card-body">
                                                    <div class="itemsCat">
                                                        <div class="labelslf">
                                                            <div>
                                                                <i class="ls la la-sitemap"></i>
                                                                <span>Wards</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="someSwitchOptionDefault" name="someSwitchOption001"
                                                                        type="checkbox" />
                                                                    <label for="someSwitchOptionDefault" class="label-default"></label>

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
                                                                <i class="ls la la-ticket">

                                                                </i>
                                                                <span>River</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="switch2" name="switch2" type="checkbox" />
                                                                    <label for="switch2" class="label-default"></label>

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
                                                                <i class="ls la la-map">
                                                                </i>
                                                                <span>Municipal Boundary</span>

                                                            </div>
                                                            <div class="flex">
                                                                <div class="material-switch pull-right">
                                                                    <input id="switch6" name="switch6" type="checkbox" />
                                                                    <label for="switch6" class="label-default"></label>

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




                                    </div>
                                </div>




                            </div>
                            <div id="socio-economic" class="tab-pane   fade in show   ">

                                <div class="inputHolderL">
                                    <input class="leftSearch" type="text" placeholder="search">
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
                    <div class="rightSection">
                        <div class="controls right">
                            <button class="btn rightToggle">
                                <i class="la la-arrow-right"></i>
                                <i class="la la-arrow-left show"></i>
                            </button>
                            <button class="btn rmbtn">
                                <i class="la la-info"></i>
                            </button>
                            <button class="btn rmbtn">
                                <i class="la la-bar-chart"></i>

                            </button>


                        </div>
                        <div class="rightSectionHeader">
                            Active Layers
                        </div>
                        <div class="rightSectionBody ">
                            <div class="rightinner">
                                <div class="show">
                                    <div class="detItem">
                                        <div class="detItemHeader flex justify-content-between align-items-center">
                                            <div class="tcountHlder">
                                                <div class="toptext">Ward</div>
                                                <div class="counttext">200</div>
                                            </div>
                                            <div class="closeitem">
                                                <i class="la la-times"></i>
                                            </div>
                                        </div>
                                        <div class="detItemContent">
                                            <p class="dettext">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Illum ea beatae error, minima
                                                magni eum ipsum provident ab molestias</p>
                                            <div class="detItemLinkWrp">
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                    <div class="detItem">
                                        <div class="detItemHeader flex justify-content-between align-items-center">
                                            <div class="tcountHlder">
                                                <div class="toptext">Schools</div>
                                                <div class="counttext">150</div>
                                            </div>
                                            <div class="closeitem">
                                                <i class="la la-times"></i>
                                            </div>
                                        </div>
                                        <div class="detItemContent">
                                            <p class="dettext">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Illum ea beatae error, minima
                                                magni eum ipsum provident ab molestias</p>
                                            <div class="detItemLinkWrp">
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                    <div class="detItem">
                                        <div class="detItemHeader flex justify-content-between align-items-center">
                                            <div class="tcountHlder">
                                                <div class="toptext">River</div>
                                                <div class="counttext">5000</div>
                                            </div>
                                            <div class="closeitem">
                                                <i class="la la-times"></i>
                                            </div>
                                        </div>
                                        <div class="detItemContent">
                                            <p class="dettext">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Illum ea beatae error, minima
                                                magni eum ipsum provident ab molestias</p>
                                            <div class="detItemLinkWrp">
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                    <div class="detItem">
                                        <div class="detItemHeader flex justify-content-between align-items-center">
                                            <div class="tcountHlder">
                                                <div class="toptext">River</div>
                                                <div class="counttext">5000</div>
                                            </div>
                                            <div class="closeitem">
                                                <i class="la la-times"></i>
                                            </div>
                                        </div>
                                        <div class="detItemContent">
                                            <p class="dettext">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Illum ea beatae error, minima
                                                magni eum ipsum provident ab molestias</p>
                                            <div class="detItemLinkWrp">
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>
                                                <div class="detItemlink flex justify-content-between align-items-center">
                                                    <div class="lname">Gaku Khola</div>
                                                    <div>
                                                        <i class="la la-crosshairs"></i>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="" id="bar"></div>

                            </div>
                        </div>
                    </div>
                    <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31625950213!2d85.29111331363042!3d27.708955944427107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1545981553404"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div id="map" class="tab-pane   fade in show   ">
        </div>
        <div id="table" class="tab-pane   fade in show   ">
        </div>
    </div>
    </div> 
   