@echo off
setlocal enabledelayedexpansion

for %%A in (%*) do (
  set "filename=%%~A"
  call ".\shrink.bat" "!filename!"
)

endlocal
