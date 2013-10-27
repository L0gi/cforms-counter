=== WordPress Widget Boilerplate ===
Contributors: tommcfarlin
Tags: plugins, code
Requires at least: 3.2
Tested up to: 3.2
Stable tag: 1.0

Adds a Countdown for cForms Submissions

== Description ==

Adds a Countdown for cForms Submissions. 
How to Use:
Database Tracking has to be enabled for the Form for which submissions are to be tracked.

Fields

Titel: The Titel for this Widget that is displayed on your site.
FormID: The ID of the cForms Form that is tracked, i.e. the ID of the Form that submits the data to the database.
Countdown: If a maximum number of submissions is set, using 1 counts the submissions down from that number. Using 0 just plainly counts the submissions
CounterText: The text that is presented in the widget on your site. Here following variables can be used:
{COUNT} shows the number of submissions (if countdown is set to 0) or the maximum submissions minus current submissions count (if countdown is set to 1)
following html tags: <b><i><sup><sub><em><strong><u><br></br> (but rather use css files for styling!)

== Installation ==

1. Upload the plugin to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to Appearance > Widgets
4. Drop the widget on your side and continue!

== Changelog ==

= 1.0 =
* Initial release