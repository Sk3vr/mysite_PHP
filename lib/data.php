<?php

$me = [
	'name' => 'Дмитрий',
	'surname' => 'Уваров',
	'prof' => 'Web-developer',
];

$fullName = "{$me['name']} {$me['surname']}";


$blogs = [
	[
		'heading' => 'Статья 1',
		'sort' => 10,
		'body' => 'Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te,
                his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te
                cule tation munere noluisse. Enim torquatos ne pri, eum mollis salutandi corrumpit et, fugit apeirian duo ad.',
	], 
	[
		'heading' => 'Статья 2',
		'sort' => 2,
		'body' => 'Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te,
                his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te
                cule tation munere noluisse. Enim torquatos ne pri, eum mollis salutandi corrumpit et, fugit apeirian duo ad.',
	],
	[
		'heading' => 'Статья 3',
		'sort' => 1,
		'body' => 'Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te,
                his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te
                cule tation munere noluisse. Enim torquatos ne pri, eum mollis salutandi corrumpit et, fugit apeirian duo ad.',
	],
];

$navigation = [
	['name' => 'Главная', 'link' => 'main'],
	['name' => 'Резюме', 'link' => 'resume'],
	['name' => 'Портфолио', 'link' => 'portfolio'],
	['name' => 'Блог', 'link' => 'blog'],
	['name' => 'События', 'link' => 'events'],
	['name' => 'Контакты', 'link' => 'contacts'],
];


?>