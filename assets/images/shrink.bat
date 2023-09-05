set "filename=%~nx1"
ffmpeg -y -i %1 -vf scale=-1:20 sm/%filename%