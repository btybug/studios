  <div class="row formrow form-horizontal hide" data-opstudios="cssselector">
                    <div class="col-xs-12">
                        Edit  <span data-actviestduio="">Defult</span> View
                     </div>
                  </div>

                  <div class="row formrow form-horizontal m-l-0 m-r-0 m-b-10">
                                    <div class="col-xs-12 col-md-6 col-md-offset-3">
                                        <select  class="form-control customselect"  data-style="class-style-menu" data-switchStudio="text" data-studio="text" data-html="editTextStudio" >
                                            <option value="custom">CSS Editor</option>
                                            <option value="create">Studio</option>
                                            <option value="global">Global text class</option>
                                        </select>
                                    </div>
                                </div>

                        	 <div class="collapse" data-targetStudioType="custom">
                                        <div class="row formrow form-horizontal p-b-10 p-t-0">
                                            <div class="col-lg-12 col-xs-12">
                                              <textarea class="form-control formContarolgray hide" placeholder="Copy/Paste Css Here"  rows="5" ></textarea>
                                              <div class="editcontianer m-t-20"><div id="editortextcontianer" class="editorcss"></div></div>
                                            </div>
                                        </div>

                                   </div>


                 <div data-previewcolumn="option" class="collapse">

                 			<ul class="stepNav list-unstyled nav-justified tabStepnav clearfix m-t-10 " role="tablist" data-studitabs="opstudios">
                                        <li class="active" data-opstudios="text"><a  href="#textstyles" aria-controls="home" role="tab" data-toggle="tab" >Text Styling</a></li>
                                        <li data-opstudios="container"><a  href="#contianerstyles" aria-controls="home" role="tab" data-toggle="tab" >Container Styling</a></li>
                                       <li data-opstudios="core"><a  href="#corestyles" aria-controls="home" role="tab" data-toggle="tab" >Core </a></li>
                                </ul>

                <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" id="textstyles" data-opstudios="text" data-fieldactive="text">

                           		 <div class="collapse" data-targetStudioType="global">
                                        <div class="row">
                                             <div class="col-md-12 p-t-10">
                                                     <div class="list-group p-l-20" data-role="componentslist" data-typeclasses="text_parts">
                                                     		 <ul class="list-unstyled template-files existingclass clearfix" data-classeslsit="text">

                          									 </ul>
                                                     </div>
                                              </div>
                                        </div>
                                    </div>

                            <div class=" collapse"  data-targetStudioType="create" id="editTextStudio">
                                        <!-- new style for text studio -->
                                        <!-- Basic -->
                                        <div class="row formrow form-horizontal" data-opstudios="textstyling">
                                            <div class="col-xs-12 studio-collapse-header p-t-10 p-b-5">
                                                    <span class="pull-left">
                                                        <button type="button" data-toggle="collapse" href="#collapseBasic"  class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container">
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </button> Text Styling
                                                    </span>
                                                    <span class=" m-l-10 pull-left">
                                                        <label class="switch switch-flat switch-button">
                                                            <input class="switch-input" data-switch="collapseBasic" data-cssexist="text" type="checkbox" />
                                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                                            <span class="switch-handle "></span>
                                                        </label>
                                                    </span>

                                                    <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                                                    <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="text_parts" data-subtype="Text size" data-dataclass="Text size,Text color,Text height,Font family,Text indent,Letter spacing,Word spacing"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>

                                            </div>

                                            <div class="col-xs-12 studio-collapse-toobar collapse" id="collapseBasic" >
                                                <div class="row b-b-1">
                                      <div class="col-xs-12 col-md-6 col-lg-4 p-t-10 p-b-10 basic-font-color">
                                          <div class="pull-left col-xs-9 p-l-0 p-r-0  ">
                                              <select data-selector="fontfamily"  data-css="font-family" class="customselect form-control" data-style="class-style-menu">
                                                  <option value="Georgia, serif">Georgia, serif</option>
                                                  <option value="Times New Roman">Times New Roman</option>
                                                  <option value="Arial, Helvetica, sans-serif">Arial</option>
                                                  <option value="Helvetica, sans-serif">Helvetica</option>
                                                  <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                                                  <option value="Trebuchet MS, Helvetica, sans-serif">Trebuchet MS</option>
                                                  <option value="Verdana, Geneva, sans-serif">Verdana</option>
                                              </select>
                                          </div>
                                          <div class="pull-right col-xs-3 p-l-10  p-r-0">
                                              <span class="input-group color-picker input-color input-color-inblock" data-textcolor="color">
                                              <input type="text" class="form-control hide" id="" value="#000" name="" data-css="color">
                                              <span class="input-group-addon"><i></i></span> </span>
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6 col-lg-3  p-t-10 p-b-10 text-style-tool ">
                                          <div class="width100">
                                          <div class="spinner letter-spacing">
                                              <label for="font-size" class="sr-only">font-size</label>
                                              <input type="text" value="12" data-css="font-size" data-html="font-size" data-after="px" id="font-size" class="form-control">
                                              <div class="input-group-btn-vertical">
                                                  <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                  <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                              </div>
                                          </div>
                                          </div>
                                      </div>
                                      <div class="col-xs-6 col-md-6 col-lg-3 p-t-10 p-b-10 basic-font-weight">
                                          <a href="#" class="btn btn-default bold-button" data-actioncss="font-weight" data-val="bold">B</a> <a href="#" class="btn btn-default italic-button" data-actioncss="font-style" data-val="italic">I</a>
                                      </div>
                                      <div class="col-xs-6 col-md-6 col-lg-2  p-t-10 p-b-10 text-decoration-style">
                                          <select class="form-control customselect" data-style="class-style-menu" data-css="text-decoration"
                                    data-selector="textdecoration">
                                              <option value="none">none</option>
                                              <option value="blink" selected="selected">blink</option>
                                              <option value="line-through">line-through</option>
                                              <option value="overline">overline</option>
                                              <option value="underline">underline</option>
                                          </select>
                                      </div>
                                  </div>

                                                <div class="row b-b-1">
                                                    <div class="col-xs-12 col-md-12 col-lg-6 p-t-10 p-b-10 text-style-tool basic-letter-spacing">


                                                            <div class="spinner line-height col-xs-6">
                                                                        <label for="AngleInput" class="sr-only">line-height</label>
                                                                        <input type="text" value="12" data-css="line-height" data-html="line-height" data-after="px" id="line-height" class="form-control">
                                                                        <div class="input-group-btn-vertical">
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                        </div>
                                                                </div>



                                                                <div class="spinner word-spacing col-xs-6">
                                                                        <label for="letter-spacing" class="sr-only">letter-spacing</label>
                                                                        <input type="text" value="0" data-css="letter-spacing" data-html="letter-spacing" data-after="px" id="letter-spacing" class="form-control">
                                                                        <div class="input-group-btn-vertical">
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                        </div>
                                                                </div>




                                                    </div>
                                                    <div class="col-xs-6 col-md-6 col-lg-3 p-t-10 p-b-10  text-style-tool basic-text-transform">
                                                       <div class="text-transform">
                                                            <select class="form-control customselect"  data-css="text-transform"
                                                                data-selector="texttransform"  data-style="class-style-menu">
                                                                <option value="none">none</option>
                                                                <option value="capitalize" selected="selected">capitalize</option>
                                                                <option value="lowercase">lowercase</option>
                                                                <option value="uppercase">uppercase</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-6  col-lg-3 p-t-10 p-b-10 text-tool-align ">
                                                        <label for="textalign" class="sr-only">Text Align</label>
                                                        <select class="form-control customselect"  data-css="text-align"
                                                            data-selector="textalign"  data-style="class-style-menu">
                                                            <option data-icon="glyphicon-align-left" value="left"></option>
                                                            <option data-icon="glyphicon-align-center" value="center"></option>
                                                            <option data-icon="glyphicon-align-right" value="right"></option>
                                                            <option data-icon="glyphicon-align-justify" value="justify"></option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 col-lg-6 p-t-10 p-b-10 text-style-tool basic-letter-spacing">
                                                              <div class="spinner word-spacing col-xs-6">
                                                                        <label for="text-indent" class="sr-only">text-indent</label>
                                                                        <input type="text" value="0" data-css="text-indent" data-html="text-indent" data-after="px" id="text-indent" class="form-control">
                                                                        <div class="input-group-btn-vertical">
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                        </div>
                                                                </div>
                                                        <div class="spinner word-spacing col-xs-6">
                                                            <div>
                                                                <select class="form-control customselect"  data-css="white-space"
                                                                        data-selector="whitespace"  data-style="class-style-menu">
                                                                    <option value="nowrap">nowrap</option>
                                                                    <option value="normal" selected="selected">normal</option>
                                                                    <option value="pre">pre</option>
                                                                    <option value="pre-line">pre-line</option>
                                                                    <option value="pre-wrap">pre-wrap</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-12 col-lg-6 p-t-10 p-b-10 text-style-tool basic-letter-spacing" style="background: none;">

                                                        <div class="spinner  line-height  col-xs-6">
                                                            <div class="">
                                                                <select class="form-control customselect"  data-css="vertical-align"
                                                                        data-selector="verticalalign"  data-style="class-style-menu">
                                                                    <option value="baseline">baseline</option>
                                                                    <option value="length">length</option>
                                                                    <option value="sub">sub</option>
                                                                    <option value="super">super</option>
                                                                    <option value="top">top</option>
                                                                    <option value="text-top">text-top</option>
                                                                    <option value="middle">middle</option>
                                                                    <option value="bottom">bottom</option>
                                                                    <option value="text-bottom">text-bottom</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Shadow -->
                                        <div class="row formrow form-horizontal" data-opstudios="textshadow">
                                            <div class="col-xs-12 studio-collapse-header p-t-10 p-b-5">
                                                    <span class="pull-left">
                                                        <button type="button" data-toggle="collapse" href="#textShadowcontainer" class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container">
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </button> Text Shadow
                                                    </span>
                                                    <span class=" m-l-10 pull-left">
                                                        <label class="switch switch-flat switch-button">
                                                            <input class="switch-input" data-switch="textShadowcontainer" data-cssexist="text-shadow" type="checkbox" />
                                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                                            <span class="switch-handle "></span>
                                                        </label>
                                                    </span>
                                                    <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                                                    <a href="#" class="iconstudio viewicon m-r-5 pull-right" data-css="text-shadow" data-multycss="textshadow" data-roletemplate="textshadow"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                                     <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="text_parts" data-subtype="Text shadow" data-dataclass="Text shadow"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>

                                            </div>
                                            <div class="col-xs-12 studio-collapse-toobar collapse" data-insettemp="textshadow" id="textShadowcontainer">

                                            </div>
                                        </div>

                                        <!-- Animation -->
                                        <div class="row formrow form-horizontal" data-opstudios="animation">
                                            <div class="col-xs-12 studio-collapse-header p-t-10 p-b-5">
                                                    <span class=" pull-left">
                                                        <button type="button" data-toggle="collapse" href="#animationcontainer" class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container">
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </button> Animation
                                                    </span>
                                                    <span class=" m-l-10 pull-left">
                                                        <label class="switch switch-flat switch-button">
                                                            <input class="switch-input" data-switch="animationcontainer" data-cssexist="animation" type="checkbox" />
                                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                                            <span class="switch-handle "></span>
                                                        </label>
                                                    </span>
                                                <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                                                <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="general" data-subtype="Animation" data-dataclass="Animation"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>

                                            </div>
                                            <div class="col-xs-12 studio-collapse-toobar collapse" id="animationcontainer">
                                                <div class="row formrow form-horizontal">
                                                    <div class="form-group">
                                                        <div class="col-sm-3" for="animationname"><span class="iconform arrowicon"></span> Animation Name</div>
                                                        <div class="col-sm-6">
                                                            <select  data-style="btn-black " data-css="animation-name" data-selector="animationname" class="form-control customselect">
                                                                <option value="none">No Animation</option>
                                                                <option value="bounce">bounce</option>
                                                                <option value="flash">flash</option>
                                                                <option value="pulse">pulse</option>
                                                                <option value="rubberBand">rubberBand</option>
                                                                <option value="shake">shake</option>
                                                                <option value="headShake">headShake</option>
                                                                <option value="swing">swing</option>
                                                                <option value="tada">tada</option>
                                                                <option value="wobble">wobble</option>
                                                                <option value="jello">jello</option>
                                                                <option value="bounceIn">bounceIn</option>
                                                                <option value="bounceInDown">bounceInDown</option>
                                                                <option value="bounceInLeft">bounceInLeft</option>
                                                                <option value="bounceInRight">bounceInRight</option>
                                                                <option value="bounceInUp">bounceInUp</option>
                                                                <option value="bounceOut">bounceOut</option>
                                                                <option value="bounceOutDown">bounceOutDown</option>
                                                                <option value="bounceOutLeft">bounceOutLeft</option>
                                                                <option value="bounceOutRight">bounceOutRight</option>
                                                                <option value="bounceOutUp">bounceOutUp</option>
                                                                <option value="fadeIn">fadeIn</option>
                                                                <option value="fadeInDown">fadeInDown</option>
                                                                <option value="fadeInDownBig">fadeInDownBig</option>
                                                                <option value="fadeInLeft">fadeInLeft</option>
                                                                <option value="fadeInLeftBig">fadeInLeftBig</option>
                                                                <option value="fadeInRight">fadeInRight</option>
                                                                <option value="fadeInRightBig">fadeInRightBig</option>
                                                                <option value="fadeInUp">fadeInUp</option>
                                                                <option value="fadeInUpBig">fadeInUpBig</option>
                                                                <option value="fadeOut">fadeOut</option>
                                                                <option value="fadeOutDown">fadeOutDown</option>
                                                                <option value="fadeOutDownBig">fadeOutDownBig</option>
                                                                <option value="fadeOutLeft">fadeOutLeft</option>
                                                                <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                                                <option value="fadeOutRight">fadeOutRight</option>
                                                                <option value="fadeOutRightBig">fadeOutRightBig</option>
                                                                <option value="fadeOutUp">fadeOutUp</option>
                                                                <option value="fadeOutUpBig">fadeOutUpBig</option>
                                                                <option value="flip">flip</option>
                                                                <option value="flipInX">flipInX</option>
                                                                <option value="flipInY">flipInY</option>
                                                                <option value="flipOutX">flipOutX</option>
                                                                <option value="flipOutY">flipOutY</option>
                                                                <option value="lightSpeedIn">lightSpeedIn</option>
                                                                <option value="lightSpeedOut">lightSpeedOut</option>
                                                                <option value="rotateIn">rotateIn</option>
                                                                <option value="rotateInDownLeft">rotateInDownLeft</option>
                                                                <option value="rotateInDownRight">rotateInDownRight</option>
                                                                <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                                <option value="rotateInUpRight">rotateInUpRight</option>
                                                                <option value="rotateOut">rotateOut</option>
                                                                <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                                                <option value="rotateOutDownRight">rotateOutDownRight</option>
                                                                <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                                                <option value="rotateOutUpRight">rotateOutUpRight</option>
                                                                <option value="hinge">hinge</option>
                                                                <option value="rollIn">rollIn</option>
                                                                <option value="rollOut">rollOut</option>
                                                                <option value="zoomIn">zoomIn</option>
                                                                <option value="zoomInDown">zoomInDown</option>
                                                                <option value="zoomInLeft">zoomInLeft</option>
                                                                <option value="zoomInRight">zoomInRight</option>
                                                                <option value="zoomInUp">zoomInUp</option>
                                                                <option value="zoomOut">zoomOut</option>
                                                                <option value="zoomOutDown">zoomOutDown</option>
                                                                <option value="zoomOutLeft">zoomOutLeft</option>
                                                                <option value="zoomOutRight">zoomOutRight</option>
                                                                <option value="zoomOutUp">zoomOutUp</option>
                                                                <option value="slideInDown">slideInDown</option>
                                                                <option value="slideInLeft">slideInLeft</option>
                                                                <option value="slideInRight">slideInRight</option>
                                                                <option value="slideInUp">slideInUp</option>
                                                                <option value="slideOutDown">slideOutDown</option>
                                                                <option value="slideOutLeft">slideOutLeft</option>
                                                                <option value="slideOutRight">slideOutRight</option>
                                                                <option value="slideOutUp">slideOutUp</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row formrow form-horizontal">
                                                    <div class="form-group">
                                                        <div for="animationduration" class="col-sm-3"><span class="iconform arrowicon"></span> Animation Duration</div>
                                                        <div class="col-sm-8">
                                                            <div class="fullSliderw settingSlider greenSlider m-t-5" data-css="animation-duration" data-css-after="s" data-slide-min="0" data-slide-max="10" data-slide-step="0.1" data-slide-val="1"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row formrow form-horizontal">
                                                    <div class="form-group">
                                                        <div for="animationdelay" class="col-sm-3"><span class="iconform arrowicon"></span> Animation Delay</div>
                                                        <div class="col-sm-8">
                                                            <div class="fullSliderw settingSlider greenSlider m-t-5" data-css="animation-delay" data-css-after="s" data-slide-min="0" data-slide-max="10" data-slide-step="0.1" data-slide-val="0"> </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                       <!-- end new style for text studio -->
                                                </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="contianerstyles" data-opstudios="container" data-fieldactive="container">


                                <div class="collapse" data-targetStudioType="global">
                                        <div class="row">
                                             <div class="col-md-12 p-t-10">
                                                     <div class="list-group p-l-20" data-role="componentslist" data-typeclasses="containers">
                                                     		<ul class="list-unstyled template-files existingclass clearfix" data-classeslsit="container">

                          									 </ul>
                                                     </div>
                                              </div>
                                        </div>
                                    </div>
                                <div class="studio-collapse-toobar collapse" data-targetStudioType="select">
                                        <div class="row">
                                             <div class="col-md-4 p-t-10">
                                                     <div class="list-group p-l-20" data-role="componentslist" data-typeclasses="containers">
                                                     </div>
                                              </div>

                                             <div class="col-md-8">
                                                  <ul class="list-unstyled template-files existingclass clearfix" data-classeslsit="containers">

                                                   </ul>
                                               </div>
                                        </div>
                                </div>
                                <div class="collapse" data-targetStudioType="custom">
                                        <div class="row">
                                            <div class="col-lg-12 col-xs-12">
                                            <textarea class="form-control formContarolgray hide" placeholder="Copy/Paste Css Here"  rows="5" ></textarea>
                                                    <div class="editcontianer m-t-20"><div id="editorcsscontianer" class="editorcss"></div></div>

                                            </div>
                                        </div>

                                   </div>
                                <div class="collapse" data-targetStudioType="create"  id="editcontainerStudio">
                               <!-- Container Highet -->
                                <div class="row formrow form-horizontal" data-opstudios="contianers">
                                        <div class="col-xs-12 studio-collapse-header p-t-10 "> <span class=" pull-left">  <button type="button" data-toggle="collapse" href="#collapsecontainerHeight" class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container"> <i class="fa fa-angle-down" aria-hidden="true"></i> </button> Container </span>   <span class=" m-l-10 pull-left">
                                                <label class="switch switch-flat switch-button">
                                                        <input class="switch-input" type="checkbox" data-switch="collapsecontainerHeight" data-cssexist="height"/>
                                                        <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle "></span> </label>
                                                </span>  <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>

                                                      <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="containers" data-subtype="Height" data-dataclass="Width,Height"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>
                                                  </div>

                                        <div class="col-xs-12 studio-collapse-toobar collapse " id="collapsecontainerHeight">
                                                <div class="p-10">
                                                     <div data-collapsegroup="height">
                                                                <div class="row">
                                                                        <label class="col-xs-3  p-r-0 m-t-5" >Container height</label>
                                                                        <div class="col-xs-9">
                                                                                <div class="radio-inline customelement">
                                                                                        <input type="radio" name="content-height" id="heightauto" checked value="auto" data-csstype="height" data-getcontainer="heightauto">
                                                                                        <label for="heightauto">Auto</label>
                                                                                </div>
                                                                                <div class="radio-inline customelement customelementInherit">
                                                                                        <input type="radio" name="content-height" id="heightsame" value="same" data-csstype="height" data-getcontainer="heightFixed">
                                                                                        <label  for="heightsame">Fixed</label>
                                                                                </div>
                                                                                <div class="radio-inline customelement">
                                                                                        <input type="radio" name="content-height" id="heightcustomize" value="customize" data-csstype="height" data-getcontainer="heightcustomize">
                                                                                        <label for="heightcustomize">Range</label>
                                                                                </div>


                                                                        </div>
                                                                </div>
                                                                <div class="collapse" data-showcontainer="heightFixed">
                                                                        <div class="row p-b-5 p-t-10"  >
                                                                                <label class="col-xs-3  p-r-0 m-t-5" >Height</label>
                                                                                <div class="col-xs-3 p-l-0">
                                                                                        <div class="spinner dual">
                                                                                                <input type="text" value="500" data-role="editcss" data-min='0' data-css="height" data-default="500"  class="form-control spacing-value">
                                                                                                <select class="form-control spacing-type" data-default="px">
                                                                                                        <option value="px">px</option>
                                                                                                        <option value="em">em</option>
                                                                                                        <option value="%">%</option>
                                                                                                </select>
                                                                                                <div class="input-group-btn-vertical">
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="collapse" data-showcontainer="heightcustomize">
                                                                        <div class="row p-b-5 p-t-10"  >
                                                                                <label class="col-xs-3  p-r-0 m-t-5" >min-height</label>
                                                                                <div class="col-xs-3 p-l-0">
                                                                                        <div class="spinner dual">
                                                                                                <input type="text" value="50" data-role="editcss" data-min='0' data-css="min-height" data-default="50"  class="form-control spacing-value">
                                                                                                <select class="form-control spacing-type" data-default="px">
                                                                                                        <option value="px">px</option>
                                                                                                        <option value="em">em</option>
                                                                                                        <option value="%">%</option>
                                                                                                </select>
                                                                                                <div class="input-group-btn-vertical">
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                                <label class="col-xs-3  p-r-0 m-t-5" >Max Height</label>
                                                                                <div class="col-xs-3 p-l-0">
                                                                                        <div class="spinner dual">
                                                                                                <input type="text" value="500" data-min='0' data-role="editcss" data-css="max-height" data-default="500"  class="form-control spacing-value">
                                                                                                <select class="form-control spacing-type" data-default="px">
                                                                                                        <option value="px">px</option>
                                                                                                        <option value="em">em</option>
                                                                                                        <option value="%">%</option>
                                                                                                </select>
                                                                                                <div class="input-group-btn-vertical">
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div data-collapsegroup="width">
                                                                <div class="row">
                                                                        <label class="col-xs-3  p-r-0 m-t-5" >Container width</label>
                                                                        <div class="col-xs-9">
                                                                                <div class="radio-inline customelement">
                                                                                        <input type="radio" name="content-width" id="widthauto" checked value="auto" data-csstype="width" data-getcontainer="widthauto">
                                                                                        <label for="widthauto">Auto</label>
                                                                                </div>
                                                                                <div class="radio-inline customelement customelementInherit">
                                                                                        <input type="radio" name="content-width" id="widthsame" value="same" data-csstype="width" data-getcontainer="widthFixed">
                                                                                        <label  for="widthsame">Fixed</label>
                                                                                </div>
                                                                                <div class="radio-inline customelement">
                                                                                        <input type="radio" name="content-width" id="widthcustomize" value="customize" data-csstype="width" data-getcontainer="widthcustomize">
                                                                                        <label for="widthcustomize">Range</label>
                                                                                </div>


                                                                        </div>
                                                                </div>
                                                                <div class="collapse" data-showcontainer="widthFixed">
                                                                        <div class="row p-b-5 p-t-10"  >
                                                                                <label class="col-xs-3 col-md-1 p-r-0 m-t-5">Width</label>
                                                                                <div class="col-xs-3 p-l-0">
                                                                                        <div class="spinner dual">
                                                                                                <input type="text" value="500" data-role="editcss" data-min='0' data-css="width" data-default="500"  class="form-control spacing-value">
                                                                                                <select class="form-control spacing-type" data-default="px">
                                                                                                        <option value="px">px</option>
                                                                                                        <option value="em">em</option>
                                                                                                        <option value="%">%</option>
                                                                                                </select>
                                                                                                <div class="input-group-btn-vertical">
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>


                                                                            <label class="col-xs-3 col-md-1 p-r-0 m-t-5" >Class</label>
                                                                            <div class="col-xs-3 p-l-0">
                                                                                <div class="">
                                                                                    <select class="form-control customselect spacing-type" data-css="" data-default="" data-selector="" data-style="class-style-menu">
                                                                                        <option>Select responsive class</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                </div>
                                                                <div class="collapse" data-showcontainer="widthcustomize">
                                                                        <div class="row p-b-5 p-t-10"  >
                                                                                <label class="col-xs-3  p-r-0 m-t-5" >min-width</label>
                                                                                <div class="col-xs-3 p-l-0">
                                                                                        <div class="spinner dual">
                                                                                                <input type="text" value="50" data-role="editcss" data-min='0' data-css="min-width" data-default="50"  class="form-control spacing-value">
                                                                                                <select class="form-control spacing-type" data-default="px">
                                                                                                        <option value="px">px</option>
                                                                                                        <option value="em">em</option>
                                                                                                        <option value="%">%</option>
                                                                                                </select>
                                                                                                <div class="input-group-btn-vertical">
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                                <label class="col-xs-3  p-r-0 m-t-5" >Max width</label>
                                                                                <div class="col-xs-3 p-l-0">
                                                                                        <div class="spinner dual">
                                                                                                <input type="text" value="500" data-min='0' data-role="editcss" data-css="max-width" data-default="500"  class="form-control spacing-value">
                                                                                                <select class="form-control spacing-type" data-default="px">
                                                                                                        <option value="px">px</option>
                                                                                                        <option value="em">em</option>
                                                                                                        <option value="%">%</option>
                                                                                                </select>
                                                                                                <div class="input-group-btn-vertical">
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>


                                                </div>


                                        </div>
                                </div>

                                <!-- Background -->

                                <div class="row formrow form-horizontal" data-opstudios="background">
                                        <div class="col-xs-12 studio-collapse-header p-t-10 "> <span class=" pull-left"> <button type="button" data-toggle="collapse" href="#collapseBackground" class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container"> <i class="fa fa-angle-down" aria-hidden="true"></i> </button> Background </span> <span class=" m-l-10 pull-left">
                                                <label class="switch switch-flat switch-button">
                                                        <input class="switch-input" type="checkbox" data-switch="collapseBackground" data-cssexist="background"/>
                                                        <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle "></span> </label>
                                                </span> <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                                                     <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="containers" data-subtype="Background color" data-dataclass="Background color,Gradient color,Pattern color"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>
                                                  </div>
                                        <div class="col-xs-12 studio-collapse-toobar collapse " id="collapseBackground">
                                                  <input type="text" class="form-control hide" id="" data-val="radial-gradient(ellipse farthest-corner at 84% 72%, rgba(255,0,0,1) 2.38%, rgba(22,1,1,1) 87.43% )" value="radial-gradient(ellipse farthest-corner at 84% 72%, rgba(255,0,0,1) 2.38%, rgba(22,1,1,1) 87.43% )" name="" data-subcss="color" data-css="background">
                                                  <div class="insetColorStodio"></div>
                                        </div>
                                </div>

                                <!-- Border and Radius -->

                                <div class="row formrow form-horizontal" data-opstudios="borderradius">
                                        <div class="col-xs-12 studio-collapse-header p-t-10"> <span class="pull-left"> <button type="button" data-toggle="collapse" href="#collapseBorderRadius" class="iconstudio viewicon  m-r-5 collapsed" data-viewpopup="container"> <i class="fa fa-angle-down" aria-hidden="true"></i> </button> Border and Radius </span> <span class=" m-l-10 pull-left">
                                                <label class="switch switch-flat switch-button">
                                                        <input class="switch-input" data-switch="collapseBorderRadius" data-cssexist="border-radius" type="checkbox"/>
                                                        <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle "></span> </label>
                                                </span> <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                                                        <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="containers" data-subtype="Border" data-dataclass="Border,Radius"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>
                                                  </div>
                                        <div class="col-xs-12 studio-collapse-toobar collapse" id="collapseBorderRadius">
                                                <div class="borderRadius">
                                                <div class="row">
                                                        <div class="col-xs-12 col-md-12  col-lg-6 p-t-10 p-b-20 border-section">
                                                                <div class="col-xs-12">
                                                                        <div class="radio-inline customelement">
                                                                                <input type="radio" name="bordertype" id="bordersame" value="same" data-csstype="border" data-getcontainer="">
                                                                                <label  for="bordersame">Same Border</label>
                                                                        </div>
                                                                        <div class="radio-inline customelement">
                                                                                <input type="radio" name="bordertype" id="bordercustomize" checked value="customize" data-csstype="border" data-getcontainer="bordercustomize">
                                                                                <label for="bordercustomize">Customize</label>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12  m-t-5" data-role="borderGroup" data-roletype="top">
                                                                        <label class="col-xs-3  p-r-0 m-t-5" data-lable-title="top">Top</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner">
                                                                                        <input type="text" value="1" data-css="border-width" data-html="top" data-multycss="border" id="AngleInput" class="form-control">
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-xs-2 p-l-0"> <span class="input-group color-picker input-color input-color-inblock" data-html="top" data-multycss="border">
                                                                                <input type="text" class="form-control hide" id="" value="#000" name="" data-css="border-color" data-html="top" data-multycss="border" >
                                                                                <span class="input-group-addon"><i></i></span> </span> </div>
                                                                        <div class="col-xs-4 p-l-0">
                                                                                <select class="form-control customselect" data-css="border-style" data-html="top" data-multycss="border"  data-selector="border"  data-style="class-style-menu">
                                                                                        <option value="solid" selected="">Solid</option>
                                                                                        <option value="dashed">Dashed</option>
                                                                                        <option value="dotted">Dotted</option>
                                                                                        <option value="double">Double</option>
                                                                                        <option value="groove">Groove</option>
                                                                                        <option value="hidden">Hidden</option>
                                                                                        <option value="inset">Inset</option>
                                                                                        <option value="none">None</option>
                                                                                        <option value="outset">Outset</option>
                                                                                        <option value="ridge">Ridge</option>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12  m-t-5" data-role="borderGroup" data-roletype="right">
                                                                        <label class="col-xs-3  p-r-0 m-t-5">Right</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner">
                                                                                        <input type="text" value="1" data-css="border-width" data-html="right" data-multycss="border" id="AngleInput" class="form-control">
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-xs-2 p-l-0"> <span class="input-group color-picker input-color input-color-inblock" data-html="right" data-multycss="border">
                                                                                <input type="text" class="form-control hide" id=""  name="" data-css="border-color" data-html="right" data-multycss="border" >
                                                                                <span class="input-group-addon"><i></i></span> </span> </div>
                                                                        <div class="col-xs-4 p-l-0">
                                                                                <select class="form-control customselect" data-css="border-style" data-html="right" data-multycss="border"  data-selector="border"  data-style="class-style-menu">
                                                                                        <option value="solid" selected="">Solid</option>
                                                                                        <option value="dashed">Dashed</option>
                                                                                        <option value="dotted">Dotted</option>
                                                                                        <option value="double">Double</option>
                                                                                        <option value="groove">Groove</option>
                                                                                        <option value="hidden">Hidden</option>
                                                                                        <option value="inset">Inset</option>
                                                                                        <option value="none">None</option>
                                                                                        <option value="outset">Outset</option>
                                                                                        <option value="ridge">Ridge</option>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12  m-t-5" data-role="borderGroup" data-roletype="bottom">
                                                                        <label class="col-xs-3  p-r-0 m-t-5">Bottom</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner">
                                                                                        <input type="text" value="1" data-css="border-width" data-html="bottom" data-multycss="border" id="AngleInput" class="form-control">
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-xs-2 p-l-0"> <span class="input-group color-picker input-color input-color-inblock" data-html="bottom" data-multycss="border">
                                                                                <input type="text" class="form-control hide" id="" value="#000" name="" data-css="border-color" data-html="bottom" data-multycss="border" >
                                                                                <span class="input-group-addon"><i></i></span> </span> </div>
                                                                        <div class="col-xs-4 p-l-0">
                                                                                <select class="form-control customselect" data-css="border-style" data-html="bottom" data-multycss="border"  data-selector="border"  data-style="class-style-menu">
                                                                                        <option value="solid" selected="">Solid</option>
                                                                                        <option value="dashed">Dashed</option>
                                                                                        <option value="dotted">Dotted</option>
                                                                                        <option value="double">Double</option>
                                                                                        <option value="groove">Groove</option>
                                                                                        <option value="hidden">Hidden</option>
                                                                                        <option value="inset">Inset</option>
                                                                                        <option value="none">None</option>
                                                                                        <option value="outset">Outset</option>
                                                                                        <option value="ridge">Ridge</option>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12  m-t-5" data-role="borderGroup" data-roletype="left">
                                                                        <label class="col-xs-3  p-r-0 m-t-5">left</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner">
                                                                                        <input type="text" value="1" data-css="border-width" data-html="left" data-multycss="border" class="form-control">
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-xs-2 p-l-0"> <span class="input-group color-picker input-color input-color-inblock" data-html="left" data-multycss="border">
                                                                                <input type="text" class="form-control hide" id="" value="#000" name="" data-css="border-color" data-html="left" data-multycss="border" >
                                                                                <span class="input-group-addon"><i></i></span> </span> </div>
                                                                        <div class="col-xs-4 p-l-0">
                                                                                <select class="form-control customselect" data-css="border-style" data-html="left" data-multycss="border"  data-selector="border"  data-style="class-style-menu">
                                                                                        <option value="solid" selected="">Solid</option>
                                                                                        <option value="dashed">Dashed</option>
                                                                                        <option value="dotted">Dotted</option>
                                                                                        <option value="double">Double</option>
                                                                                        <option value="groove">Groove</option>
                                                                                        <option value="hidden">Hidden</option>
                                                                                        <option value="inset">Inset</option>
                                                                                        <option value="none">None</option>
                                                                                        <option value="outset">Outset</option>
                                                                                        <option value="ridge">Ridge</option>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-12  col-lg-6  p-t-10 p-b-20  border-section">
                                                               <div class="col-xs-12">
                                                                        <div class="radio-inline customelement">
                                                                                <input type="radio" name="radiustype" id="radiussame" value="same" data-csstype="border-radius" data-getcontainer="">
                                                                                <label  for="radiussame">Same Radius</label>
                                                                        </div>
                                                                        <div class="radio-inline customelement">
                                                                                <input type="radio" name="radiustype" id="radiuscustomize" value="customize" data-csstype="border-radius" data-getcontainer="radiuscustomize" checked>
                                                                                <label for="radiuscustomize">Customize</label>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12  m-t-20">
                                                                        <div class="col-xs-3 p-l-0" data-role="border-radiusGroup" data-roletype="top">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="03" data-html="top" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                                <option value="px">px</option>
                                                                                                <option value="em">em</option>
                                                                                                <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                                {{--<div class="spinner">--}}
                                                                                {{--<input type="text" value="03" data-html="top" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control">--}}
                                                                                {{--<div class="input-group-btn-vertical">--}}
                                                                                {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>--}}
                                                                                {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>--}}
                                                                                {{--</div>--}}
                                                                                {{--</div>--}}
                                                                        </div>
                                                                        <div class="col-xs-3 text-right" data-role="border-radiusGroup" data-roletype="top">
                                                                                <label class=" border-radius border-radius-top" for="top_border"></label>
                                                                        </div>
                                                                        <div class="col-xs-3" data-role="border-radiusGroup" data-roletype="right">
                                                                                <label class=" border-radius  border-radius-right" for="top_border"></label>
                                                                        </div>
                                                                        <div class="col-xs-3 p-l-0" data-role="border-radiusGroup" data-roletype="right">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="03" data-html="right" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                                <option value="px">px</option>
                                                                                                <option value="em">em</option>
                                                                                                <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                                {{--<div class="spinner">--}}
                                                                                {{--<input type="text" value="03" data-html="right" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control">--}}
                                                                                {{--<div class="input-group-btn-vertical">--}}
                                                                                {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>--}}
                                                                                {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>--}}
                                                                                {{--</div>--}}
                                                                                {{--</div>--}}
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12 m-t-20 ">
                                                                        <div class="col-xs-3 p-l-0" data-role="border-radiusGroup" data-roletype="left">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="03" data-html="left" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                                <option value="px">px</option>
                                                                                                <option value="em">em</option>
                                                                                                <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                                {{--<div class="spinner">--}}
                                                                                {{--<input type="text" value="03" data-html="left" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control">--}}
                                                                                {{--<div class="input-group-btn-vertical">--}}
                                                                                {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>--}}
                                                                                {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>--}}
                                                                                {{--</div>--}}
                                                                                {{--</div>--}}
                                                                        </div>
                                                                        <div class="col-xs-3 text-right" data-role="border-radiusGroup" data-roletype="left">
                                                                                <label class="border-radius  border-radius-left" for="top_border"></label>
                                                                        </div>
                                                                        <div class="col-xs-3" data-role="border-radiusGroup" data-roletype="bottom">
                                                                                <label class=" border-radius  border-radius-bottom" for="top_border"></label>
                                                                        </div>
                                                                        <div class="col-xs-3 p-l-0"  data-role="border-radiusGroup" data-roletype="bottom">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="03" data-html="bottom" data-multycss="borderRadius" data-min='0' data-css="border-radius" class="form-control spacing-value">

                                                                                        <select class="form-control spacing-type">
                                                                                                <option value="px">px</option>
                                                                                                <option value="em">em</option>
                                                                                                <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                                {{--<div class="spinner">--}}
                                                                                {{--<input type="text" value="03" data-html="bottom" data-multycss="borderRadius" data-min='0' data-css="border-radius" class="form-control">--}}
                                                                                {{--<div class="input-group-btn-vertical">--}}
                                                                                {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>--}}
                                                                                {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>--}}
                                                                                {{--</div>--}}
                                                                                {{--</div>--}}
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                </div>
                                        </div>
                                </div>

                                <!-- Shadow -->
                                <div class="row formrow form-horizontal" data-opstudios="boxsahadow">
                                        <div class="col-xs-12 studio-collapse-header p-t-10"> <span class="pull-left"> <button type="button" data-toggle="collapse" href="#collapseShadow" class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container"> <i class="fa fa-angle-down" aria-hidden="true"></i> </button>Box Shadow </span> <span class=" m-l-10 pull-left">
                                                <label class="switch switch-flat switch-button">
                                                        <input class="switch-input" data-switch="collapseShadow" data-cssexist="box-shadow" type="checkbox"/>
                                                        <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle "></span> </label>
                                                </span> <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a> <a href="#" class="iconstudio viewicon m-r-5 pull-right" data-css="box-shadow" data-multycss="boxShadow" data-roletemplate="boxShadow"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                                      <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="containers" data-subtype="Box shadow" data-dataclass="Box shadow"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>
                                                  </div>
                                        <div class="col-xs-12 studio-collapse-toobar collapse " data-insettemp="boxShadow" id="collapseShadow"> </div>
                                </div>

                                <!-- Margin and Padding -->

                                <div class="row formrow form-horizontal" data-opstudios="marginpadding">
                                        <div class="col-xs-12 studio-collapse-header p-t-10 p-b-5"> <span class=" pull-left"> <button type="button" data-toggle="collapse" href="#collapseMarginPadding" class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container"> <i class="fa fa-angle-down" aria-hidden="true"></i> </button> Margin and Padding </span>
                                          <span class=" m-l-10 pull-left">
                                              <label class="switch switch-flat switch-button">
                                                  <input class="switch-input" data-switch="collapseMarginPadding" data-cssexist="margin" type="checkbox" />
                                                  <span class="switch-label" data-on="On" data-off="Off"></span>
                                                  <span class="switch-handle "></span>
                                              </label>
                                          </span>
                                        <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                                               <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="containers" data-subtype="Margin" data-dataclass="Margin,Padding"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>
                                          </div>
                                        <div class="col-xs-12 studio-collapse-toobar collapse" id="collapseMarginPadding">
                                                <div class="row ">
                                                        <div class="col-xs-12 col-md-12  col-lg-6 p-t-10 p-b-20 border-section">
                                                                <div class="col-xs-12">
                                                                        <div class="radio-inline customelement">
                                                                                <input type="radio" name="margintype" id="marginsame" value="same" data-csstype="margin" data-getcontainer="">
                                                                                <label  for="marginsame">Same Margin</label>
                                                                        </div>
                                                                        <div class="radio-inline customelement">
                                                                                <input type="radio" name="margintype" id="margincustomize" checked value="customize" data-csstype="margin" data-getcontainer="bordercustomize">
                                                                                <label for="margincustomize">Customize</label>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12  m-t-5 " data-role="marginGroup" data-roletype="top">
                                                                        <label class="col-xs-3  p-r-0 m-t-5" data-lable-title="top">Top</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="auto" data-role="editcss" data-css="margin-top" data-same="margin" class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                            <option value="auto">auto</option>
                                                                                            <option value="px">px</option>
                                                                                             <option value="em">em</option>
                                                                                              <option value="%">%</option>
                                                                                        </select>

                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12 m-t-5" data-role="marginGroup" data-roletype="right">
                                                                        <label class="col-xs-3 p-r-0  m-t-5">Right</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="auto" data-role="editcss" data-css="margin-right" data-same="margin" class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                            <option value="auto">auto</option>
                                                                                            <option value="px">px</option>
                                                                                             <option value="em">em</option>
                                                                                              <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12 m-t-5" data-role="marginGroup" data-roletype="bottom">
                                                                        <label class="col-xs-3 p-r-0  m-t-5">Bottom</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="auto" data-role="editcss" data-css="margin-bottom" data-same="margin" class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                           <option value="auto">auto</option>
                                                                                            <option value="px">px</option>
                                                                                             <option value="em">em</option>
                                                                                              <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12 m-t-5" data-role="marginGroup" data-roletype="left">
                                                                        <label class="col-xs-3 p-r-0  m-t-5">Left</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="auto" data-role="editcss" data-css="margin-left" data-same="margin"  class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                            <option value="auto">auto</option>
                                                                                            <option value="px">px</option>
                                                                                             <option value="em">em</option>
                                                                                              <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-12  col-lg-6  p-t-10 p-b-20 ">
                                                                <div class="col-xs-12">
                                                                        <div class="radio-inline customelement">
                                                                                <input type="radio" name="paddingtype" id="paddingsame" value="same" data-csstype="padding" data-getcontainer="">
                                                                                <label  for="paddingsame">Same Padding</label>
                                                                        </div>
                                                                        <div class="radio-inline customelement">
                                                                                <input type="radio" name="paddingtype" id="paddingcustomize" checked value="customize" data-csstype="padding" data-getcontainer="radiuscustomize">
                                                                                <label for="paddingcustomize">Customize</label>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12  m-t-5" data-role="paddingGroup" data-roletype="top">
                                                                        <label class="col-xs-3  p-r-0 m-t-5" data-lable-title="top">Top</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="0" data-role="editcss" data-css="padding-top" data-same="padding" class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                            <option value="px">px</option>
                                                                                             <option value="em">em</option>
                                                                                              <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12 m-t-5" data-role="paddingGroup" data-roletype="right">
                                                                        <label class="col-xs-3 p-r-0  m-t-5" >Right</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="0"  data-role="editcss" data-css="padding-right" data-same="padding" class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                            <option value="px">px</option>
                                                                                             <option value="em">em</option>
                                                                                              <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12 m-t-5" data-role="paddingGroup" data-roletype="bottom">
                                                                        <label class="col-xs-3 p-r-0  m-t-5">Bottom </label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="0" data-role="editcss" data-css="padding-bottom" data-same="padding" class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                            <option value="px">px</option>
                                                                                             <option value="em">em</option>
                                                                                              <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xs-12 m-t-5" data-role="paddingGroup" data-roletype="left">
                                                                        <label class="col-xs-3 p-r-0  m-t-5">Left</label>
                                                                        <div class="col-xs-3 p-l-0">
                                                                                <div class="spinner dual">
                                                                                        <input type="text" value="0" data-role="editcss" data-css="padding-left" data-same="padding"  class="form-control spacing-value">
                                                                                        <select class="form-control spacing-type">
                                                                                            <option value="px">px</option>
                                                                                             <option value="em">em</option>
                                                                                              <option value="%">%</option>
                                                                                        </select>
                                                                                        <div class="input-group-btn-vertical">
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>


                                <div class="row formrow form-horizontal" data-opstudios="animation-c">
                    <div class="col-xs-12 studio-collapse-header p-t-10 p-b-5">
                            <span class=" pull-left">
                                <button type="button" data-toggle="collapse" href="#animationcontainer" class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <button href="#" class="iconstudio viewicon m-r-5 pull-right" data-buttonrole="getbasic" data-type="general" data-subtype="Animation" data-dataclass="Animation"> <i class="fa fa-folder-open-o f-s-20" aria-hidden="true"></i></button>
                            </span>
                            <span class=" m-l-10 pull-left">
                                <label class="switch switch-flat switch-button">
                                    <input class="switch-input" data-switch="animationcontainer" data-cssexist="animation" type="checkbox" />
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle "></span>
                                </label>
                            </span>
                        <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-xs-12 studio-collapse-toobar collapse" id="animationcontainer">
                        <div class="row formrow form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-3" for="animationname"><span class="iconform arrowicon"></span> Animation Name</div>
                                <div class="col-sm-6">
                                    <select  data-style="btn-black " data-css="animation-name" data-selector="animationname" class="form-control customselect">
                                        <option value="none">No Animation</option>
                                        <option value="bounce">bounce</option>
                                        <option value="flash">flash</option>
                                        <option value="pulse">pulse</option>
                                        <option value="rubberBand">rubberBand</option>
                                        <option value="shake">shake</option>
                                        <option value="headShake">headShake</option>
                                        <option value="swing">swing</option>
                                        <option value="tada">tada</option>
                                        <option value="wobble">wobble</option>
                                        <option value="jello">jello</option>
                                        <option value="bounceIn">bounceIn</option>
                                        <option value="bounceInDown">bounceInDown</option>
                                        <option value="bounceInLeft">bounceInLeft</option>
                                        <option value="bounceInRight">bounceInRight</option>
                                        <option value="bounceInUp">bounceInUp</option>
                                        <option value="bounceOut">bounceOut</option>
                                        <option value="bounceOutDown">bounceOutDown</option>
                                        <option value="bounceOutLeft">bounceOutLeft</option>
                                        <option value="bounceOutRight">bounceOutRight</option>
                                        <option value="bounceOutUp">bounceOutUp</option>
                                        <option value="fadeIn">fadeIn</option>
                                        <option value="fadeInDown">fadeInDown</option>
                                        <option value="fadeInDownBig">fadeInDownBig</option>
                                        <option value="fadeInLeft">fadeInLeft</option>
                                        <option value="fadeInLeftBig">fadeInLeftBig</option>
                                        <option value="fadeInRight">fadeInRight</option>
                                        <option value="fadeInRightBig">fadeInRightBig</option>
                                        <option value="fadeInUp">fadeInUp</option>
                                        <option value="fadeInUpBig">fadeInUpBig</option>
                                        <option value="fadeOut">fadeOut</option>
                                        <option value="fadeOutDown">fadeOutDown</option>
                                        <option value="fadeOutDownBig">fadeOutDownBig</option>
                                        <option value="fadeOutLeft">fadeOutLeft</option>
                                        <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                        <option value="fadeOutRight">fadeOutRight</option>
                                        <option value="fadeOutRightBig">fadeOutRightBig</option>
                                        <option value="fadeOutUp">fadeOutUp</option>
                                        <option value="fadeOutUpBig">fadeOutUpBig</option>
                                        <option value="flip">flip</option>
                                        <option value="flipInX">flipInX</option>
                                        <option value="flipInY">flipInY</option>
                                        <option value="flipOutX">flipOutX</option>
                                        <option value="flipOutY">flipOutY</option>
                                        <option value="lightSpeedIn">lightSpeedIn</option>
                                        <option value="lightSpeedOut">lightSpeedOut</option>
                                        <option value="rotateIn">rotateIn</option>
                                        <option value="rotateInDownLeft">rotateInDownLeft</option>
                                        <option value="rotateInDownRight">rotateInDownRight</option>
                                        <option value="rotateInUpLeft">rotateInUpLeft</option>
                                        <option value="rotateInUpRight">rotateInUpRight</option>
                                        <option value="rotateOut">rotateOut</option>
                                        <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                        <option value="rotateOutDownRight">rotateOutDownRight</option>
                                        <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                        <option value="rotateOutUpRight">rotateOutUpRight</option>
                                        <option value="hinge">hinge</option>
                                        <option value="rollIn">rollIn</option>
                                        <option value="rollOut">rollOut</option>
                                        <option value="zoomIn">zoomIn</option>
                                        <option value="zoomInDown">zoomInDown</option>
                                        <option value="zoomInLeft">zoomInLeft</option>
                                        <option value="zoomInRight">zoomInRight</option>
                                        <option value="zoomInUp">zoomInUp</option>
                                        <option value="zoomOut">zoomOut</option>
                                        <option value="zoomOutDown">zoomOutDown</option>
                                        <option value="zoomOutLeft">zoomOutLeft</option>
                                        <option value="zoomOutRight">zoomOutRight</option>
                                        <option value="zoomOutUp">zoomOutUp</option>
                                        <option value="slideInDown">slideInDown</option>
                                        <option value="slideInLeft">slideInLeft</option>
                                        <option value="slideInRight">slideInRight</option>
                                        <option value="slideInUp">slideInUp</option>
                                        <option value="slideOutDown">slideOutDown</option>
                                        <option value="slideOutLeft">slideOutLeft</option>
                                        <option value="slideOutRight">slideOutRight</option>
                                        <option value="slideOutUp">slideOutUp</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row formrow form-horizontal">
                            <div class="form-group">
                                <div for="animationduration" class="col-sm-3"><span class="iconform arrowicon"></span> Animation Duration</div>
                                <div class="col-sm-8">
                                    <div class="fullSliderw settingSlider greenSlider m-t-5" data-css="animation-duration" data-css-after="s" data-slide-min="0" data-slide-max="10" data-slide-step="0.1" data-slide-val="1"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row formrow form-horizontal">
                            <div class="form-group">
                                <div for="animationdelay" class="col-sm-3"><span class="iconform arrowicon"></span> Animation Delay</div>
                                <div class="col-sm-8">
                                    <div class="fullSliderw settingSlider greenSlider m-t-5" data-css="animation-delay" data-css-after="s" data-slide-min="0" data-slide-max="10" data-slide-step="0.1" data-slide-val="0"> </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                            </div>
                      </div>
                    <div role="tabpanel" class="tab-pane" id="corestyles" data-opstudios="core">
                       <div class="row formrow form-horizontal" data-opstudios="classes">
                                        <div class="col-xs-12 studio-collapse-header p-t-10 "> <span class=" pull-left"> <button type="button" data-toggle="collapse" href="#collapsecontainercoreclasses" class="iconstudio viewicon m-r-5 collapsed" data-viewpopup="container"> <i class="fa fa-angle-down" aria-hidden="true"></i> </button> Core classes </span>   <span class=" m-l-10 pull-left">
                                                <label class="switch switch-flat switch-button">
                                                        <input class="switch-input" type="checkbox" data-switch="collapsecontainercoreclasses" data-cssexist="height"/>
                                                        <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle "></span> </label>
                                                </span>  <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>  </div>



                                        <div class="col-xs-12 studio-collapse-toobar collapse " id="collapsecontainercoreclasses">
                                                <div class="p-r-30 p-t-10 p-b-10">


                                                        <div class="row p-b-5 p-t-10"  >
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Display</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <select class="form-control customselect spacing-type" data-css="display" data-default="block" data-selector="display" data-style="class-style-menu">
                                                                                <option value="block">block</option>
                                                                                <option value="compact">compact</option>
                                                                                <option value="inherit">inherit</option>
                                                                                <option value="flex">flex</option>
                                                                                <option value="inline">inline</option>
                                                                                <option value="inline-block">inline-block</option>
                                                                                <option value="inline-table">inline-table</option>
                                                                                <option value="inline-flex">inline-flex</option>
                                                                                <option value="list-item marker">list-item marker</option>
                                                                                <option value="none">none</option>
                                                                                <option value="run-in">run-in</option>
                                                                                <option value="table">table</option>
                                                                                <option value="table-caption">table-caption</option>
                                                                                <option value="table-cell">table-cell</option>
                                                                                <option value="table-column">table-column</option>
                                                                                <option value="table-column-group">table-column-group</option>
                                                                                <option value="table-footer-group">table-footer-group</option>
                                                                                <option value="table-header-group">table-header-group</option>
                                                                                <option value="table-row">table-row</option>
                                                                        </select>
                                                                </div>
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" data-showcontainer="settingFloat">Float</label>
                                                                <div class="col-xs-3 p-l-0" data-showcontainer="settingFloat">
                                                                        <select class="form-control customselect spacing-type" data-css="float" data-default="none"  data-selector="float" data-style="class-style-menu">
                                                                                <option value="none">none</option>
                                                                                <option value="left">left</option>
                                                                                <option value="right">right</option>
                                                                        </select>
                                                                </div>
                                                        </div>
                                                        <div class="row p-b-5 p-t-10">
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Position</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <select class="form-control customselect spacing-type" data-css="position" data-default="static" data-selector="position" data-style="class-style-menu">
                                                                                <option value="static">static</option>
                                                                                <option value="absolute">absolute</option>
                                                                                <option value="fixed">fixed</option>
                                                                                <option value="relative">relative</option>
                                                                                <option value="initial">initial</option>
                                                                                <option value="inherit">inherit</option>
                                                                        </select>
                                                                </div>
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Z-index</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <div class="spinner dual">
                                                                                <input type="text" value="auto" data-role="editcss" data-css="z-index" data-default="auto"  class="form-control spacing-value">
                                                                                <select class="form-control spacing-type" data-default="auto">
                                                                                        <option value="auto">auto</option>
                                                                                        <option value="">-</option>
                                                                                </select>
                                                                                <div class="input-group-btn-vertical">
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="collapse" data-showcontainer="positionsetting">

                                                        <div class="row p-b-5 p-t-10">
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Left</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <div class="spinner dual">
                                                                                <input type="text" value="auto" data-role="editcss" data-css="left" data-default="auto"  class="form-control spacing-value">
                                                                                <select class="form-control spacing-type" data-default="auto">
                                                                                        <option value="auto">auto</option>
                                                                                        <option value="px">px</option>
                                                                                        <option value="em">em</option>
                                                                                        <option value="%">%</option>
                                                                                </select>
                                                                                <div class="input-group-btn-vertical">
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Top</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <div class="spinner dual">
                                                                                <input type="text" value="auto" data-role="editcss" data-css="top" data-default="auto"  class="form-control spacing-value">
                                                                                <select class="form-control spacing-type" data-default="auto">
                                                                                        <option value="auto">auto</option>
                                                                                        <option value="px">px</option>
                                                                                        <option value="em">em</option>
                                                                                        <option value="%">%</option>
                                                                                </select>
                                                                                <div class="input-group-btn-vertical">
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="row p-b-5 p-t-10">
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Right</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <div class="spinner dual">
                                                                                <input type="text" value="auto" data-role="editcss" data-css="right" data-default="auto"  class="form-control spacing-value">
                                                                                <select class="form-control spacing-type" data-default="auto">
                                                                                        <option value="auto">auto</option>
                                                                                        <option value="px">px</option>
                                                                                        <option value="em">em</option>
                                                                                        <option value="%">%</option>
                                                                                </select>
                                                                                <div class="input-group-btn-vertical">
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Bottom</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <div class="spinner dual">
                                                                                <input type="text" value="auto" data-role="editcss" data-css="bottom" data-default="auto"  class="form-control spacing-value">
                                                                                <select class="form-control spacing-type" data-default="auto">
                                                                                        <option value="auto">auto</option>
                                                                                        <option value="px">px</option>
                                                                                        <option value="em">em</option>
                                                                                        <option value="%">%</option>
                                                                                </select>
                                                                                <div class="input-group-btn-vertical">
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        </div>


                                                        <div class="row p-b-5 p-t-10">
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Box-sizing</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <select class="form-control customselect spacing-type" data-css="box-sizing" data-default="border-box" data-selector="box-sizing" data-style="class-style-menu">
                                                                                <option value="content-box">content-box</option>
                                                                                <option value="border-box">border-box</option>
                                                                                <option value="initial">initial</option>
                                                                                <option value="inherit">inherit</option>
                                                                        </select>
                                                                </div>
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Cursor</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <select class="form-control customselect spacing-type" data-css="cursor"  data-default="pointer" data-selector="cursor" data-style="class-style-menu">
                                                                                <option value="alias">alias</option>
                                                                                <option value="all-scroll">all-scroll</option>
                                                                                <option value="auto">auto</option>
                                                                                <option value="cell">cell</option>
                                                                                <option value="context-menu">context-menu</option>
                                                                                <option value="col-resize">col-resize</option>
                                                                                <option value="copy">copy</option>
                                                                                <option value="crosshair">crosshair</option>
                                                                                <option value="default">default</option>
                                                                                <option value="e-resize">e-resize</option>
                                                                                <option value="ew-resize">ew-resize</option>
                                                                                <option value="grab">grab</option>
                                                                                <option value="grabbing">grabbing</option>
                                                                                <option value="help">help</option>
                                                                                <option value="move">move</option>
                                                                                <option value="n-resize">n-resize</option>
                                                                                <option value="ne-resize">ne-resize</option>
                                                                                <option value="nesw-resize">nesw-resize</option>
                                                                                <option value="ns-resize">ns-resize</option>
                                                                                <option value="nw-resize">nw-resize</option>
                                                                                <option value="nwse-resize">nwse-resize</option>
                                                                                <option value="no-drop">no-drop</option>
                                                                                <option value="none">none</option>
                                                                                <option value="not-allowed">not-allowed</option>
                                                                                <option value="pointer">pointer</option>
                                                                                <option value="progress">progress</option>
                                                                                <option value="row-resize">row-resize</option>
                                                                                <option value="s-resize">s-resize</option>
                                                                                <option value="se-resize">se-resize</option>
                                                                                <option value="sw-resize">sw-resize</option>
                                                                                <option value="text">text</option>
                                                                                <option value="vertical-text">vertical-text</option>
                                                                                <option value="w-resize">w-resize</option>
                                                                                <option value="wait">wait</option>
                                                                                <option value="zoom-in">zoom-in</option>
                                                                                <option value="zoom-out">zoom-out</option>
                                                                                <option value="initial">initial</option>
                                                                                <option value="inherit">inherit</option>
                                                                        </select>
                                                                </div>
                                                        </div>
                                                        <div class="row p-b-5 p-t-10">
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Overflow</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <select class="form-control customselect" data-css="overflow" data-default="inherit" data-selector="overflow"  data-style="class-style-menu">
                                                                                <option value="auto" selected="">auto</option>
                                                                                <option value="hidden">hidden</option>
                                                                                <option value="visible">visible</option>
                                                                                <option value="scroll">scroll</option>
                                                                                <option value="inherit">inherit</option>
                                                                        </select>
                                                                </div>
                                                                <label class="col-xs-3 text-center p-r-0 m-t-5" >Opacity</label>
                                                                <div class="col-xs-3 p-l-0">
                                                                        <div class="form-group">
                                                                                <div class="opacitySlider clearfix">
                                                                                        <div class="horzSlider settingSlider" data-css="opacity" data-default="auto" data-css-after="" data-slide-min="0" data-slide-max="1" data-slide-step="0.1" data-slide-val="1"></div>
                                                                                        <input type="text" value="1" id="opacityValue" data-rolecolor="opacity"  class="form-control">
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