<?php
switch ($controller) :
	case 'Business' :
		foreach ($businessesForNav as $businessSlug => $businessName) : ?>
			<li>
				<a href="#<?php echo $businessSlug; ?>-case-study"><?= $businessName; ?></a>
			</li>
		<?php endforeach; ?>
		<?php break;
	case 'Post' : ?>
		<li>
			<?= Html::link(URL::to('/'), 'Home', ['class' => "other_page"]); ?>
		</li>
		<?php break;
	default :
		foreach ($pages as $link => $text) : ?>
			<li>
				<a href="#<?= $link; ?>"><?= $text; ?></a>
			</li>
		<?php endforeach; ?>
<?php endswitch;
