#! /bin/sh
# Outputs "Electrodynamics at 1300 in room A350"
IndexOf()    {
	local i=0 S=$1; shift
	while [ $S != $1 ]
	do    ((i++)); shift
		[ -z "$1" ] && { i=0; break; }
	done
	echo $i
}

future_start=()
future_course=()
future_room=()
TIME=$(date '+%H%M')
let "TIME=${TIME#0}"
course_ary=($(calcurse -a | column -t | sed -n '/-/{n;p;}'))
start_ary=($(calcurse -a | column -t -s: | awk '$1 == "-" { print $2 $3 }'))
let "start_ary=${start_ary#0}"
end_ary=($(calcurse -a | column -t -s: | awk '$1 == "-" { print $5 $6 }'))
let "end_ary=${end_ary#0}"

# look for the current course
for i in "${start_ary[@]}" ; do
	if [ $i -le $TIME ] && [ $TIME -lt "${end_ary[$(IndexOf $i ${start_ary[@]})]}" ];
	then
		CURRENT_COURSE="${course_ary[$(IndexOf $i ${start_ary[@]})]}"
	else
		# if class starts later today, it's attributes are put into future arrays.
		if [ $i -gt $TIME ];
		then
			future_start+=(${start_ary[$(IndexOf $i ${start_ary[@]})]})
			future_course+=(${course_ary[$(IndexOf $i ${start_ary[@]})]})
			COURSE=(${course_ary[$(IndexOf $i ${start_ary[@]})]})
			future_room+=("$(grep room ~/Documents/university/bachelor_1/semester_1/"$COURSE"/info.yaml)")
		fi;
	fi;
done

for i in "${future_start[@]}" ; do
	echo "${future_course[$(IndexOf $i ${future_start[@]})]} at ${future_start[$(IndexOf $i ${future_start[@]})]} in ${future_room[$(IndexOf $i ${future_start[@]})]}"
done

# change symlink
rm -rf ~/current_course/*
ln -sf ~/Documents/university/bachelor_1/semester_1/$CURRENT_COURSE ~/current_course
