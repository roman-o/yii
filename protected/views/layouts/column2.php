<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
		<ul class="operations" id="yw1">

			<li><a href="/index.php?r=local/admin">редактировать адресса</a></li>
		</ul>

	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>