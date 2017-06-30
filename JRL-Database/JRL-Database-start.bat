start "" "%CD%\assets\run-devserver"
REM @echo off&setlocal
REM pushd "c:"
for /f "delims=" %%i in (`dir  /b /s /a eds-httpserver.exe`) do start "" %%i
REM echo %datei%
REM popd


REM start /D "%datei%" /min eds-httpserver.exe

REM @echo off&setlocal
REM pushd "c:"
for /f "delims=" %%i in (`dir /b /s /a eds-dbserver.exe`) do start "" %%i
REM echo %datei1%
REM popd

REM start "" "%datei%"
start "" "http://localhost/bin/home.html"
