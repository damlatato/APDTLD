<?php
echo '
<!--Group \'Event types\'-->
<div class="list-group-item sidebar-group-head" data-toggle="collapse" href="#collapseTypes" aria-expanded="false" aria-controls="collapseTypes">
	<a>Event types<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
</div>
<div class="collapse" id="collapseTypes"><!--add class \'in\' to expand-->
	<div>
		<ul class="list-group">';
		
		foreach ($eventtypes as $key=>$value) {
			echo '<li class="list-group-item" onclick="filterEvents(\'type\',\'' . $value . '\')">' . $key . '</li>';
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

		foreach ($topics as $key=>$value) {
			echo '<li class="list-group-item" onclick="filterEvents(\'topic\',\'' . $value . '\')">' . $key . '</li>';
		}

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
			echo '<li class="list-group-item" onclick="filterEvents(\'pricing\',\'' . $value . '\')">All</li>';

		foreach ($priceCategories as $key=>$value) {
			echo '<li class="list-group-item" onclick="filterEvents(\'pricing\',\'' . $value . '\')">' . $key . '</li>';
		}

echo '
		</ul>
	</div>
</div>
';