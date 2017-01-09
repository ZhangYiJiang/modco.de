# [ModCo.de][1] 

**NUS IVLE URLs for Human Beings** - Because you shouldn't need a degree to get to somewhere on IVLE

## Motivation 

Navigating to the correct page on IVLE takes too many clicks (says Jim), and the URLs are completely non-human readable. For example, say I want to look at the files for the module CS2101. This would involve-

1. Go to https://ivle.nus.edu.sg/
2. Clicking on the 'Enter' button, even though I'm already logged in 
3. Hunt down the link to the CS2101 module page in the workspace 
4. Click on the 'Files' button on the sidebar 

That's far too many steps, and worse still, the URL is unreadable, so the next time I want to go to the same page, I can't just type 'cs2101' into my location bar and hope the browser will find the URL. With modco.de, now I just have to 

1. Type http://modco.de/cs2101/files into the address bar 

And you're there! Fast, human-readable URLs that are easy to find and remember. 

## Designed for humans 

Can't remember if it should be 'tests', 'quiz' or 'assessment'? Don't worry! All of them will work just the same! modco.de URLs are designed for human beings, not machines. 

The current list of synomyns are 

```php
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
	'announcement' => 'announcements',
	'announcements' => 'announcements',
	'announce' => 'announcements',
	
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
```

See anything missing? [Drop us an issue](https://github.com/ZhangYiJiang/modco.de/issues/new) or [edit the file](https://github.com/ZhangYiJiang/modco.de/blob/master/config/site.php) and make a pull request!


[1]: http://modco.de/
