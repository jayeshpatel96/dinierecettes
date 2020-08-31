<section id="home" class="divider no-bg">
      <div class="container-fluid p-0">
        <div id="revolution-slider-fullwidth_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept1" style="background-color:#000000;padding:0px;">
          <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
          <div id="revolution-slider-fullwidth-bullet-bottom-right" class="rev_slider fullscreenbanner" style="display:none; height: 137px;" data-version="5.1.1RC">
            <ul>

              <!-- SLIDE 1 -->
               <?php 
                      $i=1;
                                           
                      $q=$d->select("sliders","","");
                      while ($data=mysqli_fetch_array($q)) {
                      extract($data); 
                ?>
              <li data-index="rs-'<?php echo $i++; ?>'" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/slider/<?php echo $photo; ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/slider/<?php echo $photo; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption BigBold-Title tp-resizeme rs-parallaxlevel-0 text-uppercase"
                  id="rs-1-layer-1"

                  data-x="['left','left','left','left']" 
                  data-hoffset="['50','50','30','17']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['110','110','180','160']" 
                  data-fontsize="['105','100','70','60']"
                  data-lineheight="['100','90','60','60']"
                  data-width="['none','none','none','400']"
                  data-height="none"
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];" 
                  data-mask_out="x:inherit;y:inherit;" 
                  data-start="500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 6; white-space: nowrap;">Dinie<span class="text-orange">Recettes</span>
                </div>

                
              </li>
              <?php } ?>

              
            </ul>
            <div class="tp-bannertimer tp-top" style="height: 7px; background-color: rgba(0, 0, 0, 0.1);"></div>  
          </div>
        </div>
      </div>
    </section>
