<?php

final class SovereignApplication extends PhabricatorApplication {

	public function getName () {
		return pht( 'Sovereign' );
	}

	public function getShortDescription () {
		return pht( 'Control BuildBot farm' );
	}

	public function getRoutes () {
		return array (
			'/sovereign/' => array (
				'' => 'SovereignController',
			)
		);
	}

	public function getBaseURI () {
		return '/sovereign/';
	}

	public function getFontIcon () {
		return 'fa-gears';
	}

	public function isPinnedByDefault(PhabricatorUser $viewer) {
		return true;
	}

	public function getApplicationOrder () {
		return 0.112;
	}
}
