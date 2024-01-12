<?php

return [
	'caption' => 'SEO',
	'introtext' => 'SEO (Yandex, Google, etc..)',
	'settings' => [
		'yandex_verification' => [
			'caption' => 'Yandex Verification',
			'type'  => 'text',
			'note'  => 'Код верификации Yandex',
			'default_text' => '',
		],
		'yandex_metrika' => [
			'caption' => 'Yandex Metrika',
			'type'  => 'textarea',
			'note'  => 'Код счетчика Yandex',
			'default_text' => '',
		]
	],
];
