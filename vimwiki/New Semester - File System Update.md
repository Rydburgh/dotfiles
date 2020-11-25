# How to update scripts and file system for a new semester

## Make new semester branch in directory with all classes

## Automatic Symlink Script

	 ~/.local/bin/statusbar/calendar.sh
	ln -sf ~/Documents/university/bachelor_2/semester_1/$CURRENT_COURSE ~/current_course

* Update both occurrences of ../bachelor_X/semester_Y

## Manual Symlink Script

	~/.local/bin/active_course.sh
	ln -sf ~/Documents/university/bachelor_1/semester_2/$ACTIVE_COURSE ~/current_course

* Update ../bachelor_X/semester_Y

## Hidden CourseList file

	~/Documents/university/.course_list.txt

* Change items to match new branch verbatum

## Preamble

* Duplicate last semester preabmle as preamble_old.tex
* Copy preamble.tex to ../semesterX/preamble.tex
