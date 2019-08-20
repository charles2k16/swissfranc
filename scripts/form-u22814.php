<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.0.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'contact directly Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => 'index.html',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'swissfranccare@outlook.com',
		'to' => 'swissfranccare@outlook.com'
	),
	'fields' => array(
		'custom_U22828' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'First Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'First Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Last Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Last Name\' is required.',
				'format' => 'Field \'Last Name\' has an invalid email.'
			)
		),
		'custom_U22849' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Phone\' is required.'
			)
		),
		'custom_U22841' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.'
			)
		),
		'custom_U22837' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Country',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Country\' is required.'
			)
		),
		'custom_U22815' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'City',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'City\' is required.'
			)
		),
		'custom_U22845' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Zip code',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Zip code\' is required.'
			)
		),
		'custom_U22824' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'State',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'State\' is required.'
			)
		),
		'custom_U22832' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Tell us what you are interested in',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Tell us what you are interested in\' is required.'
			)
		)
	)
);

process_form($form);
?>