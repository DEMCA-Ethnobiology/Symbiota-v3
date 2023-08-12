<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $CSS_BASE_PATH; ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<style>
		p{ padding: 0px 10px; }
	</style>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<div id="innertext">
		<div id="quicksearchdiv">
			<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
			<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
				<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Taxon Search'); ?></div>
				<input id="taxa" type="text" name="taxon" />
				<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
			</form>
		</div>
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
		        <p>
					Documenting Ethnobiology in Mexico and Central America (DEMCA) is a data portal in development for the
		            presentation, exchange and discussion of traditional ecological knowledge, particularly the nomenclature,
		            classification and symbolic and economic use of flora and fauna in Indigenous communities of this region.
		            It will provide users registered as Project Managers or Community Liaisons with a mechanism to upload
		            and share their own materials (textual, photographic, and audio) and to offer these materials for
		            identification and commentary by the DEMCA community of users.
				</p>
		        <p>
		            Registered users will be able to search or browse DEMCA's resources through linguistic means (e.g,
		            Indigenous nomenclature, the semantics of plant and animal names), project or community filters, functional
		            uses (e.g, fencing, ointments), collection data (e.g., altitude), and Western nomenclature (e.g, by binomial
		            name, browsing by genus). Eventually users will be able to tag entries, create and store records in
		            personalized databases, and download these sets of linked entries to their computer. Audio recordings of
		            narratives and discussions in Indigenous languages on local flora and fauna will be accessible through
		            continuous or line-by-line playback and the contents will be displayed in transcription and translation
		            (Spanish) formats. Eventually video will be incorporated.
		        </p>
		        <p>
		            Development of the DEMCA data portal has been supported by the following programs:
		            <a href="http://www.neh.gov/divisions/odh/grant-news/the-sug-program-no-more-please-welcome-digital-humanities-advancement-grants" target="_blank">
		            National Endowment for the Humanities Digital Humanities Start-up grants</a>,
		            <a href="https://www.nsf.gov/funding/pgm_summ.jsp?pims_id=12816">National Science Foundation, Documentation of
		            Endangered Languages Program</a>, <a href="http://www.neh.gov/divisions/preservation/" target="_blank">National Endowment for the Humanities
		            Division of Preservation and Access</a>, and the <a href="http://www.eldp.net/" target="_blank">Endangered Language Documentation Programme</a>.
		            Software is based on <a href="http://symbiota.org" target="_blank">Symbiota</a>, data and web design by
		            <a href="http://www.civicactions.com" target="_blank">Civic Actions</a> (for more details on specific awards,
		            see <a href="misc/acknowledgements.php">Acknowledgements</a>. Usage Policy. Copyright © 2016.
		        </p>
		        <p>
		            How to cite: [Authors], [Collection name] accessed at DEMCA: Documenting the Ethnobiology of Mexico and Central America (Jonathan
		            D. Amith, project director), accessed on [day month year].
		        </p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>
		        <p>
					Documenting Ethnobiology in Mexico and Central America (DEMCA) is a data portal in development for the
		            presentation, exchange and discussion of traditional ecological knowledge, particularly the nomenclature,
		            classification and symbolic and economic use of flora and fauna in Indigenous communities of this region.
		            It will provide users registered as Project Managers or Community Liaisons with a mechanism to upload
		            and share their own materials (textual, photographic, and audio) and to offer these materials for
		            identification and commentary by the DEMCA community of users.
				</p>
		        <p>
		            Registered users will be able to search or browse DEMCA's resources through linguistic means (e.g,
		            Indigenous nomenclature, the semantics of plant and animal names), project or community filters, functional
		            uses (e.g, fencing, ointments), collection data (e.g., altitude), and Western nomenclature (e.g, by binomial
		            name, browsing by genus). Eventually users will be able to tag entries, create and store records in
		            personalized databases, and download these sets of linked entries to their computer. Audio recordings of
		            narratives and discussions in Indigenous languages on local flora and fauna will be accessible through
		            continuous or line-by-line playback and the contents will be displayed in transcription and translation
		            (Spanish) formats. Eventually video will be incorporated.
		        </p>
		        <p>
		            Development of the DEMCA data portal has been supported by the following programs:
		            <a href="http://www.neh.gov/divisions/odh/grant-news/the-sug-program-no-more-please-welcome-digital-humanities-advancement-grants" target="_blank">
		            National Endowment for the Humanities Digital Humanities Start-up grants</a>,
		            <a href="https://www.nsf.gov/funding/pgm_summ.jsp?pims_id=12816">National Science Foundation, Documentation of
		            Endangered Languages Program</a>, <a href="http://www.neh.gov/divisions/preservation/" target="_blank">National Endowment for the Humanities
		            Division of Preservation and Access</a>, and the <a href="http://www.eldp.net/" target="_blank">Endangered Language Documentation Programme</a>.
		            Software is based on <a href="http://symbiota.org" target="_blank">Symbiota</a>, data and web design by
		            <a href="http://www.civicactions.com" target="_blank">Civic Actions</a> (for more details on specific awards,
		            see <a href="misc/acknowledgements.php">Acknowledgements</a>. Usage Policy. Copyright © 2016.
		        </p>
		        <p>
		            How to cite: [Authors], [Collection name] accessed at DEMCA: Documenting the Ethnobiology of Mexico and Central America (Jonathan
		            D. Amith, project director), accessed on [day month year].
		        </p>
			</div>
			<?php
		}
		?>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
