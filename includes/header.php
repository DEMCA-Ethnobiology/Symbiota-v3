<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/header.en.php');
else include_once($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php');
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<nav class="top-login">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<span style="">
						<?= (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome').' '.$USER_DISPLAY_NAME; ?>!
					</span>
					<span class="button button-tertiary">
						<a href="<?= $CLIENT_ROOT; ?>/profile/viewprofile.php"><?= (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile')?></a>
					</span>
					<span class="button button-secondary">
						<a href="<?= $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?= (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Sign Out')?></a>
					</span>
					<?php
				} else {
					?>
					<span class="button button-secondary">
						<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . $_SERVER['SCRIPT_NAME'] . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login')?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<div class="brand-name">
					<h1></h1>
					<h2></h2>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" />
			<label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
			<!-- Menu -->
			<nav class="top-menu">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT; ?>/index.php">
							<?= (isset($LANG['H_HOME'])?$LANG['H_HOME']:'Home'); ?>
						</a>
					</li>
                    <li>
                        <a href="<?= $CLIENT_ROOT; ?>/collections/index.php"><?= $LANG['H_SEARCH'] ?></a>
                        <ul>
                            <li>
                                <a href="<?= $CLIENT_ROOT; ?>/collections/index.php" ><?= $LANG['H_COLLECTIONS'] ?></a>
                            </li>
                            <li>
                                <a href="<?= $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank"><?= $LANG['H_MAP_SEARCH'] ?></a>
                            </li>
                        </ul>
                    </li>
                                        <li>
                        <a href="<?= $CLIENT_ROOT; ?>/ethno/eaf/index.php" >Multimedia</a>
                    </li>
                    <li>
                        <a href="#"><?= $LANG['H_IMAGES'] ?></a>
                        <ul>
                            <li>
                                <a href="<?= $CLIENT_ROOT; ?>/imagelib/index.php" ><?= $LANG['H_IMAGE_BROWSER'] ?></a>
                            </li>
                            <li>
                                <a href="<?= $CLIENT_ROOT; ?>/imagelib/search.php" ><?= $LANG['H_IMAGE_SEARCH'] ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php"><?= $LANG['H_INVENTORIES'] ?></a>
                        <ul>
                            <li>
                                <a href="<?= $CLIENT_ROOT; ?>/checklists/checklist.php?cl=1" >Flora of Sierra Nororiental de Puebla</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" >Tools</a>
                        <ul>
                            <li>
                                <a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" >Dynamic checklist</a>
                            </li>
                            <li>
                                <a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key" >Dynamic key</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= $CLIENT_ROOT; ?>/userguide.php" >User guide</a>
                    </li>
                    <li>
                        <a href="<?= $CLIENT_ROOT; ?>/resources.php" >Resources</a>
                    </li>
                    <li>
                        <a href="<?= $CLIENT_ROOT; ?>/acknowledgements.php" >Acknowledgements</a>
                    </li>
					<li>
						<a href='<?= $CLIENT_ROOT; ?>/sitemap.php'>
							<?= (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap'); ?>
						</a>
					</li>
				</ul>
				<ul class="menu-right">
					<li>
						<select onchange="setLanguage(this)">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':''); ?>>Espa&ntilde;ol</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
	</header>
</div>