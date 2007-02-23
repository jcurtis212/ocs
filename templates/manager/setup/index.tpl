{**
 * index.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Conference setup index/intro.
 *
 * $Id$
 *}

{assign var="pageTitle" value="manager.websiteManagement"}
{include file="common/header.tpl"}

<h3>{translate key="manager.setup.stepsToConferenceSite"}</h3>

<ol>
	<li>
		<h4><a href="{url op="setup" path="1"}">{translate key="manager.setup.aboutConference"}</a></h4>
		{translate key="manager.setup.aboutConference.description"}<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="{url op="setup" path="2"}">{translate key="manager.setup.additionalContent"}</a></h4>
		{translate key="manager.setup.additionalContent.description"}<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="{url op="setup" path="3"}">{translate key="manager.setup.layout"}</a></h4>
		{translate key="manager.setup.layout.description"}<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="{url op="setup" path="4"}">{translate key="manager.setup.styleSheet"}</a></h4>
		{translate key="manager.setup.styleSheet.description"}<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="{url op="setup" path="5"}">{translate key="manager.setup.access"}</a></h4>
		{translate key="manager.setup.access.description"}<br/>
		&nbsp;
	</li>
	<li>
		<h4><a href="{url op="setup" path="6"}">{translate key="manager.setup.indexing"}</a></h4>
		{translate key="manager.setup.indexing.description"}<br/>
		&nbsp;
	</li>
</ol>

{include file="common/footer.tpl"}
