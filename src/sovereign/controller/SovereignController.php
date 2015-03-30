<?php

final class SovereignController extends SovereignBaseController {

	public function buildApplicationCrumbs () {
		$crumbs = parent::buildApplicationCrumbs();

		return $crumbs;
	}

	public function processRequest() {
		$request = $this->getRequest();
		$user = $request->getUser();
		$buildbot = PhabricatorEnv::getEnvConfigIfExists( 'sovereign.buildbot-uri', 'http://localhost:8010/' );

		$notice_panel = id( new PHUIBoxView() )
			->appendChild( phutil_tag( 'div', array(), $buildbot ) );

		return $this->buildApplicationPage(
			array(
				$this->buildApplicationCrumbs(),
				$notice_panel,
			),
			array(
				'title' => pht( 'Sovereign' ),
			)
		);
	}
}
