
  <div class="skill" id="skills">
      <h1>- Skills -</h1>
        <div class="row" ><div class="col-sm-8">
                <div class="row"><div class="col-md-6">
                        <div class="center-head">Technical Skills</div>
                        <center>  <div class="skill-set">
                      <?php          include "pages/3-arrays.php" ;
                                          foreach ($skills as $skill ) {
                        ?>
                          <div class="skill-unit">
                                        <div class="name-unit">
                                        <div class="skill-icon"><img src='<?php echo $skill["icon"]; ?>' alt="sukhjinder singh webdeveloper"></div>
                                        <div class="skill-name"><?php echo $skill["name"]; ?></div>
                                      </div>
                                      <div class="skill-line skill-<?php echo $skill["count"]; ?>"><span></span>	<span></span>	<span></span>	<span></span>	<span></span>
                                          <span></span>	<span></span>	<span></span>	<span></span>	<span></span></div>
                             </div>
                      <?php  } ?>
                         </div></center></div>
                    <div class="col-md-6"  >
                        <div class="center-head">Personal Skills</div>
                        <center>  <div class="skill-set">
                            <?php      foreach ($personalskills as $skill ) {  ?>
                                <div class="skill-unit">
                                      <div class="name-unit">
                                        <div class="skill-icon"><img src="<?php echo $skill["icon"]; ?>" alt="sukhjinder singh webdeveloper"></div>
                                        <div class="skill-name"><?php echo $skill["name"]; ?></div>
                                      </div>
                                      <div class="skill-line skill-<?php echo $skill["count"]; ?>"><span></span>	<span></span>	<span></span>	<span></span>	<span></span>
                                          <span></span>	<span></span>	<span></span>	<span></span>	<span></span></div>
                                </div>
                          <?php  } ?>
                         </div></center>
                     </div></div>
            </div>
            <div class="col-sm-4"  ><div class="large-window">
                  <div class="window-tint"><div class="promo-text">That's Just <br>I Have :(<strong></div></div>
            </div></div>
  </div></div>
