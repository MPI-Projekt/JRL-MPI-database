for /d %%i in (%CD%\assets\bin) do move %%i "D:\xampp\htdocs"

REM @echo off &set
REM set "zielpfad=%CD%\assets"
REM set "progtitel=run-devserver"
REM set "progdir=%ProgramFiles(x86)%\EasyPHP-Devserver-17\" 
REM set "progexe=run-devserver.exe" 
REM set "beschreibung=Verknüpfung" 

REM echo Set objShell=WScript.CreateObject("Wscript.Shell")>%temp%\MakeShortCut.vbs 
REM echo Set objShortcut=objShell.CreateShortcut("%zielpfad%\%progtitel%.lnk")>>%temp%\MakeShortCut.vbs 
REM echo objShortcut.TargetPath="%progdir%\%progexe%">>%temp%\MakeShortCut.vbs 
REM echo objShortcut.Description="%beschreibung%">>%temp%\MakeShortCut.vbs 
REM echo objShortcut.WorkingDirectory="%progdir%">>%temp%\MakeShortCut.vbs 
REM echo objShortcut.Save>>%temp%\MakeShortCut.vbs 

REM cscript //nologo %temp%\MakeShortCut.vbs 

REM del %temp%\MakeShortCut.vbs

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

cd D:\xampp\htdocs

@echo off
mkdir upload
