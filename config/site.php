<?php

return [
	'semester' => '1617_sem1',
	
	'ivle' => [
		'prefix' => 'https://ivle.nus.edu.sg/v1/',
		'suffix' => '.aspx?CourseId=',
		
		'routes' => [
			'module'        => 'Module/Student/Default',
			'assessment'    => 'Assessment/Student/default',
			'announcement'  => 'Announcement/default',
			'files'         => 'File/Student/Default',
			'forum'         => 'forum/forum',
			'webcast'       => 'Webcast/Student/multimedia',
			'multimedia'    => 'Media/Student/default',
			'gradebook'     => 'Gradebook/list_gradebook',
			'consultation'  => 'Module/Student/consultation',
		],
	],
	
	// Defines the routes used when redirecting
	'routes' => [
		'' => 'module',
		'module' => 'module',
		
		// Assessment
		'assessment' => 'assessment',
		'assessments' => 'assessment',
		'test' => 'assessment',
		'tests' => 'assessment',
		'quiz' => 'assessment',
		'quizzes' => 'assessment',
		
		// Announcement
		'announcement' => 'announcement',
		'announcements' => 'announcement',
		'announce' => 'announcement',
		
		// Files
		'files' => 'files',
		'file' => 'files',
		'workbin' => 'files',
		
		// Forum
		'forum' => 'forum',
		'forums' => 'forum',
		'discussion' => 'forum',
		
		// Webcast
		'webcast' => 'webcast',
		'webcasts' => 'webcast',
		'video' => 'webcast',
		'videos' => 'webcast',
		
		// Multimedia
		'multimedia' => 'multimedia',
		'media' => 'multimedia',
		
		// Gradebook
		'gradebook' => 'gradebook',
		'grades' => 'gradebook',
		'score' => 'gradebook',
		'marks' => 'gradebook',
		'results' => 'gradebook',
		
		// Consultation
		'consultation' => 'consultation',
		'consult' => 'consultation',
	],
];