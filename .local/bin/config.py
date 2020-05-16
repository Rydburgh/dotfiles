from datetime import datetime
from pathlib import Path

def get_week(d=datetime.today()):
    return (int(d.strftime("%W")) + 52 - 5) % 52

CURRENT_COURSE_SYMLINK = Path('~/Documents/university/current_course').expanduser()
CURRENT_COURSE_ROOT = CURRENT_COURSE_SYMLINK.resolve()
CURRENT_COURSE_WATCH_FILE = Path('/tmp/current_course').resolve()
ROOT = Path('~/Documents/university/bachelor_1/semester_2').expanduser()
DATE_FORMAT = '%a %d %b %Y %H:%M'
