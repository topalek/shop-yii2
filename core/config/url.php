<?php

return [
	'/admin'                                   => '/admin/default/index',
	'<ac:login|register|contact|about|logout>' => "site/<ac>",
	'category/<slug:\w+>'                      => "category/view",
];
