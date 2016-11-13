<?php
include_once ("../Eduvent/model/thesaurus.php");

echo '
<!--Group \'Event types\'-->
<div class="list-group-item sidebar-group-head" data-toggle="collapse" href="#collapseTypes" aria-expanded="false" aria-controls="collapseTypes">
	<a>Event types<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
</div>
<div class="collapse" id="collapseTypes"><!--add class \'in\' to expand-->
	<div>
		<ul class="list-group">';
		
		foreach ($eventtypes as $key=>$value) {
			echo '<li class="list-group-item"><a href="#">' . $value . '</a></li>';
		}

echo '
		</ul>
	</div>
</div>
<!--Group \'Topics\'-->
<div class="list-group-item sidebar-group-head" data-toggle="collapse" href="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
	<a>Topics<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
</div>
<div class="collapse" id="collapseCategories"><!--add class \'in\' to expand-->
	<div>
		<ul class="list-group">';
		
			/*<li class="list-group-item"><a href="#">Art</a></li>
			<li class="list-group-item"><a href="#">Business</a></li>
			<li class="list-group-item"><a href="#">Cooking</a></li>
			<li class="list-group-item"><a href="#">Design</a></li>
			<li class="list-group-item"><a href="#">Entrepreneurship</a></li>
			<li class="list-group-item"><a href="#">Finance</a></li>
			<li class="list-group-item"><a href="#">Health</a></li>
			<li class="list-group-item"><a href="#">HR</a></li>
			<li class="list-group-item"><a href="#">Science</a></li>
			<li class="list-group-item"><a href="#">Sports</a></li>
			<li class="list-group-item"><a href="#">Technology</a></li>
			<li class="list-group-item font-weight-bold"><a href="#"><b><i>More ...</i></b></a></li>*/

echo '
		</ul>
	</div>
</div>
<!--Group \'Pricing\'-->
<div class="list-group-item sidebar-group-head" data-toggle="collapse" href="#collapsePricing" aria-expanded="false" aria-controls="collapsePricing">
	<a>Pricing<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
</div>
<div class="collapse" id="collapsePricing"><!--add class \'in\' to expand-->
	<div>
		<ul class="list-group">';

			/*<li class="list-group-item"><a href="#">All</a></li>
			<li class="list-group-item"><a href="#">Free</a></li>
			<li class="list-group-item"><a href="#">Paid</a></li>*/

echo '
		</ul>
	</div>
</div>
';