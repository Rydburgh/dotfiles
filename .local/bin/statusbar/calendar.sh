#! /bin/sh
# Outputs "Electrodynamics at 125 in room A350" to i3blocks
# 5 minutes before course changes, change current-course symlink
# Looks at current semester calendar in Zoho mail, download and imported via .ical into calcurse

# function for variable index number to relate elements in start, end, course, and future arays
IndexOf()    {
	local i=0 S=$1; shift
	while [ $S != $1 ]
	do    ((i++)); shift
		[ -z "$1" ] && { i=0; break; }
	done
	echo $i
}

# this is the current time in HHMM format
TIME=$(date '+%H%M')

# add 5 to the current time and drops leading 0's for decimal format
let "TIME=${TIME#0}"

# gets the start times for classes from calcurse in HHMM and drops leading 0's
start_ary=($(calcurse -a | column -t -s: | awk '$1 == "-" { print $2 $3 }'))
let "start_ary=${start_ary#0}"

# gets the end times for classes from calcurse in HHMM and drops leading 0's
end_ary=($(calcurse -a | column -t -s: | awk '$1 == "-" { print $5 $6 }'))
let "end_ary=${end_ary#0}"

# gets the appointment name from calcurse without leading empty cell
course_ary=($(calcurse -a | column -t | sed -n '/-/{n;p;}'))

future_start=()
future_course=()
future_room=()

# compares current time to start and end times of appointments to set current course variable
for i in "${start_ary[@]}" ; do
	if [ $i -le $TIME ] && [ $TIME -lt "${end_ary[$(IndexOf $i ${start_ary[@]})]}" ];
	then
		CURRENT_COURSE="${course_ary[$(IndexOf $i ${start_ary[@]})]}"
	else
		# if class hasn't started, adds it to future arrays
		if [ $i -gt $TIME ];
		then
			future_start+=(${start_ary[$(IndexOf $i ${start_ary[@]})]})
			future_course+=(${course_ary[$(IndexOf $i ${start_ary[@]})]})
			COURSE=(${course_ary[$(IndexOf $i ${start_ary[@]})]})
			future_room+=("$(grep room ~/Documents/university/bachelor_1/semester_1/"$COURSE"/info.yaml)")
		fi;
	fi;
done

# change symlink and ouput schelulels
rm -rf ~/current_course/*
ln -sf ~/Documents/university/bachelor_1/semester_1/$CURRENT_COURSE ~/current_course
for i in "${future_start[@]}" ; do
	echo "${future_course[$(IndexOf $i ${future_start[@]})]} at ${future_start[$(IndexOf $i ${future_start[@]})]} in ${future_room[$(IndexOf $i ${future_start[@]})]}"
done

# look for appointment that starts after current time. set start time as variable
# NEXT=
# echo the info.yaml discription, location, and start time - current time.


#  end script
# echo "current time: $TIME start: $START end: $END course: $COURSE"
