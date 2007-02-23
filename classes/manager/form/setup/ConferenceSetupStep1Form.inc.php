<?php

/**
 * ConferenceSetupStep1Form.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package manager.form.setup
 *
 * Form for Step 1 of conference setup.
 *
 * $Id$
 */

import("manager.form.setup.ConferenceSetupForm");

class ConferenceSetupStep1Form extends ConferenceSetupForm {
	
	function ConferenceSetupStep1Form() {
		parent::ConferenceSetupForm(
			1,
			array(
				'conferenceDescription' => 'string',
				'contactName' => 'string',
				'contactTitle' => 'string',
				'contactAffiliation' => 'string',
				'contactEmail' => 'string',
				'contactPhone' => 'string',
				'contactFax' => 'string',
				'contactMailingAddress' => 'string',
				'copyrightNotice' => 'string',
				'copyrightNoticeAgree' => 'bool',
				'postCreativeCommons' => 'bool',
				'privacyStatement' => 'string',
				'customAboutItems' => 'object'
			)
		);
		
		// Validation checks for this form
		$this->addCheck(new FormValidator($this, 'contactName', 'required', 'manager.setup.form.contactNameRequired'));
		$this->addCheck(new FormValidator($this, 'contactEmail', 'required', 'manager.setup.form.contactEmailRequired'));

/* --- The following checks were previously on page 1 but the fields were moved
		$this->addCheck(new FormValidator($this, 'conferenceTitle', 'required', 'manager.setup.form.conferenceTitleRequired'));
		$this->addCheck(new FormValidator($this, 'conferenceAcronym', 'required', 'manager.setup.form.conferenceAcronymRequired'));
		$this->addCheck(new FormValidator($this, 'supportName', 'required', 'manager.setup.form.supportNameRequired'));
		$this->addCheck(new FormValidator($this, 'supportEmail', 'required', 'manager.setup.form.supportEmailRequired'));
		$this->addCheck(new FormValidatorEmail($this, 'envelopeSender', 'optional', 'user.profile.form.emailRequired')); */
	}

	function initData() {
		parent::initData();

		$conference = Request::getConference();
		$this->_data['conferenceTitle'] = $conference->getTitle();
	}

	function readInputData() {
		parent::readInputData();
		$this->_data['conferenceTitle'] = Request::getUserVar('conferenceTitle');
	}

	/* function display() {
		$templateMgr = &TemplateManager::getManager();
		if (Config::getVar('email', 'allow_envelope_sender'))
			$templateMgr->assign('envelopeSenderEnabled', true);
		parent::display();
	} */
}

?>
