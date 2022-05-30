<?php

/*
print("<pre>");
print_r($_SERVER);
print("</pre>");
*/

print("IP del servidor: $_SERVER[SERVER_ADDR]");
print("<br/>");
print("Nombre del servidor: $_SERVER[SERVER_NAME]");
print("<br/>");
print("Software del servidor: $_SERVER[SERVER_SOFTWARE]");
print("<br/>");
print("User agent del usuario: $_SERVER[HTTP_USER_AGENT]");
print("<br/>");
print("IP del cliente: $_SERVER[REMOTE_ADDR]");