@echo off

if [%1]==[] goto end
symfony console make:controller %1
:end