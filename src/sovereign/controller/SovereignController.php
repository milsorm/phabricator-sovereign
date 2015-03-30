<?php

final class SovereignController extends SovereignBaseController {

	public function buildApplicationCrumbs () {
		$crumbs = parent::buildApplicationCrumbs();

		return $crumbs;
	}

	public function processRequest() {
		$request = $this->getRequest();
		$user = $request->getUser();

		return $this->buildApplicationPage(
			array(
				$this->buildApplicationCrumbs(),
			),
			array(
				'title' => pht( 'Sovereign' ),
			)
		);
	}
}
