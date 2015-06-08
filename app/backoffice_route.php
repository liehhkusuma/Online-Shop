<?php

/* Authentication */
app()->get("/", "AuthCtrl:index");
app()->post("/dologin", "AuthCtrl:dologin");
app()->get("/dologout", "AuthCtrl:dologout");

/* Dashboard */
app()->get("/dashboard", "DashboardCtrl:list");

/*
| User Management
*/
// Users List
app()->get("/users(/:paging)", "UserCtrl:list");
app()->get("/users/detail/:id", "UserCtrl:detail");
app()->get("/users/add", "UserCtrl:add");
app()->get("/users/edit/:id", "UserCtrl:edit");
app()->post("/users/store", "UserCtrl:store");
app()->post("/users/update/:id", "UserCtrl:update");
app()->post("/users/delete/:id", "UserCtrl:delete");

// Menu List
app()->get("/menu(/:paging)", "MenuCtrl:list");
app()->get("/menu/detail/:id", "MenuCtrl:detail");
app()->get("/menu/add", "MenuCtrl:add");
app()->get("/menu/edit/:id", "MenuCtrl:edit");
app()->post("/menu/store", "MenuCtrl:store");
app()->post("/menu/update/:id", "MenuCtrl:update");
app()->post("/menu/delete/:id", "MenuCtrl:delete");

// Module List
app()->get("/module(/:paging)", "ModuleCtrl:list");
app()->get("/module/detail/:id", "ModuleCtrl:detail");
app()->get("/module/add", "ModuleCtrl:add");
app()->get("/module/edit/:id", "ModuleCtrl:edit");
app()->post("/module/store", "ModuleCtrl:store");
app()->post("/module/update/:id", "ModuleCtrl:update");
app()->post("/module/delete/:id", "ModuleCtrl:delete");

// Document Product Type
app()->get("/module-access(/:paging)", "ModuleAccessCtrl:list");
app()->get("/module-access/detail/:id", "ModuleAccessCtrl:detail");
app()->get("/module-access/add", "ModuleAccessCtrl:add");
app()->get("/module-access/edit/:id", "ModuleAccessCtrl:edit");
app()->post("/module-access/store", "ModuleAccessCtrl:store");
app()->post("/module-access/update/:id", "ModuleAccessCtrl:update");
app()->post("/module-access/delete/:id", "ModuleAccessCtrl:delete");