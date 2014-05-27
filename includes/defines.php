<?php
/**
 * Created by Stefan Herndler.
 * User: Stefan
 * Date: 15.05.14
 * Time: 16:21
 * Version: 1.0-beta
 * Since: 1.0
 */

/*
 * PLUGIN PUBLIC NAME WITH STYLING
 * @since 1.0.7
 */
define("FOOTNOTES_PLUGIN_PUBLIC_NAME", '<span class="footnote_tag_styling footnote_tag_styling_1">foot</span><span class="footnote_tag_styling footnote_tag_styling_2">notes</span>');

/*
 * PLUGIN LOVE SYMBOL WITH STYLING
 * @since 1.2.2
 */
define("FOOTNOTES_LOVE_SYMBOL", '<span style="color:#ff6d3b; font-weight:bold;">&hearts;</span>');

/*
 * PLUGIN PUBLIC NAME WITH LINK
 * @since 1.2.2
 */
define("FOOTNOTES_PLUGIN_PUBLIC_NAME_LINKED", '<a href="http://wordpress.org/plugins/footnotes/" target="_blank" style="text-decoration:none;">' . FOOTNOTES_PLUGIN_PUBLIC_NAME . '</a>');

/* GENERAL PLUGIN CONSTANTS */
define("FOOTNOTES_PLUGIN_NAME", "footnotes"); /* plugin's internal name */
define("FOOTNOTE_SETTINGS_CONTAINER", "footnotes_storage"); /* database container where all footnote settings are stored */

/* PLUGIN SETTINGS PAGE */
define("FOOTNOTES_SETTINGS_PAGE_ID", "footnotes"); /* plugin's setting page internal id */

/* PLUGIN SETTINGS PAGE TABS */
define("FOOTNOTE_SETTINGS_LABEL_GENERAL", "footnotes_general_settings"); /* internal label for the plugin's settings tab */
define("FOOTNOTE_SETTINGS_LABEL_HOWTO", "footnotes_howto"); /* internal label for the plugin's settings tab */

/* PLUGIN SETTINGS INPUT FIELDS */
define("FOOTNOTE_INPUTFIELD_COMBINE_IDENTICAL", "footnote_inputfield_combine_identical"); /* id of input field for the combine identical setting */
define("FOOTNOTE_INPUTFIELD_REFERENCES_LABEL", "footnote_inputfield_references_label"); /* id of input field for the references label setting */
define("FOOTNOTE_INPUTFIELD_COLLAPSE_REFERENCES", "footnote_inputfield_collapse_references"); /* id of input field for the "collapse references" setting */
define("FOOTNOTE_INPUTFIELD_PLACEHOLDER_START", "footnote_inputfield_placeholder_start"); /* id of input field for the "placeholder starting tag" setting */
define("FOOTNOTE_INPUTFIELD_PLACEHOLDER_END", "footnote_inputfield_placeholder_end"); /* id of input field for the "placeholder ending tag" setting */
define("FOOTNOTE_INPUTFIELD_SEARCH_IN_EXCERPT", "footnote_inputfield_search_in_excerpt"); /* id of input field for the "allow footnotes in the excerpt" setting */
define("FOOTNOTE_INPUTFIELD_LOVE", "footnote_inputfield_love"); /* id of input field for "love and share this plugin" setting */
define("FOOTNOTE_INPUTFIELD_COUNTER_STYLE", "footnote_inputfield_counter_style"); /* id of input field for "counter style of footnote index" setting */
/*
 * id of input field "placement of reference container" setting
 * @since 1.0.7
 */
define("FOOTNOTE_INPUTFIELD_REFERENCE_CONTAINER_PLACE", "footnote_inputfield_reference_container_place");

/*
 * id of input field for 'user defined placeholder start and end tag
 * @since 1.1.2
 */
define("FOOTNOTE_INPUTFIELD_PLACEHOLDER_START_USERDEFINED", "footnote_inputfield_placeholder_start_user_defined");
define("FOOTNOTE_INPUTFIELD_PLACEHOLDER_END_USERDEFINED", "footnote_inputfield_placeholder_end_user_defined");


/* PLUGIN REFERENCES CONTAINER ID */
define("FOOTNOTE_REFERENCES_CONTAINER_ID", "footnote_references_container"); /* id for the div surrounding the footnotes */

/* PLUGIN DIRECTORIES */
define("FOOTNOTES_PLUGIN_DIR_NAME", "footnotes");
define("FOOTNOTES_LANGUAGE_DIR", dirname(__FILE__) . "/../languages/");
define("FOOTNOTES_TEMPLATES_DIR", dirname(__FILE__) . "/../templates/");

/*
 * PLUGIN PLACEHOLDER TO NOT DISPLAY THE 'LOVE ME' SLUG
 * @since 1.1.1
 */
define("FOOTNOTES_NO_SLUGME_PLUG", "[[no footnotes: love]]");

define("FOOTNOTES_REFERENCE_CONTAINER_POSITION", "[[footnotes reference container position]]");