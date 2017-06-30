for /d %%i in (%CD%\assets\bin) do move %%i "%ProgramFiles(x86)%\EasyPHP-Devserver-17\eds-www"

@echo off &set
set "zielpfad=%CD%\assets"
set "progtitel=run-devserver"
set "progdir=%ProgramFiles(x86)%\EasyPHP-Devserver-17\" 
set "progexe=run-devserver.exe" 
set "beschreibung=Verknüpfung" 

echo Set objShell=WScript.CreateObject("Wscript.Shell")>%temp%\MakeShortCut.vbs 
echo Set objShortcut=objShell.CreateShortcut("%zielpfad%\%progtitel%.lnk")>>%temp%\MakeShortCut.vbs 
echo objShortcut.TargetPath="%progdir%\%progexe%">>%temp%\MakeShortCut.vbs 
echo objShortcut.Description="%beschreibung%">>%temp%\MakeShortCut.vbs 
echo objShortcut.WorkingDirectory="%progdir%">>%temp%\MakeShortCut.vbs 
echo objShortcut.Save>>%temp%\MakeShortCut.vbs 

cscript //nologo %temp%\MakeShortCut.vbs 

del %temp%\MakeShortCut.vbs

@echo off &set
set "zielpfad=%userprofile%\Desktop"
set "progtitel=JRL-Database"
set "progdir=%CD%\" 
set "progexe=JRL-Database-start.bat" 
set "beschreibung=Verknüpfung" 

echo Set objShell=WScript.CreateObject("Wscript.Shell")>%temp%\MakeShortCut.vbs 
echo Set objShortcut=objShell.CreateShortcut("%zielpfad%\%progtitel%.lnk")>>%temp%\MakeShortCut.vbs 
echo objShortcut.TargetPath="%progdir%\%progexe%">>%temp%\MakeShortCut.vbs 
echo objShortcut.Description="%beschreibung%">>%temp%\MakeShortCut.vbs 
echo objShortcut.WorkingDirectory="%progdir%">>%temp%\MakeShortCut.vbs 
echo objShortcut.IconLocation = "%CD%\JRL-Database.ico">>%temp%\MakeShortCut.vbs
echo objShortcut.Save>>%temp%\MakeShortCut.vbs 

cscript //nologo %temp%\MakeShortCut.vbs 

del %temp%\MakeShortCut.vbs