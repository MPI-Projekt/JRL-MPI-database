copy "%CD%\assets\bin" "D:\xampp\htdocs"

path=%CD%
D:\xampp\htdocs

mkdir bilder
mkdir upload
copy "%path%assets\bin\bilder" "%CD%\bilder"


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
