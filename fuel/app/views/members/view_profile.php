<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "view" ); ?>'><?php echo Html::anchor('members/view','View');?></li>
	<li class='<?php echo Arr::get($subnav, "view_profile" ); ?>'><?php echo Html::anchor('members/view_profile','View profile');?></li>

</ul>
<p>View profile</p>

<?php
	//echo $contact_data[1]->contact_profile->display_name;
?>