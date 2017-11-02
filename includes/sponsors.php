<?php include 'arrays.php' ?>
    
    <div class="wrapper block-padding is-centered">
        <section>
            <h1 class="hidden">Our organizers and partners</h1>
            <div class="is-centered">
                <!--		 Sponsors			-->
				<div style="display: inline-block">
					<h3 class="logo__heading">Platinum Sponsors</h3> 
					<?php
						foreach ($sponsors as $sponsor) {
					?>
						<div class="columns">
							<img class="" src="../assets/images/logo/<?php echo $sponsor['img']; ?>.gif" alt="<?php echo $sponsor['name']; ?>">
						</div>
					<?php } ?>
				</div>
                <!--		Organizers			-->
                <ul style="display: inline-block">
                    <h3 class="logo__heading">Organizers</h3>
                    <?php
                        foreach ($organizers as $organizer) {
                    ?>
                    <li class="columns">
                        <img class="" src="../assets/images/logo/<?php echo $organizer['img']; ?>.gif" alt="<?php echo $organizer['name']; ?>">
                    </li>
                    <?php } ?>
                </ul>
                <!--		 Partners			-->
				<ul>
					<h3 class="logo__heading">Partners</h3>
                    <?php
                        foreach ($partners as $partner) {
                    ?>
					<li class="columns">
						<img class="" src="../assets/images/logo/<?php echo $partner['img']; ?>.gif" alt="<?php echo $partner['name']; ?>">
					</li>
                    <?php } ?>
				</ul>
				
                <!--		 Organizational Support			-->
				<ul>
					<h3 class="logo__heading">Organizational Support</h3>
                    <?php
                        foreach ($supports as $support) {
                    ?>
					<li class="columns">
						<img class="" src="../assets/images/logo/<?php echo $support['img']; ?>.gif" alt="<?php echo $support['name']; ?>">
					</li>
                    <?php } ?>
				</ul>
            </div>
        </section>
    </div>