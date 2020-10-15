<?php
//This is the custom nav tabs for housing each users training plans
//Training plans custom embedded using php
		$currentUser = get_current_user_id();
  		$userSevenDayPlan = get_field('7_day_plan', 'user_'. $currentUser);
  		$userYearPlan = get_field('year_plan', 'user_'. $currentUser);
		$userATP = get_field('Annual_training_plan', 'user_'. $currentUser);
?>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Next 7 days</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Full year plan</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Year objectives</a>
  </div>
</nav>



<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

  	<?php echo do_shortcode("[gdoc key=\"$userSevenDayPlan\" style=\"width: 100%;\" datatables_paging=\"false\" datatables_ordering=\"false\" datatables_page_length=\"7\" use_cache=\"no\"]"); ?>
  		

  	</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  	
  	<?php echo do_shortcode("[gdoc key=\"$userYearPlan\" style=\"width: 100%;\" datatables_paging=\"true\" datatables_ordering=\"false\" datatables_page_length=\"7\" use_cache=\"no\"]"); ?>


  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

Echo out form season goals here

  </div>
</div>